<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiToken extends Model
{
    protected $guarded=['id'];

    public static function getTokenDetails($token)
    {
        return ApiToken::where('token', $token)->first();
    }
}
