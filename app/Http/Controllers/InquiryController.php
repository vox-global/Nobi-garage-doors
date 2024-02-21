<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiries;
use Yajra\Datatables\Datatables;

class InquiryController extends Controller
{
    function inquiry(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required'],
        ], [
            'name.required' => "Please enter your name.",
            'address.required' => "Please enter your address .",
            'email.required' => "Please enter an Email Address.",
            'email.email' => "Please provide a Valid Email Address.",
        ]);
        Inquiries::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return back()->withErrors(['inquiry_posted' => 'Thanks for getting in touch, your query will be answered shortly.']);
    }

    public function view()
    {
        return view('admin.inquiry.view');
    }
    public function fetch(Request $request)
    {
        $query = Inquiries::query()->orderBy('id', 'desc');
        return Datatables::of($query)->make(true);
    }
}
