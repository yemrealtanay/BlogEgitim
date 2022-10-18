<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogpost>
 */
class BlogpostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->word,
            'content' => fake()->text,
            'image_url' => fake()->imageUrl,
            'category_id' => fake()->numberBetween(1, 10),
            'user_id' => fake()->numberBetween(1, 10)
        ];
    }
}
