<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    protected $table = 'content_homepage';
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
            [
                "element_type" => "image",
                "label" => "Fourth Section Image",
                "name" => "fourth_section_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],
            // FIFTH SECTION
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Fifth Section Heading",
                "name" => "fifth_section_heading",
                "placeholder" => "Enter Fifth Section Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Fifth Section Description",
                "element_type" => "textarea",
                "name" => "fifth_section_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Fifth Section Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Fifth Section Image",
                "name" => "fifth_section_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],
            // Sixth SECTION
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Sixth Section Heading",
                "name" => "sixth_section_heading",
                "placeholder" => "Enter Sixth Section Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Sixth Section Description",
                "element_type" => "textarea",
                "name" => "sixth_section_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Sixth Section Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Sixth Section Image",
                "name" => "sixth_section_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
            ],
            // SEVENTH SECTION
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Seventh Section Heading",
                "name" => "seventh_section_heading",
                "placeholder" => "Enter Seventh Section Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            // EIGHTH SECTION
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Eighth Section Heading",
                "name" => "eighth_section_heading",
                "placeholder" => "Enter Eighth Section Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Eighth Section First Heading",
                "name" => "eighth_section_first_heading",
                "placeholder" => "Enter Eighth Section First Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Eighth Section First Description",
                "name" => "eighth_section_first_description",
                "placeholder" => "Enter Eighth Section First Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Eighth Section Second Heading",
                "name" => "eighth_section_second_heading",
                "placeholder" => "Enter Eighth Section Second Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Eighth Section Second Description",
                "name" => "eighth_section_second_description",
                "placeholder" => "Enter Eighth Section Second Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Eighth Section Third Heading",
                "name" => "eighth_section_third_heading",
                "placeholder" => "Enter Eighth Section Third Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Eighth Section Third Description",
                "name" => "eighth_section_third_description",
                "placeholder" => "Enter Eighth Section Third Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Eighth Section Fourth Heading",
                "name" => "eighth_section_fourth_heading",
                "placeholder" => "Enter Eighth Section Fourth Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Eighth Section Fourth Description",
                "name" => "eighth_section_fourth_description",
                "placeholder" => "Enter Eighth Section Fourth Description",
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
        return asset('storage/'.$value);
    }
    public function getFourthSectionImageAttribute($value)
    {
        return asset('storage/'.$value);
    }
    public function getFifthSectionImageAttribute($value)
    {
        return asset('storage/'.$value);
    }
    public function getSixthSectionImageAttribute($value)
    {
        return asset('storage/'.$value);
    }

    public function getEIdAttribute()
    {
        return encrypt($this->id);
    }
}
