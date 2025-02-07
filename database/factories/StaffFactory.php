<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'age'=>rand(18,30),
            'dob'=>date('Y-m-d'),
            'address'=>fake()->address(),
            'salary'=>rand(1,10000),
            'married'=>fake()->boolean()
        ];
    }
}
