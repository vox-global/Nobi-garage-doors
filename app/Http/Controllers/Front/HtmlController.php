<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AllProjects;
use App\Models\BlogContent;
use App\Models\Brands;
use App\Models\Contact;
use App\Models\Homepage;
use App\Models\Projects;
use App\Models\ServiceInstallation;
use App\Models\ServiceRepair;
use App\Models\Settings;
use App\Models\Supply;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    function index()
    {
        $content = Homepage::first();
        $testimonials = Testimonials::where('status', true)->get();
        $settings = Settings::getValues(['phone_number', 'email']);
        $data = [
            'content' => $content,
            'testimonials' => $testimonials,
            'settings' => $settings,
        ];
        return view('front.home', $data);
    }

    function serviceInstallation()
    {
        $content = ServiceInstallation::first();
        $settings = Settings::getValues(['phone_number', 'email']);
        $data = [
            'content' => $content,
            'settings' => $settings,
        ];
        return view('front.service-installation', $data);
    }

    function serviceRepair()
    {
        $content = ServiceRepair::first();
        $settings = Settings::getValues(['phone_number', 'email']);
        $data = [
            'content' => $content,
            'settings' => $settings,
        ];
        return view('front.service-repair', $data);
    }

    function supply()
    {
        $content = Supply::first();
        $brands = Brands::where(['status' => true])->get();
        $settings = Settings::getValues(['phone_number', 'email']);
        $data = [
            'content' => $content,
            'brands' => $brands,
            'settings' => $settings,
        ];
        return view('front.supply', $data);
    }

    function projects()
    {
        $content = Projects::first();
        $projects = AllProjects::where(['status' => true])->get();
        $settings = Settings::getValues(['phone_number', 'email']);
        $data = [
            'content' => $content,
            'settings' => $settings,
            'projects' => $projects
        ];
        return view('front.projects', $data);
    }

    function projectInner($slug)
    {
        $content = Projects::first();
        $project = AllProjects::where(['slug' => $slug, 'status' => true])->first();
        $settings = Settings::getValues(['phone_number', 'email']);
        $data = [
            'content' => $content,
            'settings' => $settings,
            'project' => $project
        ];
        return view('front.project-inner', $data);
    }

    function blogs()
    {
        $content = BlogContent::first();
        $data = [
            'content' => $content,
        ];
        return view('front.blogs', $data);
    }

    function contact()
    {
        $content = Contact::first();
        $settings = Settings::getValues(['phone_number', 'email']);
        $data = [
            'content' => $content,
            'settings' => $settings,
        ];
        return view('front.contact', $data);
    }
}
