<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\ShareSnippet>
 */
class ShareSnippetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Blog\ShareSnippet::class;

    public function definition()
    {
        return [
            'script_code' => $this->faker->text,
            'html_code' => $this->faker->text,
            'active' => $this->faker->boolean,
        ];
    }
}
