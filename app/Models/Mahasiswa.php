<?php

namespace App\Models;

class Mahasiswa
{
    public function get()
    {
        $data = [
            [
                "nama" => "Dede",
                "umur" => 71
            ],
            [
                "nama" => "Agus",
                "umur" => 72
            ],
            [
                "nama" => "Dede Agus",
                "umur" => 70
            ],
        ];

        return $data;
    }
}
