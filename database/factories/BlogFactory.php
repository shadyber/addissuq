<?php

namespace Database\Factories;

use App\Models\BlogCategory;
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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->words(3,true),
            'tags' => $this->faker->words(3,true),
            'detail' => $this->faker->sentence(5,true),
            'photo' => $this->faker->imageUrl('1024','768'),
            'thumb' => $this->faker->imageUrl('640','480'),
            'user_id' => $this->faker->randomNumber(1,1),
            'blog_category_id' =>BlogCategory::find(1)->id,
        ];
    }
}
