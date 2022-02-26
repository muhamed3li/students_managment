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
        $month = $this->faker->randomFloat(2,0,100);
        $malazem = $this->faker->randomFloat(2,0,100);
        $discount = $this->faker->randomFloat(2,0,5);
        return [
            'month_id' => rand(1,10),
            'month_paid' => $month,
            'malazem_paid' => $malazem,
            'discount' => $discount,
            'total' => $month + $malazem - $discount,
            'student_id' => rand(1,1000),
        ];
    }
}