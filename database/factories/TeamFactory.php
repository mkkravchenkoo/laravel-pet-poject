<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'position' => fake()->randomElement(['Designer', 'Developer', 'Manager', 'Copywriter']),
            'social_fb' => fake()->url,
            'social_inst' => fake()->url,
            'social_tw' => fake()->url,
        ];
    }
}
