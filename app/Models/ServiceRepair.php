<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRepair extends Model
{
    use HasFactory;
    protected $table = 'content_service_repair';
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
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
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
                "label" => "Second Section Description",
                "element_type" => "textarea",
                "name" => "second_section_description",
                "editor" => 1,
                "rows" => 5,
                "placeholder" => "Please Enter Second Section Description",
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
            [
                "label" => "Third Section Description",
                "element_type" => "textarea",
                "name" => "third_section_description",
                "editor" => 1,
                "rows" => 5,
                "placeholder" => "Please Enter Third Section Description",
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
                "editor" => 1,
                "rows" => 5,
                "placeholder" => "Please Enter Fourth Section Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
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
                "editor" => 1,
                "rows" => 5,
                "placeholder" => "Please Enter Fifth Section Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Fifth Section First Heading",
                "name" => "fifth_section_first_heading",
                "placeholder" => "Enter Fifth Section First Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Fifth Section First Description",
                "element_type" => "textarea",
                "name" => "fifth_section_first_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Fifth Section First Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Fifth Section First Image",
                "name" => "fifth_section_first_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
            ],


            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Fifth Section Second Heading",
                "name" => "fifth_section_second_heading",
                "placeholder" => "Enter Fifth Section Second Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Fifth Section Second Description",
                "element_type" => "textarea",
                "name" => "fifth_section_second_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Fifth Section Second Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Fifth Section Second Image",
                "name" => "fifth_section_second_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
            ],


            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Fifth Section Third Heading",
                "name" => "fifth_section_third_heading",
                "placeholder" => "Enter Fifth Section Third Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Fifth Section Third Description",
                "element_type" => "textarea",
                "name" => "fifth_section_third_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Fifth Section Third Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Fifth Section Third Image",
                "name" => "fifth_section_third_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
            ],

            
            // SIXTH SECTION
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
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Sixth Section First Heading",
                "name" => "sixth_section_first_heading",
                "placeholder" => "Enter Sixth Section First Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Sixth Section First Description",
                "element_type" => "textarea",
                "name" => "sixth_section_first_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Sixth Section First Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],

            
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Sixth Section Second Heading",
                "name" => "sixth_section_second_heading",
                "placeholder" => "Enter Sixth Section Second Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Sixth Section Second Description",
                "element_type" => "textarea",
                "name" => "sixth_section_second_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Sixth Section Second Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Sixth Section Third Heading",
                "name" => "sixth_section_third_heading",
                "placeholder" => "Enter Sixth Section Third Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Sixth Section Third Description",
                "element_type" => "textarea",
                "name" => "sixth_section_third_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Sixth Section Third Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Sixth Section Fourth Heading",
                "name" => "sixth_section_fourth_heading",
                "placeholder" => "Enter Sixth Section Fourth Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Sixth Section Fourth Description",
                "element_type" => "textarea",
                "name" => "sixth_section_fourth_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Sixth Section Fourth Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Sixth Section Fifth Heading",
                "name" => "sixth_section_fifth_heading",
                "placeholder" => "Enter Sixth Section Fifth Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Sixth Section Fifth Description",
                "element_type" => "textarea",
                "name" => "sixth_section_fifth_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Sixth Section Fifth Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Sixth Section Sixth Heading",
                "name" => "sixth_section_sixth_heading",
                "placeholder" => "Enter Sixth Section Sixth Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Sixth Section Sixth Description",
                "element_type" => "textarea",
                "name" => "sixth_section_sixth_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Sixth Section Sixth Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],




            // SEVENTH SECTION
            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Seventh Section First Heading",
                "name" => "seventh_section_first_heading",
                "placeholder" => "Enter Seventh Section First Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Seventh Section First Description",
                "element_type" => "textarea",
                "name" => "seventh_section_first_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Seventh Section First Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Seventh Section First Image",
                "name" => "seventh_section_first_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
            ],

            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Seventh Section Second Heading",
                "name" => "seventh_section_second_heading",
                "placeholder" => "Enter Seventh Section Second Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Seventh Section Second Description",
                "element_type" => "textarea",
                "name" => "seventh_section_second_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Seventh Section Second Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Seventh Section Second Image",
                "name" => "seventh_section_second_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
            ],

            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Seventh Section Third Heading",
                "name" => "seventh_section_third_heading",
                "placeholder" => "Enter Seventh Section Third Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Seventh Section Third Description",
                "element_type" => "textarea",
                "name" => "seventh_section_third_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Seventh Section Third Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Seventh Section Third Image",
                "name" => "seventh_section_third_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
            ],

            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Seventh Section Fourth Heading",
                "name" => "seventh_section_fourth_heading",
                "placeholder" => "Enter Seventh Section Fourth Heading",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "label" => "Seventh Section Fourth Description",
                "element_type" => "textarea",
                "name" => "seventh_section_fourth_description",
                "editor" => 0,
                "rows" => 5,
                "placeholder" => "Please Enter Seventh Section Fourth Description",
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => [],
            ],
            [
                "element_type" => "image",
                "label" => "Seventh Section Fourth Image",
                "name" => "seventh_section_fourth_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
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
                "label" => "Eighth Section Description",
                "name" => "eighth_section_description",
                "placeholder" => "Enter Eighth Section Description",
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
                "element_type" => "image",
                "label" => "Eighth Section First Image",
                "name" => "eighth_section_first_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
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
                "element_type" => "image",
                "label" => "Eighth Section Second Image",
                "name" => "eighth_section_second_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
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
                "element_type" => "image",
                "label" => "Eighth Section Third Image",
                "name" => "eighth_section_third_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif,.webp'],
            ],

            [
                "element_type" => "input",
                "input_type" => "text",
                "label" => "Eighth Section Button Text",
                "name" => "eighth_section_button_text",
                "placeholder" => "Enter Eighth Section Button Text",
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



    public function getEIdAttribute()
    {
        return encrypt($this->id);
    }
}
