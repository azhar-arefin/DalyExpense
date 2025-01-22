<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Demo2;



class Demo1 extends Model
{
    /** @use HasFactory<\Database\Factories\Demo1Factory> */
    use HasFactory;

    public function demo2(){
        return $this->belongsToMany(Demo2::class, 'demo3s', 'demo1_id', 'demo2_id');

    }
}
