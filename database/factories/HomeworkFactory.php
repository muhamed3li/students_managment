<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeworkFactory extends Factory
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
            'level_id' => rand(1,100),
            'group_id' => rand(1,100),
            'deadline' => $this->faker->date(),
        ];
    }
}
