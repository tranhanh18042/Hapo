<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_document'=>$this->faker->numberBetween(1,100),
            'lesson'=>$this->faker->title(),
            'description'=>$this->faker->text(),
            'requiment'=>$this->faker->text(),
            'avatar'=>$this->faker->imageUrl(),
            'time'=>$this->faker->numberBetween(1,100),
        ];
    }
}
