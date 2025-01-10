<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'amount',
        'income_title',
        'category',
        'custom_date',
    ];
    protected $attributes=[
        'user_id'=> '0',
    ];
}
