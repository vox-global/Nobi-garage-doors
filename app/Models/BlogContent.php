<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogContent extends Model
{
    use HasFactory;
    protected $table = 'content_blogs';
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
                "element_type" => "image",
                "label" => "Banner Image",
                "name" => "banner_image",
                "include_asset_function" => 0,
                "additional_ids" => [],
                "additional_classes" => [],
                "html_params" => ['accept' => '.png,.jpg,.gif'],
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

    public function getEIdAttribute()
    {
        return encrypt($this->id);
    }
}
