<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Blog\Comment::class;

    public function definition()
    {
        return [
            'post_id' => \App\Models\Blog\Post::factory(),
            'user_id' => \App\Models\User::factory(),
            'comment' => $this->faker->sentence,
            'approved' => $this->faker->boolean,
            'approved_at' => $this->faker->optional()->dateTime,
        ];
    }
}
