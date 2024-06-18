<?php

use Route\Route;
use App\Controllers\HomeController;

$router = new Route();

$router->get('/', HomeController::class, 'index');

$router->emit();
