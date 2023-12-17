<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => UserFactory::new(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'position' => fake()->jobTitle(),
            'salary' => fake()->randomFloat(2, 1000, 10000),
            'status' => fake()->randomElement(['active', 'inactive']),
        ];
    }
}
