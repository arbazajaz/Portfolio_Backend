<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\SeoDetail>
 */
class SeoDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Blog\SeoDetail::class;

    public function definition()
    {
        return [
            'post_id' => \App\Models\Blog\Post::factory(),
            'title' => $this->faker->sentence,
            'keywords' => $this->faker->words(5),
            'description' => $this->faker->paragraph,
        ];
    }
}
