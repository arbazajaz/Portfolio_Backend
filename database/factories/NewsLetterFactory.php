<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\NewsLetter>
 */
class NewsLetterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Blog\NewsLetter::class;

    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'subscribed' => $this->faker->boolean(80),
        ];
    }
}
