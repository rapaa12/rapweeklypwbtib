<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::updateOrCreate(
            ['slug' => 'mahasiswa josjis'],
            [
                'judul' => 'Mahasiswa Josjis',
                'penulis' => 'rap',
                'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            ]
        );

        Berita::updateOrCreate(
            ['slug' => 'Dosen josjis'],
            [
                'judul' => 'Dosen Josjis',
                'penulis' => 'Dosen lah',
                'konten' => fake()->paragraphs(5, true),
            ]
        );

        Berita::factory(15)->create();
    }
}
