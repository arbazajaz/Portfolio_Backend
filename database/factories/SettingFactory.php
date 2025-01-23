<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Blog\Setting::class;

    public function definition()
    {
        return [
            'title' => $this->faker->company,
            'description' => $this->faker->sentence,
            'logo' => $this->faker->imageUrl(),
            'favicon' => $this->faker->imageUrl(),
            'organization_name' => $this->faker->company,
            'google_console_code' => $this->faker->optional()->word,
            'google_analytic_code' => $this->faker->optional()->word,
            'google_adsense_code' => $this->faker->optional()->word,
            'quick_links' => $this->faker->optional()->words(3),
        ];
    }
}
