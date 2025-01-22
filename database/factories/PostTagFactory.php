<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\PostTag>
 */
class PostTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Blog\PostTag::class;

    public function definition()
    {
        return [
            'post_id' => \App\Models\Blog\Post::factory(),
            'tag_id' => \App\Models\Blog\Tag::factory(),
        ];
    }
}
