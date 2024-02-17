<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
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
            'testimonial' => 'required',
            'name' => 'required',
            'rating' => 'required',
        ];
    }


    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }
    public function getEIdAttribute()
    {
        return encrypt($this->id);
    }
}
