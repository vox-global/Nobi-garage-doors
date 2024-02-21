<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationRequests extends Model
{
    use HasFactory;
    protected $table = 'quotation_requests';
    protected $guarded = ['id'];
}
