<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'expense_title',
        'category',
        'custom_date',
    ];
    protected $attributes=[
        'user_id'=> '0',
    ];
}
