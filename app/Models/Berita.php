<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
    [
       "judul" => "Mahasiswa Josjis",
       "slug" => "Mahasiswa Josjis",
       "penulis" => "rap",
       "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos unde est quidem numquam consequatur incidunt minima culpa? Odio cupiditate incidunt et in totam similique libero aut aspernatur, consequuntur debitis error ea corrupti est neque minus facilis impedit. Blanditiis vel et, alias repellendus adipisci quis inventore reprehenderit provident eum ducimus voluptate!" 
    ],
    [
        "judul" => "Dosen josjis",
        "slug" => "Dosen Josjis",
        "penulis" => "Dosen lah",
        "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, perspiciatis error laboriosam, aperiam ratione eos vel qui itaque architecto officiis non iste libero tempore a! Voluptatum saepe fuga error qui."
    ],
];

public static function ambilBerita()
{
    return self::$data_berita;
}

public static function getBerita($slug)
    {
        $beritas = self::$data_berita;

        foreach ($beritas as $berita) {
            if ($berita['slug'] === $slug) {
                return $berita;
            }
        }

        return null;
    }

public static function getTitle($slug)
{
    $berita = self::getBerita($slug);

    return $berita["judul"];
}
}