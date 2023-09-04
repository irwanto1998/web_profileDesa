<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemerintah>
 */
class PemerintahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isi_1' => fake()->text(),
            'isi_2' => fake()->text(),
            'gambar_1' => fake()->imageUrl(),
            'gambar_2' => fake()->imageUrl(),
        ];
    }
}
