<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Mahasiswa;

class HomeController extends Controller
{
    public function index()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa = $mahasiswa->get();
        $greetingName = "Jeje";
        $this->view('home', [
            "mahasiswa" => $mahasiswa,
            "nama" => $greetingName
        ]);
    }
}
