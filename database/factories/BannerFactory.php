<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = [
            'type 1',
            'type 2'
        ];

        $name = fake()->word();

        return [
            'type' => $types[rand(0, 1)],
            'name' => $name,
            'url' => fake()->imageUrl(width:1200, height:600, word:$name)
        ];
    }
}
