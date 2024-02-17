<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $table = 'notifications';
    protected $guarded = ['id'];
    protected $casts = [
        'receiver_type' => 'string',
        'receiver_id' => 'integer',      
        'read_status' => 'string',      
        'payload' => \App\Casts\NotificationPayloadCast::class,
    ]; 
    // public function getPayloadAttribute($value){
    //     return json_decode($value);
    // }
}
