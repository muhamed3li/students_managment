<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
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
            'group_id' => rand(1,9),
            'exam_date' => $this->faker->date(),
            'exam_max' => 100,
            'exam_min' => 50,
        ];
    }
}
