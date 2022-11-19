<?php

namespace Database\Factories;

use App\Models\BlogType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogCategory>
 */
class BlogCategoryFactory extends Factory
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
            'bc_title' => $this->faker->word(),
            'bc_description' => $this->faker->sentence(),
            'bc_content' => $this->faker->text(),
            'blog_type_id' => $this->faker->randomElement(BlogType::pluck('id')),
           
        ];
    }
}
