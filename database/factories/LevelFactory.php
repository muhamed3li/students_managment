<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LevelFactory extends Factory
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
            // 'reserve_cost' => $this->faker->randomFloat(4,0,1000),
            'malazem_cost' => $this->faker->randomFloat(4,0,1000),
            'month_cost' => $this->faker->randomFloat(4,0,1000),
        ];
    }
}
