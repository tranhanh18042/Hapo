<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'courses' => $this->faker->title(),
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(1, 100),
            'avatar' => $this->faker->imageUrl(),
            'time' => $this->faker->numberBetween(1, 40),
        ];
    }
}
