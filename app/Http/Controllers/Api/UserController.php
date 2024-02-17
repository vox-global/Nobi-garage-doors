<?php

namespace App\Http\Controllers\Api;

use App\Http\Common\Constant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Common\Helper as CustomHelper;
use App\Models\{User, ApiToken, Appointment, Article, City, Clinic, Degree, Disease, DoctorDetail, DoctorService, DoctorEducation, Faq, DoctorSpeciality, Language, Newsletter, Service, Speciality, UserArticleReview, UserSocialAccount, UserSubscription};
use App\Http\Resources\User\{AppointmentResource, UserDetailResource, UserResource, UserSummeryResource};
use App\Mail\Mails;
use Carbon\Carbon;
use Illuminate\Support\Facades\{DB, Hash, Mail, Validator};
use App\Http\Common\{Helper, SmsHelper, EmailHelper};
use Illuminate\Support\Arr;

class UserController extends Controller
{
    /**
     * This method is used to SignUp a new User
     */
    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'phone' => ['required', 'regex:/(03)[0-9]{9}$/'],
                'network' => ['required'],
            ]);
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }
            $getUser = User::where(['status' => true, 'is_blocked' => false, 'phone' => $request->phone])->first();
            if($getUser && $getUser->role_id != $this->getConstantByValue("USER_ROLE_ID")) {
                return $this->returnResponse(401, 'You are not authorized.');
            }
            $otp = Helper::generateOTP();
            $getUser = User::updateOrCreate([
                    'phone' => $request->phone
                ], [
                    'otp' => $otp,
                    'network' => $request->network,
                    'role_id' => $this->getConstantByValue("USER_ROLE_ID")
                ]
            );
            // // SEND OTP EMAIL 
            // $template_path = 'email_templates.otp';
            // $template_data = [
            //     "otp_type" => "Login",
            //     "otp" => $otp,
            // ];
            // $to_email = "tahairshad@weuno.com";
            // $subject = "Meri Sehat Login OTP";
            // EmailHelper::sendMail($template_path, $template_data, $to_email, $subject);

            // // SEND OTP SMS 
            // $to = $getUser->phone;
            // $message = Helper::getSmsText('login',$otp);
            // $smsHelper = new SmsHelper();
            // $smsHelper->send($to, $message);

            return $this->returnResponse(200, "OTP has been sent successfully.", [
                'mask_email' => CustomHelper::emailMasking($getUser->email),
                'mask_phone' => CustomHelper::phoneMasking($getUser->phone),
                'is_sign_up' => ($getUser->email == null) ? true : false,
            ]);
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * Thismethod is used to resend OTP
     */
    public function resendOtp(Request $request)
    {
        try{
            $userId = $request->header('user_id');
            $validator = Validator::make($request->all(), [
                'phone' => ['required', 'regex:/(03)[0-9]{9}$/'],
                'network' => ['required'],
            ]);
            if($userId != 0){
                $validator = Validator::make($request->all(), [
                    'phone' => ['required', 'regex:/(03)[0-9]{9}$/', 'unique:users,phone'],
                    'network' => ['required'],
                ]);
            }
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }
            if($userId != 0){
                $getUser = User::where(['id' => $userId, 'status' => true, 'is_blocked' => false])->first();

                $getUser->update(['new_phone' => $request->phone]);
            }else{
                $getUser = User::where(['status' => true, 'is_blocked' => false, 'phone' => $request->phone])->first();
                if($getUser && $getUser->role_id != $this->getConstantByValue("USER_ROLE_ID")) {
                    return $this->returnResponse(401, 'You are not authorized.');
                }
            }
            $otp = Helper::generateOTP();
            $getUser->update(['otp' => $otp, 'network' => $request->network]);
           
            // // SEND OTP EMAIL 
            // $template_path = 'email_templates.otp';
            // $template_data = [
            //     "otp_type" => "Resend",
            //     "otp" => $otp,
            // ];
            // $to_email = "tahairshad@weuno.com";
            // $subject = "Meri Sehat Resend OTP";
            // EmailHelper::sendMail($template_path, $template_data, $to_email, $subject);

            // // SEND OTP SMS 
            // $to = $getUser->phone;
            // $message = Helper::getSmsText('resend',$otp);
            // $smsHelper = new SmsHelper();
            // $smsHelper->send($to, $message);
            
            $to = ($userId == 0) ? $getUser->phone : $request->phone;
            return $this->returnResponse(200, "OTP has been resent successfully.", [
                'mask_email' => CustomHelper::emailMasking($getUser->email),
                'mask_phone' => CustomHelper::phoneMasking($to),
                'is_sign_up' => ($getUser->email == null || $getUser->phone) ? true : false,
            ]);
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * This method is used to verify User's phone number
     */
    public function verifyOtp(Request $request)
    {
        try{
            $input = $request->all();
            $validator = Validator::make($input, [
                'phone' => ['sometimes', 'regex:/(03)[0-9]{9}$/','exists:users,phone'],
                'otp' => ['required', 'numeric'],
                'new_phone' => ['unique:users,phone', 'regex:/(03)[0-9]{9}$/'],
            ]);
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }
            (isset($input['new_phone']))
            ?   $getUser = User::getUser($request->header('user_id'), $input['otp'], null, $input['new_phone']) 
            :   $getUser = User::getUser($input['phone'], $input['otp']);
            
            if(!$getUser){
                if($request->header('locale') == Language::ENGLISH){
                    return $this->returnResponse(400, 'Invalid verification code.');
                }else{
                    return $this->returnResponse(400, 'غلط توثیقی کوڈ۔');
                }
            }
            if(isset($input['new_phone'])){
                $input['phone'] = $input['new_phone'];
                $input['new_phone'] = null;
            }
            $input['otp'] = null;
            $input['status'] = true;
            $updateUser = $getUser->update($input);
            if(!$updateUser){
                return $this->returnResponse(400, 'Unable to update user profile.');
            }
            $getUser = User::find($getUser->id);
            ApiToken::getTokenDetails($request->bearerToken())->update(['user_id' => $getUser->id]);
            return $this->returnResponse(200, 'Phone number has been verified successfully.', ['user' => new UserResource($getUser)]);
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * This methoid is used to get User details
     */
    public function getUser(Request $request){
        try{
            $userId = isset($request->user) ? $request->user : $request->header('user_id');
            $getUser = User::find($userId);
            if(!$getUser){
                return $this->returnResponse(400, 'User not found.');
            }
            return $this->returnResponse(200, 'User Details.', ['user' => new UserDetailResource($getUser)]);
        }
        catch(\Exception $e){
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * This method is used to update User profile
     */
    public function updateProfile(Request $request){
        try{
            $input = $request->all();
            if($request->is_sign_up == true){
                $validator = Validator::make($input, [
                    'city_id' => ['required', 'exists:cities,id'],
                    'gender' => ['required'],
                ]);
            }else{
                $validator = Validator::make($input, [
                    'image' => ['image', 'mimes:jpeg,png,jpg,JPEG,PNG,JPG,MPEG,heif,heic,heif-sequence,heic-sequence'],
                    'city_id' => ['required', 'exists:cities,id'],
                ]);
            }
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }
            if($request->header('locale') != Language::ENGLISH){
                $input['city_id'] = City::find($input['city_id'])->translation_of;
            }
            $getUser = User::find($request->header('user_id'));
            if($getUser && $getUser->role_id != $this->getConstantByValue("USER_ROLE_ID")) {
                return $this->returnResponse(401, 'You are not authorized.');
            }
            if($request->hasFile('image')){
                if($getUser->image){
                    $this->deleteFile($getUser->image, $getUser->id);
                }
                $this->uploadFile($request->file('image'), $getUser->id);
                $input['image'] = $this->getFileName($request->file('image'));
            }
            unset($input['is_sign_up']);
            unset($input['phone']);
            $updateUser = $getUser->update($input);
            if(!$updateUser){
                return $this->returnResponse(400, 'Unable to update user profile.');
            }
            return $this->returnResponse(200, 'Update user profile successfully.', ['user' => new UserResource(User::find($getUser->id))]);
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * This method is used to send otp on email or phone number
     */
    public function logout(Request $request)
    {
        try{
            ApiToken::where('token', $request->bearerToken())->first()->delete();
            if($request->header('locale') == Language::ENGLISH){
                return $this->returnResponse(200, 'Logged out successfully.');
            }else{
                return $this->returnResponse(200, 'کامیابی سے لاگ آؤٹ ہو گیا۔');
            }
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }

    public function doctorRegistration(Request $request)
    {
        try{
            DB::beginTransaction();
            $input = $request->all();
           
            $validator = Validator::make($input, [
                'phone' => ['required', 'unique:users,phone', 'regex:/(03)[0-9]{9}$/'],
                'email' => ['required', 'email', 'unique:users,email'],
                'gender' => ['required'],
                'prefix' => ['required'],
                'name' => ['required'],
                'experience' => ['required'],
                'password' => ['required'],
                'pmc_number' => ['required'],
                'speciality' => ['required','array'],
                'speciality.*' => ['required', 'exists:specialities,id'],
                'service' => ['required','array'],
                'service.*' => ['required','exists:services,id'],
            ]);
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }

            $createDoctor = User::create([
                'phone' => $request->phone,
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'gender' => $request->gender,
                'otp' => $otp = rand(1000, 9999),
                'role_id' => $this->getConstantByValue("DOCTOR_ROLE_ID")
            ]);

            $doctorDetails = DoctorDetail::create([
                'doctor_id' => $createDoctor->id,
                'prefix' => $request->prefix,
                'experience_year' => $request->experience,
                'pmc_no' => $request->pmc_number
            ]);
            foreach($request->speciality as $specialityId) {
                $doctorSpeciality = DoctorSpeciality::create([
                    'doctor_id' => $createDoctor->id,
                    'speciality_id' => $specialityId,
                ]);
            }
            foreach($request->service as $serviceId) {
                $doctorService = DoctorService::create([
                    'doctor_id' => $createDoctor->id,
                    'service_id' => $serviceId,
                ]);
            }
            if(!$createDoctor || !$doctorDetails || !$doctorSpeciality || !$doctorService){
                return $this->returnResponse(400, 'Unable to create doctor profile.');
            }
            ApiToken::getTokenDetails($request->bearerToken())->update(['user_id' => $createDoctor->id]);
            DB::commit();
            return $this->returnResponse(200, 'Doctor profile has been created successfully.', ['user' => new UserResource(User::find($createDoctor->id))]);
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }

    public function doctorLogin(Request $request)
    {
        try
        {
            $input = $request->all();
            $validator = Validator::make($input, [
                'email' => ['required', 'email', 'exists:users,email'],
                'password' => ['required']
            ]);
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }
            $getUser = User::where(['status' => true, 'is_blocked' => false, 'email' => $request->email])->first();

            $passwordCheck = Hash::check($request->password, $getUser->password);
            if(!$passwordCheck) {
                return $this->returnResponse(400, 'Invalid email or password');
            }
            ApiToken::getTokenDetails($request->bearerToken())->update(['user_id' => $getUser->id]);
            return $this->returnResponse(200, 'Successfully logged in!', [
                'mask_email' => CustomHelper::emailMasking($getUser->email),
                'mask_phone' => CustomHelper::phoneMasking($getUser->phone),
                'user' => new UserResource($getUser)
            ]);
        }
        catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }

    public function updateDoctor(Request $request)
    {
        try{
            DB::beginTransaction();
            $input = $request->all();
            $userId = $this->getUserIdFromHeader($request->header());
            $validator = Validator::make($input, [
                'phone' => ['required', 'regex:/(03)[0-9]{9}$/'],
                'email' => ['required', 'email'],
                'gender' => ['required'],
                'name' => ['required'],
                'experience_year' => ['required'],
                'city_id' => ['required','exists:cities,id'],
                'education' => ['required','array'],
                'birth_date' => ['required','date'],
                'speciality' => ['required','array'],
                'speciality.*' => ['required','exists:specialities,id'],
                'service' => ['required','array'],
                'service.*' => ['required','exists:services,id'],
            ]);
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }

            $updateDoctor = User::where(['status' => true, 'is_blocked' => false, 'id' => $userId])->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'network'=>$request->network,
                'gender'=>$request->gender,
                'city_id'=>$request->city_id,
                'birth_date'=>$request->birth_date
            ]);

            DoctorDetail::where('doctor_id',$userId)->update([
                'experience_year' =>$request->experience_year,
                'is_physical_consultancy' => isset($request->is_physical_consultancy) ? $request->is_physical_consultancy : 0,
                'is_video_consultancy' => isset($request->is_video_consultancy) ? $request->is_video_consultancy : 0,
                'is_voice_consultancy' => isset($request->is_voice_consultancy) ? $request->is_voice_consultancy : 0,
            ]);

            foreach($request->speciality as $specialityId) {
                DoctorService::updateOrCreate(
                [
                    'doctor_id' => $userId,
                    'service_id' => $specialityId,
                ], [
                    'doctor_id' => $userId,
                    'service_id' => $specialityId,
                ]);
            }
            foreach($request->speciality as $specialityId) {
                DoctorSpeciality::updateOrCreate(
                [
                    'doctor_id' => $userId,
                    'speciality_id' => $specialityId,
                ],
                [
                    'doctor_id' => $userId,
                    'speciality_id' => $specialityId,
                ]);
            }

            foreach($request->education as $educations) {
                DoctorEducation::updateOrCreate(
                [
                    'degree' => $educations['degree'],
                ],
                [
                    'doctor_id' => $userId,
                    'degree' => $educations['degree'],
                    'institute' => $educations['institute'],
                    'year_of_completion' => isset($educations['year_of_completion']) ? $educations['year_of_completion'] : "",
                    'is_completed' => $educations['is_completed'],
                ]);
            }

            if(!$updateDoctor){
                return $this->returnResponse(400, 'Unable to update user profile.');
            }
            DB::commit();
            return $this->returnResponse(200, 'Update user profile successfully.', ['user' => new UserSummeryResource(User::find($userId))]);
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }

    public function deleteService($id)
    {   
        try{
            $removeService = DoctorService::where('id', $id)->delete();
            if(!$removeService){
                return $this->returnResponse(400, 'Unable to remove doctor service.');
            }
            return $this->returnResponse(200, 'Removed successfully.');
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }

    public function deleteEducation($id)
    {   
        try{
            $removeEduation = DoctorEducation::where('id',$id)->delete();
            if(!$removeEduation){
                return $this->returnResponse(400, 'Unable to remove doctor education.');
            }
            return $this->returnResponse(200, 'Removed successfully.');
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * This method is used to create new user's social account
     */
    public function socialLogin(Request $request)
    {
        try{
            $input = $request->all();
            $validator = Validator::make($request->all(), [
                'social_id' => ['required'],
                'platform' => ['required', 'in:facebook,twitter,google,apple'],
                'phone' => ['sometimes', 'regex:/(03)[0-9]{9}$/'],
                'name' => ['sometimes'],
                'email' => ['sometimes'],
            ]);
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }
            DB::beginTransaction();
    
            $getUser = User::whereHas('socialAccounts', function($query) use($request){
                $query->where(['platform' => $request->platform, 'social_id' => $request->social_id]);
            })->first();
            if(!$getUser){
                $getUser = User::create([
                    'role_id' => $this->getConstantByValue("USER_ROLE_ID"),
                    'phone' => $request->phone,
                    'name' => $request->name,
                    'email' => $request->email
                ]);
                UserSocialAccount::updateOrCreate(
                [
                    'user_id' => $getUser->id,
                    'platform' => $request->platform,
                    'social_id' => $request->social_id
                ],
                [
                    'platform' => $request->platform,
                    'social_id' => $request->social_id
                ]);
            }
            $getUser->update($input);
            ApiToken::getTokenDetails($request->bearerToken())->update(['user_id' => $getUser->id]);
            DB::commit();
            return $this->returnResponse(200, 'Social logged in successfully.', ['user' => new UserResource($getUser)]);
        }catch(\Exception $e){
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * This method is used to get all the FAQ's available
     */
    public function getFaqs(Request $request)
    {
        try {
            $getFaqs = Faq::getFaqs($request->category_id);
            if(!count($getFaqs)){
                return $this->returnResponse(400, 'There is no faq\'s available right now.');
            }
            return $this->returnResponse(200, '', $getFaqs);
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * This method is used to get all the FAQ's available
     */
    public function subscribeNewsletter(Request $request)
    {
        try {$validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
        ]);
        if ($validator->fails()) {
            return $this->returnResponse(400, $validator->errors()->first());
        }
        Newsletter::updateOrCreate(
            [ 'email' => $request->email ],
            [ 'email' => $request->email ]
        );
        
        $template_path = 'email_templates.welcome_newsletter';
        $to_email = $request->email;
        $subject = "Meri Sehat - Welcome";
        EmailHelper::sendMail($template_path, [], $to_email, $subject);
        return $this->returnResponse(200, 'You are subscribed for the newsletter successfully.');
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }

    public function forgotPasswordMail(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'email' => ['required', 'email', 'exists:users,email'],
            ]);
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }
            $detail = [
                'otp' => '0000',
                'subject' => 'Test',
                'body' => 'Test'
            ];
            User::where('email', $request->email)->update(['otp' => '0000']);

            Mail::to($request->email)->send(new Mails($detail, "forgot_password"));
            
            return $this->returnResponse(200, 'OTP has been sent to your email successfully.');
        }
        catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }           
    }

    public function forgotPassword(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'email' => ['required', 'email', 'exists:users,email'],
                'otp' => ['required'],
            ]);
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }
            $getUser = User::getUser($request->email, $request->otp);
            if(!$getUser) {
                return $this->returnResponse(400, 'Invalid OTP.');
            }
            return $this->returnResponse(200, 'OTP verified successfully.');
        }
        catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }         
    }

    public function resetPassword(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'email' => ['required', 'email', 'exists:users,email'],
                'password' => ['required'],
            ]);
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }
            $getUser = User::getUser($request->email);
            if(!$getUser) {
                return $this->returnResponse(400, 'User Not Found.');
            }
            $getUser->update(['password' => Hash::make($request->password)]);
            return $this->returnResponse(200, 'Password updated successfully.');
        }
        catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }       
    }

    public function updatePassword(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'password' => ['required'],
                'current_password' => ['required']
            ]);
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }
            $userId = $this->getUserIdFromHeader($request->header());
            $getUser = User::where(['status' => true, 'is_blocked' => false, 'id' => $userId])->first();
            if(!$getUser) {
                return $this->returnResponse(400, 'User Not Found.');
            }
            $passwordCheck = Hash::check($request->current_password,$getUser->password);

            if($passwordCheck)
            {
                $getUser->update(['password'=>Hash::make($request->password)]);
            }
            else
            {
                return $this->returnResponse(400, 'Invalid Current Password');
            }

            $getUser->update(['password'=>Hash::make($request->password)]);
            
            return $this->returnResponse(200, 'Password Updated Successfully.');
        }
        catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }       
    }
    /**
     * This method is used to like or unlink the specified article from user
     */
    public function likeOrUnLike(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'article_id' => ['required', 'exists:articles,id'],
                'is_like' => ['required']
            ]);
            if ($validator->fails()) {
                return $this->returnResponse(400, $validator->errors()->first());
            }
            if($request->header('user_id') == 0){
                return $this->returnResponse(400, 'For giving feedback, please register your account first.');
            }
            UserArticleReview::updateOrcreate(
                [
                    'article_id' => $request->article_id,
                    'user_id' => $request->header('user_id'),
                ],
                [
                    'is_like' => $request->is_like == 'true' || $request->is_like == true ?  true : false,
                ]
            );
            if($request->header('locale') == Language::ENGLISH){
                return $this->returnResponse(200, 'Thanks for your feedback');
            }else{
                return $this->returnResponse(200, 'آپ کی راے کا شکریہ');
            }

        }catch(\Exception $e){
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * This method is used to get the dashboard details for user
     */
    public function getDashboardDetails(Request $request)
    {
        try{
            $getUser = User::where(['status' => true, 'is_blocked' => false, 'id' => $request->header('user_id')])
            ->withCount([
                'familyMembers AS family_members',
                'healthScans AS health_scans',
                'medicalRecords AS medical_records',
                'doctorReviews AS total_reviews',
                'appointment AS total_appointments',
                'appointment AS in_person_appointments' => function($query){
                    $query->where('type', Constant::APPOINTMENT_TYPE_IN_PERSON);
                },
                'appointment AS virtual_appointments' => function($query){
                    $query->where('type', Constant::APPOINTMENT_TYPE_SCHEDULE);
                },
                'appointment AS instant_consultations' => function($query){
                    $query->where('type', Constant::APPOINTMENT_TYPE_INSTANT);
                },
            ])
            ->first();
            $getAppointment = Appointment::where(['status' => true, 'user_id' => $getUser->id])
            ->where('progress', (new Constant)->APPOINTMENT_STATUS_PENDING)
            ->where(function($query){
                $query->where(function($subQuery){
                    $subQuery->where('date', '=', Carbon::now()->format('Y-m-d'));
                    $subQuery->where('time', '>=', Carbon::now()->format('H:i'));
                });
                $query->orWhere('date', '>', Carbon::now()->format('Y-m-d'));
            })
            ->orderBy('date', 'ASC')
            ->orderBy('time', 'ASC')
            ->first();

            return $this->returnResponse(200, '', [
                'family_members' => $getUser->family_members,
                'health_scans' => $getUser->health_scans,
                'medical_records' => $getUser->medical_records,
                'total_reviews' => $getUser->total_reviews,
                'total_appointments' => $getUser->total_appointments,
                'in_person_appointments' => $getUser->in_person_appointments,
                'virtual_appointments' => $getUser->virtual_appointments,
                'instant_consultations' => $getUser->instant_consultations,
                'total_comments' => 0,
                'comments' => null,
                'reviews' => $getUser->doctorReviews,
                'subscription' => $getUser->subscription ?? null,
                'upcomming_appointment' => $getAppointment ? new AppointmentResource($getAppointment) : null,
            ]);
        }catch(\Exception $e){
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * This method is used to Search Doctors by Applying filters
     */
    public function searchDoctors(Request $request)
    {
        try {
            $city = $request->city;
            $gender = $request->gender;
            $experienceYear = $request->experience_year;
            $speciality = $request->speciality;
            $service = $request->service;
            $most_reviewed = $request->most_reviewed ? 'desc': 'asc';
            $most_experince = $request->most_experince;
            $by_fees = $request->by_fees;
            $availableNow = $request->available_now == 'true' ? [true] : [true, false];
            $search = $request->q;
            $language = $request->header('locale');
            $platform = $request->header('platform');

            $getDoctors = User::where(['status' => true, 'is_blocked' => false, 'role_id' => $this->getConstantByValue('DOCTOR_ROLE_ID')])
            ->withCount('doctorReviews as review_count')
            ->where(function($query) use($search){
                if($search){
                    $query->orWhere('name', 'like', "%$search%");
                    $query->orWhereHas('doctorClinics.clinic', function($query) use ($search){
                        $query->where('name', 'like', "%$search%");
                    });
                    $query->orWhereHas('doctorDetail', function($query) use ($search){
                        $query->where('prefix', 'like', "%$search%");
                    });
                }
            })
            ->where(function($query) use($gender){
                if($gender){
                    $query->where('gender', $gender);
                }
            })
            ->whereHas('doctorDetail', function($query) use($experienceYear, $availableNow){
                if($experienceYear){
                    $query->where('experience_year', $experienceYear);
                }
                if($availableNow !== null){
                    $query->whereIn('is_available', $availableNow);
                }
            })
            ->whereHas('city', function($query) use($city){
                if($city){
                    $query->where('name', $city);
                }
            })
            ->whereHas('doctorSpecialityDetails', function($query) use($speciality){
                if($speciality){
                    $speciality = explode(',', $speciality);
                    $query->whereIn('slug', $speciality);
                }
            })
            ->whereHas('doctorServiceDetails', function($query) use($service){
                if($service){
                    $service = explode(',', $service);
                    $service = collect($service)->map(function ($name) {
                        return \Str::headline($name);
                    })->all();
                    $query->whereIn('name', $service);
                }
            })
            ->with('doctorServiceDetails', 'doctorSpecialityDetails', 'city', 'doctorDetail', 'doctorHighPaidClinic')
            ->orderBy('review_count', $most_reviewed)
            ->get();
            $getDoctors = collect($getDoctors)->unique('id');
            $doctorCount = $getDoctors->count();
            if($by_fees){
                $getDoctors = $getDoctors->sortByDesc('doctorHighPaidClinic.consultation_fee');
            }
            if($most_experince){
                $getDoctors = $getDoctors->sortByDesc('doctorDetail.experience_year');
            }

            $sortFilters = $platform == 'web' ? $this->getKeyValue( ['available_now', 'available_today', 'by_fees', 'most_reviewed', 'most_experince'], null, null, null, null, true) : [];
            $filters = [
                'availability' => $platform != 'web' ? [['key' => 'available_now', 'value' => true, 'title' => 'Available Now'], ['key' => 'available_today', 'value' => true, 'title' => 'Today'], ['key' => 'later', 'value' => true, 'title' => 'Later']] : null,
                'gender' => $platform != 'web' ? ($language == Language::ENGLISH ? $this->getKeyValue( ['male', 'female'], 'ucfirst') : [['key' => 'male', 'value' => 'مرد'], ['key' => 'female', 'value' => 'عورت']]) : null,
                'experience_year' => $this->getKeyValue(collect($getDoctors->pluck('doctorDetail.experience_year')->unique()->sort()->values()->all())),
                'speciality' => $platform != 'web' ? $this->getKeyValue(collect(Arr::flatten($getDoctors->pluck('doctorSpecialityDetails')))->pluck('name')->unique()->sort()->values()->all(), null, 'slugify') : null,
                'service' => $platform != 'web' ? $this->getKeyValue(collect(Arr::flatten($getDoctors->pluck('doctorServiceDetails')))->pluck('name')->unique()->sort()->values()->all(), null, 'slugify') : null,
            ];
            return $this->returnResponse(200, '', [
                'sort' => $sortFilters,
                'filters' => $filters,
                'doctor_count' => $doctorCount,
                'doctors' => UserSummeryResource::collection($getDoctors),
            ]);
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e);
        }
    }
    /**
     * This function is used to create key value pairs for an array
     */
    private function getKeyValue($value, $wrapperfunction = null, $slugify = null, $slug = null, $locale = null, $sorting = null)
    {
        $result = [];
        for($i = 0; $i < count($value); $i++)
        {
            if($slugify == 'un-slugify'){
                $result[] = [
                    'key' => $value[$i],
                    'value' => \Str::title(str_replace('-', ' ', $value[$i]))
                ];
            }elseif($slugify == 'slugify'){
                $result[] = [
                    'key' => \Str::slug($value[$i]),
                    'value' => $value[$i]
                ];
            }elseif($sorting == true){
                // dd(\Str::title(str_replace('_', ' ', $value[$i])));
                $result[] = [
                    'title' => \Str::title(str_replace('_', ' ', $value[$i])),
                    'key' => $value[$i],
                    'value' => true
                ];
            }
            else{
                $result[] = [
                    'key' => $value[$i],
                    'value' => $wrapperfunction != null ? $wrapperfunction($value[$i]) : $value[$i]
                ];
            }
        }
        return $result;
    }
    /**
     * This method is used to get all the specialities, services and cities in Alphabetical format with doctor counts
     */
    public function searchDoctorByCategory(Request $request)
    {
        try{
            $type = $request->type;
            $search = $request->search;
            switch($type)
            {
                case 'speciality':
                    return $this->returnResponse(200, '', Speciality::getSpecialityByAlphabeticalOrder($request->header('locale'), $search));
                case 'condition':
                case 'service':
                    return $this->returnResponse(200, '', Service::getServicesByAlphabeticalOrder($request->header('locale'), $search));
                case 'city':
                    return $this->returnResponse(200, '', City::getCitiesByAlphabeticalOrder($request->header('locale'), $search));
                default:
                    return $this->returnResponse(400, 'Select the correct type to search doctors.');
            }
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    
    /**
     * This method is used to get all the specialities, services and cities in Alphabetical format with doctor counts
     */
    public function headerSearch(Request $request)
    {
        try{
            $search = $request->search;
            $getArticles = $this->getArticles($request->header('locale'), $search);
            $getDiseases = $this->getDiseases($request->header('locale'), $search);
            $getDoctors = $this->getDoctors($search);
            $returnResponse = (($getArticles->merge($getDiseases))->merge($getDoctors))->shuffle()->take(6)->all();
            
            if(!count($getArticles) && !count($getDoctors) && !count($getDiseases)){
                return $this->returnResponse(200, 'Data not available');
            }
            return $this->returnResponse(200, '', $returnResponse);
            
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * This method is used to get all the doctors and clinics by searching
     */
    public function widgetDoctorSearch(Request $request)
    {
        try{
            $search = $request->search;
            $getDoctors = User::whereHas('hasDoctor')
            ->where(function($query) use ($search){
                if($search){
                    $query->orWhere('name', 'like', "%$search%");
                }
            })
            ->orderBy('name', 'ASC')
            ->limit(6)
            ->get(['id', 'name']);

            if(count($getDoctors)){
                $getDoctors->each(function ($item) {
                    $getUser = User::find($item['id']);
                    $item['redirect_url'] = '/doctor/' . \Str::slug(($getUser->city)->name) . '/' . \Str::slug($getUser->doctorSpecialityDetails->pluck('name')[0]) . '/' . \Str::slug($getUser->doctorDetail->prefix) . '-' . \Str::slug($item->name) . '/' . $item->id;
                });
            }
            $getClinics = Clinic::whereHas('doctorClinics')
            ->where(function($query) use ($search){
                if($search){
                    $query->orWhere('name', 'like', "%$search%");
                }
            })
            ->orderBy('name', 'ASC')
            ->limit(6)
            ->get(['id', 'name', 'address']);

            if(count($getClinics)){
                $getClinics->each(function ($item) {
                    $item['redirect_url'] = '/doctor/' . \Str::slug($item->address) . '/?q=' . \Str::slug($item->name);
                });
            }
            return $this->returnResponse(200, '', [
                'doctors' => $getDoctors,
                'clinics' => $getClinics,
            ]);
            
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }
    /**
     * Get Articles through search
     */
    private function getArticles($language, $search)
    {
        $getArticles = Article::where(['status' => true, 'lang_id' => $language])
        ->where(function($query) use ($search){
            if($search){
                $query->orWhere('name', 'like', "%$search%");
                $query->orWhere('slug', 'like', "%$search%");
                $query->orWhere('descripton', 'like', "%$search%");
                $query->orWhere('keywords', 'like', "%$search%");
            }
        })
        ->orderBy('name', 'ASC')
        ->limit(4)
        ->get(['id', 'name as text', 'slug', 'image', 'lang_id', 'descripton as description']);
       
        return $getArticles->each(function ($item) {
            if($item->lang_id == 1){
                $item['redirect_url'] = "/article/$item->slug";
            }else{
                $getLanguage = Language::find($item->lang_id);
                $item['redirect_url'] = "/$getLanguage->slug/article/$item->slug";
            }
        });
    }
    /**
     * Get Doctors through search
     */
    private function getDoctors($search)
    {
        $getDoctors = User::whereHas('hasDoctor')
        ->where(function($query) use ($search){
            if($search){
                $query->orWhere('name', 'like', "%$search%");
            }
        })
        ->orderBy('name', 'ASC')
        ->limit(4)
        ->get(['id', 'name as text', 'image']);
       
        return $getDoctors->each(function ($item) {
            $getUser = User::find($item['id']);
            $item['redirect_url'] = '/doctor/' . \Str::slug(($getUser->city)->name) . '/' . \Str::slug($getUser->doctorSpecialityDetails->pluck('name')[0]) . '/' . \Str::slug($getUser->doctorDetail->prefix) . '-' . \Str::slug($item->text) . '/' . $item->id;
            $item['lang_id'] = 1;
            $item['image'] = $getUser->image_url;
            $item['description'] = count($getUser->doctorEducation) ? implode(', ', $getUser->doctorEducation->pluck('degree')->all()) : null;
        });
    }
    /**
     * Get Diseases through search
     */
    private function getDiseases($language, $search)
    {
        $getDiseases = Disease::where(['status' => true, 'lang_id' => $language])
        ->whereHas('page')
        ->where(function($query) use ($search){
            if($search){
                $query->orWhere('name', 'like', "%$search%");
                $query->orWhere('slug', 'like', "%$search%");
                $query->orWhere('description', 'like', "%$search%");
            }
        })
        ->orderBy('name', 'ASC')
        ->limit(4)
        ->get(['id', 'name as text', 'slug', 'lang_id', 'description']);
       
        return $getDiseases->each(function ($item) {
            if($item->lang_id == 1){
                $item['redirect_url'] = "/disease/$item->slug";
            }else{
                $getLanguage = Language::find($this->lang_id);
                $item['redirect_url'] = "/$getLanguage->slug/disease/$item->slug";
            }
            $item['description'] = $item->page->description;
            $item['image'] = $item->page->image_url;
        });
    }
    /**
     * This method is used to delete user account
     */
    public function deleteUserAccount(Request $request)
    {
        try{
            $userId = $request->header('user_id');
            $getUser = User::find($userId);
            if(!$getUser){
                return $this->returnResponse(200, 'User not found.');
            }
            ApiToken::where('user_id', $getUser->id)->delete();
            $getUser->delete();
            return $this->returnResponse(200, 'User Account Deactivated Successfully.');
            
        } catch(\Exception $e) {
            return $this->returnResponse(500, $e->getMessage());
        }
    }
}
