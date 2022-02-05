<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExamAttindanceFactory extends Factory
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
            'exam_id' => rand(1,100),
            'degree' => $this->faker->randomFloat(2,0,100)
        ];
    }
}
