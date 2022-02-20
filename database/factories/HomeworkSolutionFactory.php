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
            'student_id' => rand(1,1000),
            'homework_id' => rand(1,1000),
            'degree' => $this->faker->randomFloat(2,0,100),
            'solved_at' => $this->faker->date(),
        ];
    }
}
