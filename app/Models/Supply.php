<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Provider\DceSecurityProviderInterface;

class Supply extends Model
{
    use HasFactory;
    protected $table = 'content_supply';
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
                "label" => "Banner Button Heading",
                "name" => "banner_button_text",
                "placeholder" => "Enter Banner Button Heading",
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
                "label" => "First Section Heading",
                "name" => "first_section_heading",
                "placeholder" => "Enter First Section Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "First Section Description",
                "element_type" => "textarea",
                "name" => "first_section_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter First Section Description",
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
                "label" => "Third Section Heading",
                "name" => "third_section_heading",
                "placeholder" => "Enter Third Section Heading",
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
                "label" => "Fourth Section Description",
                "element_type" => "textarea",
                "name" => "fourth_section_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Fourth Section Description",
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
