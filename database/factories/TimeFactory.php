<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sat' => $this->faker->time('H:i'),
            'sun' => $this->faker->time('H:i'),
            'mon' => $this->faker->time('H:i'),
            'tus' => $this->faker->time('H:i'),
            'wed' => $this->faker->time('H:i'),
            'thu' => $this->faker->time('H:i'),
            'fri' => $this->faker->time('H:i'),
        ];
    }
}
