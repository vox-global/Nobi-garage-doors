<?php

namespace App\Http\Controllers\Admin;

use App\Http\Common\Helper;
use App\Http\Controllers\Controller;
use App\Models\BlogContent;
use App\Models\Contact;
use App\Models\Homepage;
use App\Models\Projects;
use App\Models\ServiceInstallation;
use App\Models\ServiceRepair;
use App\Models\Supply;
use Illuminate\Http\Request;

class ContentManagementController extends Controller
{
    function homepage(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(Homepage::getValidationRules());

            $data = [
                'banner_heading' => $request->banner_heading,
                'banner_text' => $request->banner_text,
                'banner_button_text' => $request->banner_button_text,
                'banner_image' => $request->banner_image,
                'first_section_first_heading' => $request->first_section_first_heading,
                'first_section_first_description' => $request->first_section_first_description,
                'first_section_second_heading' => $request->first_section_second_heading,
                'first_section_second_description' => $request->first_section_second_description,
                'first_section_third_heading' => $request->first_section_third_heading,
                'first_section_third_description' => $request->first_section_third_description,
                'first_section_fourth_heading' => $request->first_section_fourth_heading,
                'first_section_fourth_description' => $request->first_section_fourth_description,
                'second_section_heading' => $request->second_section_heading,
                'second_section_description' => $request->second_section_description,
                'third_section_heading' => $request->third_section_heading,
                'fourth_section_heading' => $request->fourth_section_heading,
                'fourth_section_description' => $request->fourth_section_description,
                'fourth_section_image' => $request->fourth_section_image,
                'fifth_section_heading' => $request->fifth_section_heading,
                'fifth_section_description' => $request->fifth_section_description,
                'fifth_section_image' => $request->fifth_section_image,
                'sixth_section_heading' => $request->sixth_section_heading,
                'sixth_section_description' => $request->sixth_section_description,
                'sixth_section_image' => $request->sixth_section_image,
                'seventh_section_heading' => $request->seventh_section_heading,
                'eighth_section_heading' => $request->eighth_section_heading,
                'eighth_section_first_heading' => $request->eighth_section_first_heading,
                'eighth_section_first_description' => $request->eighth_section_first_description,
                'eighth_section_second_heading' => $request->eighth_section_second_heading,
                'eighth_section_second_description' => $request->eighth_section_second_description,
                'eighth_section_third_heading' => $request->eighth_section_third_heading,
                'eighth_section_third_description' => $request->eighth_section_third_description,
                'eighth_section_fourth_heading' => $request->eighth_section_fourth_heading,
                'eighth_section_fourth_description' => $request->eighth_section_fourth_description,
            ];

            if ($request->hasFile('banner_image')) {
                $data['banner_image'] = $request->banner_image->store("homepage", Helper::STATIC_ASSET_DISK);
            }

            if ($request->hasFile('fourth_section_image')) {
                $data['fourth_section_image'] = $request->fourth_section_image->store("homepage", Helper::STATIC_ASSET_DISK);
            }

            if ($request->hasFile('fifth_section_image')) {
                $data['fifth_section_image'] = $request->fifth_section_image->store("homepage", Helper::STATIC_ASSET_DISK);
            }

            if ($request->hasFile('sixth_section_image')) {
                $data['sixth_section_image'] = $request->sixth_section_image->store("homepage", Helper::STATIC_ASSET_DISK);
            }

            if (Homepage::first()->update($data)) {
                Helper::toast('success', 'Homepage Updated.');
            } else {
                Helper::toast('error', 'Something Went Wrong.');
            }
            return back();
        } else {
            $input_elements = Homepage::input_elements();
            $data['page_header'] = "Edit Homepage";
            $data['result'] = Homepage::first();
            $data['include_status_radio'] = 0;
            return view('general_crud.general_view', $data)->with(compact('input_elements'));
        }
    }

    function serviceInstallation(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(ServiceInstallation::getValidationRules());

            $data = [
                'banner_heading' => $request->banner_heading,
                'banner_text' => $request->banner_text,
                'banner_button_text' => $request->banner_button_text,

                'first_section_first_heading' => $request->first_section_first_heading,
                'first_section_first_description' => $request->first_section_first_description,
                'first_section_second_heading' => $request->first_section_second_heading,
                'first_section_second_description' => $request->first_section_second_description,
                'first_section_third_heading' => $request->first_section_third_heading,
                'first_section_third_description' => $request->first_section_third_description,
                'first_section_fourth_heading' => $request->first_section_fourth_heading,
                'first_section_fourth_description' => $request->first_section_fourth_description,


                'second_section_heading' => $request->second_section_heading,
                'second_section_description' => $request->second_section_description,


                'second_section_first_heading' => $request->second_section_first_heading,
                'second_section_first_description' => $request->second_section_first_description,
                'second_section_second_heading' => $request->second_section_second_heading,
                'second_section_second_description' => $request->second_section_second_description,
                'second_section_third_heading' => $request->second_section_third_heading,
                'second_section_third_description' => $request->second_section_third_description,



                'third_section_first_heading' => $request->third_section_first_heading,
                'third_section_first_description' => $request->third_section_first_description,
                'third_section_second_heading' => $request->third_section_second_heading,
                'third_section_second_description' => $request->third_section_second_description,
                'third_section_third_heading' => $request->third_section_third_heading,
                'third_section_third_description' => $request->third_section_third_description,
                'third_section_fourth_heading' => $request->third_section_fourth_heading,
                'third_section_fourth_description' => $request->third_section_fourth_description,
                
                'third_section_button_text' => $request->third_section_button_text,


                'fourth_section_heading' => $request->fourth_section_heading,
                'fourth_section_description' => $request->fourth_section_description,

                'fourth_section_first_heading' => $request->fourth_section_first_heading,
                'fourth_section_second_heading' => $request->fourth_section_second_heading,
                'fourth_section_third_heading' => $request->fourth_section_third_heading,

                'fourth_section_button_text' => $request->fourth_section_button_text,

            ];

            if ($request->hasFile('banner_image')) {
                $data['banner_image'] = $request->banner_image->store("service-installation", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('second_section_first_image')) {
                $data['second_section_first_image'] = $request->second_section_first_image->store("service-installation", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('second_section_second_image')) {
                $data['second_section_second_image'] = $request->second_section_second_image->store("service-installation", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('second_section_third_image')) {
                $data['second_section_third_image'] = $request->second_section_third_image->store("service-installation", Helper::STATIC_ASSET_DISK);
            }

            
            if ($request->hasFile('third_section_first_image')) {
                $data['third_section_first_image'] = $request->third_section_first_image->store("service-installation", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('third_section_second_image')) {
                $data['third_section_second_image'] = $request->third_section_second_image->store("service-installation", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('third_section_third_image')) {
                $data['third_section_third_image'] = $request->third_section_third_image->store("service-installation", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('third_section_fourth_image')) {
                $data['third_section_fourth_image'] = $request->third_section_fourth_image->store("service-installation", Helper::STATIC_ASSET_DISK);
            }

            
            if ($request->hasFile('fourth_section_first_image')) {
                $data['fourth_section_first_image'] = $request->fourth_section_first_image->store("service-installation", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('fourth_section_second_image')) {
                $data['fourth_section_second_image'] = $request->fourth_section_second_image->store("service-installation", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('fourth_section_third_image')) {
                $data['fourth_section_third_image'] = $request->fourth_section_third_image->store("service-installation", Helper::STATIC_ASSET_DISK);
            }


            if (ServiceInstallation::first()->update($data)) {
                Helper::toast('success', 'Service-Installation Page Updated.');
            } else {
                Helper::toast('error', 'Something Went Wrong.');
            }
            return back();
        } else {
            $input_elements = ServiceInstallation::input_elements();
            $data['page_header'] = "Edit Service-Installation Page";
            $data['result'] = ServiceInstallation::first();
            $data['include_status_radio'] = 0;
            return view('general_crud.general_view', $data)->with(compact('input_elements'));
        }
    }

    function serviceRepair(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(ServiceRepair::getValidationRules());

            $data = [
                'banner_heading' => $request->banner_heading,
                'banner_text' => $request->banner_text,
                'banner_button_text' => $request->banner_button_text,

                'first_section_first_heading' => $request->first_section_first_heading,
                'first_section_first_description' => $request->first_section_first_description,
                'first_section_second_heading' => $request->first_section_second_heading,
                'first_section_second_description' => $request->first_section_second_description,
                'first_section_third_heading' => $request->first_section_third_heading,
                'first_section_third_description' => $request->first_section_third_description,
                'first_section_fourth_heading' => $request->first_section_fourth_heading,
                'first_section_fourth_description' => $request->first_section_fourth_description,


                'second_section_heading' => $request->second_section_heading,
                'second_section_description' => $request->second_section_description,


                'second_section_first_heading' => $request->second_section_first_heading,
                'second_section_first_description' => $request->second_section_first_description,
                'second_section_second_heading' => $request->second_section_second_heading,
                'second_section_second_description' => $request->second_section_second_description,
                'second_section_third_heading' => $request->second_section_third_heading,
                'second_section_third_description' => $request->second_section_third_description,


                'third_section_heading' => $request->third_section_heading,
                'third_section_description' => $request->third_section_description,

                'third_section_first_heading' => $request->third_section_first_heading,
                'third_section_first_description' => $request->third_section_first_description,
                'third_section_second_heading' => $request->third_section_second_heading,
                'third_section_second_description' => $request->third_section_second_description,
                'third_section_third_heading' => $request->third_section_third_heading,
                'third_section_third_description' => $request->third_section_third_description,
                'third_section_fourth_heading' => $request->third_section_fourth_heading,
                'third_section_fourth_description' => $request->third_section_fourth_description,
                
                'third_section_button_text' => $request->third_section_button_text,


                'fourth_section_heading' => $request->fourth_section_heading,
                'fourth_section_description' => $request->fourth_section_description,

                'fourth_section_first_heading' => $request->fourth_section_first_heading,
                'fourth_section_second_heading' => $request->fourth_section_second_heading,
                'fourth_section_third_heading' => $request->fourth_section_third_heading,

                'fourth_section_button_text' => $request->fourth_section_button_text,

                
                'fifth_section_heading' => $request->fifth_section_heading,
                'fifth_section_description' => $request->fifth_section_description,


                'fifth_section_first_heading' => $request->fifth_section_first_heading,
                'fifth_section_first_description' => $request->fifth_section_first_description,
                'fifth_section_second_heading' => $request->fifth_section_second_heading,
                'fifth_section_second_description' => $request->fifth_section_second_description,
                'fifth_section_third_heading' => $request->fifth_section_third_heading,
                'fifth_section_third_description' => $request->fifth_section_third_description,

                
                'sixth_section_heading' => $request->sixth_section_heading,
                
                'sixth_section_first_heading' => $request->sixth_section_first_heading,
                'sixth_section_first_description' => $request->sixth_section_first_description,
                'sixth_section_second_heading' => $request->sixth_section_second_heading,
                'sixth_section_second_description' => $request->sixth_section_second_description,
                'sixth_section_third_heading' => $request->sixth_section_third_heading,
                'sixth_section_third_description' => $request->sixth_section_third_description,
                'sixth_section_fourth_heading' => $request->sixth_section_fourth_heading,
                'sixth_section_fourth_description' => $request->sixth_section_fourth_description,
                'sixth_section_fifth_heading' => $request->sixth_section_fifth_heading,
                'sixth_section_fifth_description' => $request->sixth_section_fifth_description,
                'sixth_section_sixth_heading' => $request->sixth_section_sixth_heading,
                'sixth_section_sixth_description' => $request->sixth_section_sixth_description,

                
                'seventh_section_first_heading' => $request->seventh_section_first_heading,
                'seventh_section_first_description' => $request->seventh_section_first_description,
                'seventh_section_second_heading' => $request->seventh_section_second_heading,
                'seventh_section_second_description' => $request->seventh_section_second_description,
                'seventh_section_third_heading' => $request->seventh_section_third_heading,
                'seventh_section_third_description' => $request->seventh_section_third_description,
                'seventh_section_fourth_heading' => $request->seventh_section_fourth_heading,
                'seventh_section_fourth_description' => $request->seventh_section_fourth_description,

                
                'eighth_section_heading' => $request->eighth_section_heading,
                'eighth_section_description' => $request->eighth_section_description,

                'eighth_section_first_heading' => $request->eighth_section_first_heading,
                'eighth_section_second_heading' => $request->eighth_section_second_heading,
                'eighth_section_third_heading' => $request->eighth_section_third_heading,

                'eighth_section_button_text' => $request->eighth_section_button_text,
            ];

            if ($request->hasFile('banner_image')) {
                $data['banner_image'] = $request->banner_image->store("service-repair", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('fifth_section_first_image')) {
                $data['fifth_section_first_image'] = $request->fifth_section_first_image->store("service-repair", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('fifth_section_second_image')) {
                $data['fifth_section_second_image'] = $request->fifth_section_second_image->store("service-repair", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('fifth_section_third_image')) {
                $data['fifth_section_third_image'] = $request->fifth_section_third_image->store("service-repair", Helper::STATIC_ASSET_DISK);
            }

            
            if ($request->hasFile('seventh_section_first_image')) {
                $data['seventh_section_first_image'] = $request->seventh_section_first_image->store("service-repair", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('seventh_section_second_image')) {
                $data['seventh_section_second_image'] = $request->seventh_section_second_image->store("service-repair", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('seventh_section_third_image')) {
                $data['seventh_section_third_image'] = $request->seventh_section_third_image->store("service-repair", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('seventh_section_fourth_image')) {
                $data['seventh_section_fourth_image'] = $request->seventh_section_fourth_image->store("service-repair", Helper::STATIC_ASSET_DISK);
            }

            
            if ($request->hasFile('eighth_section_first_image')) {
                $data['eighth_section_first_image'] = $request->eighth_section_first_image->store("service-repair", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('eighth_section_second_image')) {
                $data['eighth_section_second_image'] = $request->eighth_section_second_image->store("service-repair", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('eighth_section_third_image')) {
                $data['eighth_section_third_image'] = $request->eighth_section_third_image->store("service-repair", Helper::STATIC_ASSET_DISK);
            }


            if (ServiceRepair::first()->update($data)) {
                Helper::toast('success', 'Service-Repair Page Updated.');
            } else {
                Helper::toast('error', 'Something Went Wrong.');
            }
            return back();
        } else {
            $input_elements = ServiceRepair::input_elements();
            $data['page_header'] = "Edit Service-Repair Page";
            $data['result'] = ServiceRepair::first();
            $data['include_status_radio'] = 0;
            return view('general_crud.general_view', $data)->with(compact('input_elements'));
        }
    }

    function projects(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(Projects::getValidationRules());

            $data = [
                'banner_heading' => $request->banner_heading,
                'banner_text' => $request->banner_text,
                'banner_button_text' => $request->banner_button_text,

                'inner_page_button_text' => $request->inner_page_button_text,
                'inner_page_heading' => $request->inner_page_heading,
            ];

            if ($request->hasFile('banner_image')) {
                $data['banner_image'] = $request->banner_image->store("projects", Helper::STATIC_ASSET_DISK);
            }

            if (Projects::first()->update($data)) {
                Helper::toast('success', 'Projects Page Updated.');
            } else {
                Helper::toast('error', 'Something Went Wrong.');
            }
            return back();
        } else {
            $input_elements = Projects::input_elements();
            $data['page_header'] = "Edit Projects Page";
            $data['result'] = Projects::first();
            $data['include_status_radio'] = 0;
            return view('general_crud.general_view', $data)->with(compact('input_elements'));
        }
    }

    function supply(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(Supply::getValidationRules());

            $data = [
                'banner_heading' => $request->banner_heading,
                'banner_text' => $request->banner_text,
                'banner_button_text' => $request->banner_button_text,

                'first_section_heading' => $request->first_section_heading,
                'first_section_description' => $request->first_section_description,

                'second_section_first_heading' => $request->second_section_first_heading,
                'second_section_first_description' => $request->second_section_first_description,
                'second_section_second_heading' => $request->second_section_second_heading,
                'second_section_second_description' => $request->second_section_second_description,
                'second_section_third_heading' => $request->second_section_third_heading,
                'second_section_third_description' => $request->second_section_third_description,

                'third_section_heading' => $request->third_section_heading,

                'fourth_section_heading' => $request->fourth_section_heading,
                'fourth_section_description' => $request->fourth_section_description,
            ];

            if ($request->hasFile('banner_image')) {
                $data['banner_image'] = $request->banner_image->store("supply", Helper::STATIC_ASSET_DISK);
            }

            if ($request->hasFile('second_section_first_image')) {
                $data['second_section_first_image'] = $request->second_section_first_image->store("supply", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('second_section_second_image')) {
                $data['second_section_second_image'] = $request->second_section_second_image->store("supply", Helper::STATIC_ASSET_DISK);
            }
            if ($request->hasFile('second_section_third_image')) {
                $data['second_section_third_image'] = $request->second_section_third_image->store("supply", Helper::STATIC_ASSET_DISK);
            }

            if (Supply::first()->update($data)) {
                Helper::toast('success', 'Supply Page Updated.');
            } else {
                Helper::toast('error', 'Something Went Wrong.');
            }
            return back();
        } else {
            $input_elements = Supply::input_elements();
            $data['page_header'] = "Edit Supply Page";
            $data['result'] = Supply::first();
            $data['include_status_radio'] = 0;
            return view('general_crud.general_view', $data)->with(compact('input_elements'));
        }
    }

    function blogs(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(BlogContent::getValidationRules());

            $data = [
                'banner_heading' => $request->banner_heading,
                'banner_text' => $request->banner_text,
            ];

            if ($request->hasFile('banner_image')) {
                $data['banner_image'] = $request->banner_image->store("blogs", Helper::STATIC_ASSET_DISK);
            }

            if (BlogContent::first()->update($data)) {
                Helper::toast('success', 'Blogs Page Updated.');
            } else {
                Helper::toast('error', 'Something Went Wrong.');
            }
            return back();
        } else {
            $input_elements = BlogContent::input_elements();
            $data['page_header'] = "Edit Blogs Page";
            $data['result'] = BlogContent::first();
            $data['include_status_radio'] = 0;
            return view('general_crud.general_view', $data)->with(compact('input_elements'));
        }
    }

    function contact(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(Contact::getValidationRules());

            $data = [
                'banner_heading' => $request->banner_heading,
                'banner_text' => $request->banner_text,
                'banner_button_text' => $request->banner_button_text,
            ];

            if ($request->hasFile('banner_image')) {
                $data['banner_image'] = $request->banner_image->store("contact", Helper::STATIC_ASSET_DISK);
            }

            if (Contact::first()->update($data)) {
                Helper::toast('success', 'Contact-Us Page Updated.');
            } else {
                Helper::toast('error', 'Something Went Wrong.');
            }
            return back();
        } else {
            $input_elements = Contact::input_elements();
            $data['page_header'] = "Edit Contact-Us Page";
            $data['result'] = Contact::first();
            $data['include_status_radio'] = 0;
            return view('general_crud.general_view', $data)->with(compact('input_elements'));
        }
    }
}
