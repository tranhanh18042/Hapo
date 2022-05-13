<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'video' => $this->faker->imageUrl(),
            'file' => $this->faker->name(),
            'document' => $this->faker->name(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'deleted_at' => $this->faker->date(),
        ];
    }
}
