<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
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
            'level_id' => rand(1,9),
            'time_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}
