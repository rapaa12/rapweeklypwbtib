<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $judul = fake()->sentence(4);
        return [
            'judul' => $judul,
            'slug' => Str::slug($judul) . '-' . fake()->unique()->numberBetween(1, 999999),
            'penulis' => fake()->name(),
            'konten' => fake()->paragraphs(5,true),
        ];
    }
}
