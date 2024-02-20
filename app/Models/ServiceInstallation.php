<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceInstallation extends Model
{
    use HasFactory;
    protected $table = 'content_service_installation';
    protected $guarded = ['id'];
    protected $appends = ['e_id'];
    protected $casts = [
        'status' => 'boolean',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'e_id',
    ];

    static function input_elements()
    {
        return [
            // BANNER
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Banner Heading",
                "name" => "banner_heading",
                "placeholder" => "Enter Banner Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Banner Text",
                "element_type" => "textarea",
                "name" => "banner_text",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Banner Text",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Banner Button Text",
                "name" => "banner_button_text",
                "placeholder" => "Enter Banner Button Text",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Banner Image",
                "name" => "banner_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],

            // FIRST SECTION
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "First Section First Heading",
                "name" => "first_section_first_heading",
                "placeholder" => "Enter First Section First Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "First Section First Description",
                "name" => "first_section_first_description",
                "placeholder" => "Enter First Section First Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "First Section Second Heading",
                "name" => "first_section_second_heading",
                "placeholder" => "Enter First Section Second Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "First Section Second Description",
                "name" => "first_section_second_description",
                "placeholder" => "Enter First Section Second Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "First Section Third Heading",
                "name" => "first_section_third_heading",
                "placeholder" => "Enter First Section Third Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "First Section Third Description",
                "name" => "first_section_third_description",
                "placeholder" => "Enter First Section Third Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "First Section Fourth Heading",
                "name" => "first_section_fourth_heading",
                "placeholder" => "Enter First Section Fourth Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "First Section Fourth Description",
                "name" => "first_section_fourth_description",
                "placeholder" => "Enter First Section Fourth Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            // SECOND SECTION
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Second Section Heading",
                "name" => "second_section_heading",
                "placeholder" => "Enter Second Section Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Second Section Description",
                "name" => "second_section_description",
                "placeholder" => "Enter Second Section Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],


            // SECOND SECTION
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Second Section First Heading",
                "name" => "second_section_first_heading",
                "placeholder" => "Enter Second Section First Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Second Section First Description",
                "element_type" => "textarea",
                "name" => "second_section_first_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Second Section First Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Second Section First Image",
                "name" => "second_section_first_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],


            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Second Section Second Heading",
                "name" => "second_section_second_heading",
                "placeholder" => "Enter Second Section Second Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Second Section Second Description",
                "element_type" => "textarea",
                "name" => "second_section_second_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Second Section Second Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Second Section Second Image",
                "name" => "second_section_second_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],


            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Second Section Third Heading",
                "name" => "second_section_third_heading",
                "placeholder" => "Enter Second Section Third Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Second Section Third Description",
                "element_type" => "textarea",
                "name" => "second_section_third_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Second Section Third Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Second Section Third Image",
                "name" => "second_section_third_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],

            // THIRD SECTION
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Third Section First Heading",
                "name" => "third_section_first_heading",
                "placeholder" => "Enter Third Section First Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Third Section First Description",
                "element_type" => "textarea",
                "name" => "third_section_first_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Third Section First Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Third Section First Image",
                "name" => "third_section_first_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],

            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Third Section Second Heading",
                "name" => "third_section_second_heading",
                "placeholder" => "Enter Third Section Second Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Third Section Second Description",
                "element_type" => "textarea",
                "name" => "third_section_second_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Third Section Second Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Third Section Second Image",
                "name" => "third_section_second_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],

            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Third Section Third Heading",
                "name" => "third_section_third_heading",
                "placeholder" => "Enter Third Section Third Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Third Section Third Description",
                "element_type" => "textarea",
                "name" => "third_section_third_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Third Section Third Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Third Section Third Image",
                "name" => "third_section_third_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],

            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Third Section Fourth Heading",
                "name" => "third_section_fourth_heading",
                "placeholder" => "Enter Third Section Fourth Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Third Section Fourth Description",
                "element_type" => "textarea",
                "name" => "third_section_fourth_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Third Section Fourth Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Third Section Fourth Image",
                "name" => "third_section_fourth_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],
            
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Third Section Button Text",
                "name" => "third_section_button_text",
                "placeholder" => "Enter Third Section Button Text",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],


            // FOURTH SECTION
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Fourth Section Heading",
                "name" => "fourth_section_heading",
                "placeholder" => "Enter Fourth Section Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Fourth Section Description",
                "name" => "fourth_section_description",
                "placeholder" => "Enter Fourth Section Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],







            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Fourth Section First Heading",
                "name" => "fourth_section_first_heading",
                "placeholder" => "Enter Fourth Section First Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Fourth Section First Image",
                "name" => "fourth_section_first_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],


            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Fourth Section Second Heading",
                "name" => "fourth_section_second_heading",
                "placeholder" => "Enter Fourth Section Second Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Fourth Section Second Image",
                "name" => "fourth_section_second_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],


            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Fourth Section Third Heading",
                "name" => "fourth_section_third_heading",
                "placeholder" => "Enter Fourth Section Third Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Fourth Section Third Image",
                "name" => "fourth_section_third_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],

            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Fourth Section Button Text",
                "name" => "fourth_section_button_text",
                "placeholder" => "Enter Fourth Section Button Text",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
        ];
    }


    public static function getValidationRules($id = "")
    {
        return [
            // 'name' => 'required',
            // 'amount' => 'required',
            // 'description' => 'required',
            // 'source' => [!$id ? 'required' : '', 'mimes:png,jpg,PNG,JPG,image/gif,gif'],
        ];
    }


    public function getBannerImageAttribute($value)
    {
        return asset('storage/' . $value);
    }

    public function getEIdAttribute()
    {
        return encrypt($this->id);
    }
}
