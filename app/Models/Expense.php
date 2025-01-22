<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'amount',
        'category',
        'custom_date',
    ];
    protected $attributes=[
        'user_id'=> '0',
        'custom_date' => null,

    ];
}
