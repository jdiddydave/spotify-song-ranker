<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{
    public function definition(): array
    {
        return [
            'artist_id' => str()->random(16),
            'artist_name' => fake()->userName(),
            'artist_img' => fake()->imageUrl(200, 200, 'artist', true),
        ];
    }
}
