<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';

    protected $fillable = [
        'judul',
        'slug',
        'penulis',
        'konten',
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