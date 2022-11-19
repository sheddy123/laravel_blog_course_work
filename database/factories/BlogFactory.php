<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'blog_title' => $this->faker->word(),
            'blog_description' => $this->faker->sentence(),
            'blog_content' => $this->faker->text(),
            'author_id' => $this->faker->randomElement(User::pluck('id')),
        ];
    }
}
