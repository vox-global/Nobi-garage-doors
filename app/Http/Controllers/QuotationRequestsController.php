<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuotationRequests;
use Yajra\Datatables\Datatables;

class QuotationRequestsController extends Controller
{
    public function quotation(Request $request){
        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'address' => ['required'],
        ], [
            'first_name.required' => "Please enter your first name.",
            'last_name.required' => "Please enter your last name.",
            'phone.required' => "Please enter your phone number .",
            'address.required' => "Please enter your address .",
            'email.required' => "Please enter your Email Address.",
            'email.email' => "Please provide a Valid Email Address.",
        ]);
        QuotationRequests::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return back()->withErrors(['quotation_requested' => 'Thanks for getting in touch, your query will be answered shortly.']);
    }

    public function view(){
        return view('admin.quotation.view');
    }    

    public function fetch(Request $request){
        $query = QuotationRequests::query();
        if(isset($request->status)) {
            $query = $query->where('status', $request->status);
        }
        return Datatables::of($query)->make(true);
    }
}
