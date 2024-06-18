<?php

namespace App\Controllers;

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);

        require_once __DIR__ . "/../Views/$view.php";
    }

    public function notFound()
    {
        $this->view('404');
    }
}
