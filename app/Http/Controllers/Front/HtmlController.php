<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Homepage;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    function index()
    {
        $content = Homepage::first();
        $data = [
            'content' => $content
        ];
        // dd($content);
        return view('front.home',$data);
    }

    function serviceInstallation()
    {
        return view('front.about');
    }

    function serviceRepair()
    {
        return view('front.about');
    }

    function supply()
    {
        return view('front.about');
    }

    function projects()
    {
        return view('front.about');
    }

    function blogs()
    {
        return view('front.about');
    }

    function contact()
    {
        return view('front.contact');
    }
}
