<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Demo1;

class Demo1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Demo1::factory()->count(100)->create();

    }
}
