<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


use App\Models\Demo1;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demo1>
 */
class Demo1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Demo1::class;

    public function definition(): array
    {
        return [
            'name_demo_1' =>fake()->name(),
            'addres' => fake()->address(),
        ];
    }
}
