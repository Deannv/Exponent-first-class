<?php

namespace Route;

use App\Controllers\Controller;

class Route
{
    protected $routes = [];

    public function get($route, $controller, $action)
    {
        $this->routes['GET'][$route] = ['controller' => $controller, 'action' => $action];
    }

    public function post($route, $controller, $action)
    {
        $this->routes['POST'][$route] = ['controller' => $controller, 'action' => $action];
    }

    public function emit()
    {
        $uri    = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];

        if (array_key_exists($uri, $this->routes[$method]) !== false) {
            $controller = $this->routes[$method][$uri]['controller'];
            $action = $this->routes[$method][$uri]['action'];

            $controller = new $controller();
            $controller->$action();
        } else {
            (new Controller())->notFound();
        }
    }
}
