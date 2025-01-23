<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Blog\Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'sub_title' => $this->faker->sentence,
            'body' => $this->faker->paragraphs(3, true),
            'status' => $this->faker->randomElement(['published', 'scheduled', 'pending']),
            'published_at' => $this->faker->optional()->dateTime,
            'scheduled_for' => $this->faker->optional()->dateTime,
            'cover_photo_path' => $this->faker->imageUrl(),
            'photo_alt_text' => $this->faker->words(3, true),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
