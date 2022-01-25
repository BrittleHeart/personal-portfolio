<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'post_id' => $this->faker->numberBetween(1, 20),
            'comment' => $this->faker->text(),
            'published' => $this->faker->boolean(45)
        ];
    }
}