<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonials as MainModel;
use App\Http\Common\Helper;

class TestimonialsController extends Controller
{
    public function __construct(array $attributes = array())
    {

        $input_elements = [

            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Name",
                "name" => "name",
                "placeholder" => "Enter Name",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ["required" => "required"],
            ],
            [
                "label" => "Testimonial",
                "element_type" => "textarea",
                "name" => "testimonial",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Testimonial",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ["required" => "required"],
            ],
            [
                "label" => "Rating",
                "element_type" => "dropdown",
                "name" => "rating",
                "options" => [
                    ["rating" => "1"],
                    ["rating" => "2"],
                    ["rating" => "3"],
                    ["rating" => "4"],
                    ["rating" => "5"],
                ],
                "value_element" => "rating",
                "label_element" => "rating",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ["required" => "required"],
            ],

            [
                "element_type" => "image",
                "label" => "Image",
                "name" => "image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
            ],
        ];

        $this->input_elements = $input_elements;
    }

    public $folder_name = 'testimonials'; // For view routes and file calling and saving
    public $module_name = 'Testimonials'; // For toast And page header
    public $input_elements;

    public function view(Request $request)
    {
        if ($request->isMethod('post')) {
            foreach ($request->sequence as $key => $id) {
                $sequence = $key + 1;
                MainModel::where('id', $id)->update(['sequence' => $sequence]);
            }
            return back();
        } else {
            $data['folder_name'] = $this->folder_name;
            $data['module_name'] = $this->module_name;
            $data['result'] = MainModel::all();
            $file = "admin." . $this->folder_name . ".view";
            return view($file, $data);
        }
    }

    public function form(Request $request, $id = null)
    {
        $request->validate(MainModel::getValidationRules($id));
        // $sequence = MainModel::count();
        // $sequence = $sequence + 1;
        $data = [
            'name' => $request->name,
            'rating' => $request->rating,
            'testimonial' => $request->testimonial,
            'status' => $request->status,
        ];
        if ($request->hasFile('image')) {
            $data['image'] = $request->image->store($this->folder_name, Helper::STATIC_ASSET_DISK);
        }
        if ($id) {
            if (MainModel::where('id', $id)->update($data)) {
                Helper::toast('success', $this->module_name . ' Updated.');
            }
        } else {
            if (MainModel::create($data)) {
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
            $data['result'] = null;
            $input_elements = $this->input_elements;
            $data['include_status_radio'] = 1;
            return view('general_crud.general_view', $data)->with(compact('input_elements'));
        }
    }

    public function edit(Request $request, $id)
    {
        $id = decrypt($id);
        if ($request->isMethod('post')) {
            return $this->form($request, $id);
        } else {
            $data['page_header'] = "Edit " . $this->module_name;
            $data['result'] = MainModel::find($id);
            $data['include_status_radio'] = 1;
            $input_elements = $this->input_elements;
            return view('general_crud.general_view', $data)->with(compact('input_elements'));
        }
    }
}
