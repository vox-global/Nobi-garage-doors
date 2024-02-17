<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    function index()
    {
        return view('front.home');
    }


    function about()
    {
        return view('front.about');
    }


    function contact()
    {
        return view('front.contact');
    }
}
