<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\CategoryPost>
 */
class CategoryPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Blog\CategoryPost::class;

    public function definition()
    {
        return [
            'post_id' => \App\Models\Blog\Post::factory(),
            'category_id' => \App\Models\Blog\Category::factory(),
        ];
    }
}
