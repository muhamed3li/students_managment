<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeworkSolutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => rand(1,100),
            'homework_id' => rand(1,100),
            'solved' => $this->faker->boolean(),
            'solved_at' => $this->faker->date(),
        ];
    }
}
