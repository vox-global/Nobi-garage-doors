<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    User as MainModel,
    Article,
    Disease,
    Topics,
    Drug,
    HealthScan,
    Newsletter,
    Appointment,
};
use App\Models\Role;
use App\Models\UserRoles;
use Auth;
use Yajra\Datatables\Datatables;
use App\Http\Common\Helper;
use App\Http\Common\Constant;
use Hash;
use Carbon\Carbon;

class AdminController extends Controller
{
    public $folder_name = 'admin_users'; // For view routes and file calling and saving
    public $module_name = 'Manage Admin Users'; // For toast And page header


    public function dashboard(Request $request)
    {
        $data['start_date'] = null;
        $data['end_date'] = null;
        return view('admin.dashboard', $data);
    }

    public function view()
    {
        $data['roles'] = Role::where('id', '<>', MainModel::CUSTOMER_ROLE)->get();
        $file = "admin." . $this->folder_name . ".view";
        return view($file, $data);
    }

    public function fetch(Request $request)
    {
        $query = MainModel::where('role_id', '!=', MainModel::CUSTOMER_ROLE)
            ->with(['role']);
        if ($request->status != '') {
            $query = $query->where('status', $request->status);
        }
        return Datatables::of($query)->make(true);
    }

    public function form(Request $request, $id = null)
    {
        $request->validate(MainModel::getRules($id));
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => $request->role,
            'status' => $request->status,
        ];
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }
        // if($request->role == MainModel::PICKUP_DISPATCHER_ROLE){
        //     $data['city_id'] = $request->city;
        // }
        // if($request->role == MainModel::DELIVERY_TRANSPORTER_ROLE){
        //     $data['region_id'] = $request->region;
        // }
        // if($request->role == MainModel::OUTLET_MANAGER_ROLE){
        //     $data['outlet_id'] = $request->outlet;
        // }
        if ($request->hasFile('image')) {
            $image = $request->image->store($this->folder_name, 'public');
            $data['image'] = $image;
        }

        if ($id) {
            if (MainModel::where('id', $id)->update($data)) {
                $createOrUpdate['where']['user_id'] = $id;
                $createOrUpdate['data']['role_id'] = $request->role;
                Helper::toast('success', $this->module_name . ' Updated.');
            }
        } else {
            if ($created_data = MainModel::create($data)) {
                $createOrUpdate['where']['user_id'] = $created_data->id;
                $createOrUpdate['data']['role_id'] = $request->role;
                Helper::toast('success', $this->module_name . ' created.');
            }
        }


        return redirect()->route($this->folder_name . '-view');
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            return $this->form($request);
        } else {
            $data['page_header'] = "Add " . $this->module_name;
            $data['roles'] = Role::where('id', '!=', '2')->get();
            $data['result'] = null;
            $file = "admin." . $this->folder_name . ".form";
            return view($file, $data);
        }
    }

    public function edit(Request $request, $id)
    {
        $id = decrypt($id);
        if ($request->isMethod('post')) {
            return $this->form($request, $id);
        } else {
            $data['page_header'] = "Edit " . $this->module_name;
            $data['roles'] = Role::where('id', '!=', '2')->get();
            $data['result'] = MainModel::find($id);
            $file = "admin." . $this->folder_name . ".form";
            return view($file, $data);
        }
    }
}
