<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    use HasFactory;
    protected $table = 'blog_categories';
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

    public static function getValidationRules($id = "")
    {
        return [
            'name' => 'required',
        ];
    }

    public function getEIdAttribute()
    {
        return encrypt($this->id);
    }
}
