<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


use App\Models\Demo2;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demo2>
 */
class Demo2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Demo2::class;
    public function definition(): array
    {
        return [
            'name_demo_2' =>fake()->name(),
            'addres' => fake()->address(),
        ];
    }
}
