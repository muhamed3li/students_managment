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
            'student_id' => rand(1,1000),
            'exam_id' => rand(1,1000),
            'degree' => $this->faker->randomFloat(2,0,100)
        ];
    }
}
