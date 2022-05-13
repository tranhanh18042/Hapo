<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => $this->faker->numberBetween(1, 100),
            'commet' => $this->faker->text(),
            'vote' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'deleted_at' => $this->faker->date(),
        ];
    }
}
