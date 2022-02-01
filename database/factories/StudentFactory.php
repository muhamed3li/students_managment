<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'gender' => $this->faker->boolean(),
            'address' => $this->faker->address(),
            'home_phone' => $this->faker->phoneNumber(),
            'phone' => $this->faker->phoneNumber(),
            // 'father_name' => $this->faker->name(),
            'father_phone' => $this->faker->phoneNumber(),
            'school' => $this->faker->name(),
            'status' => $this->faker->randomElement(['reserve','in','out','fired']),
            'reserve_paid' => $this->faker->randomFloat(2,0,100),
            'level_id' => rand(1,9),
            'group_id' => rand(1,9),
        ];
    }
}
