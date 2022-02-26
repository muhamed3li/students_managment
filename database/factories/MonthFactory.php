<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MonthFactory extends Factory
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
            'start' => $this->faker->dateTimeBetween('+0 days', '+1 years'),
            'end' => $this->faker->dateTimeBetween('+0 days', '+1 years'),
        ];
    }
}
