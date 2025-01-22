<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Demo1;

class Demo2 extends Model
{
    /** @use HasFactory<\Database\Factories\Demo2Factory> */
    use HasFactory;

    public function demo1(){
        return $this->belongsToMany(Demo1::class, 'demo3s', 'demo2_id', 'demo1_id');

      }
}
