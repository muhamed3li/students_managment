<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pay_from' => $this->faker->date(),
            'pay_to' => $this->faker->date(),
            'month_paid' => $this->faker->randomFloat(2,0,100),
            'malazem_paid' => $this->faker->randomFloat(2,0,100),
            'discount' => $this->faker->randomFloat(2,0,100),
            'total' => 0,
            'student_id' => rand(1,9),
        ];
    }
}
