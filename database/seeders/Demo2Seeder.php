<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Demo2;

class Demo2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Demo2::factory()->count(100)->create();
    }
}
