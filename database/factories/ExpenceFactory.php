<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenceFactory extends Factory
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
            'reason' => $this->faker->text(),
            'amount' => $this->faker->randomFloat(2,0,500),
            'date' => $this->faker->date(),
        ];
    }
}
