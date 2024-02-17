<?php

namespace App\Http\Controllers\Admin;

use App\Http\Common\Helper;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Homepage;
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

    function contact(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(Contact::getValidationRules());

            $data = [
                'banner_heading' => $request->banner_heading,
                'banner_text' => $request->banner_text,
                'banner_button_text' => $request->banner_button_text,
                'banner_image' => $request->banner_image,
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
