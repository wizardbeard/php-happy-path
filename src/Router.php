<?php

namespace Wizardbeard\PhpHappyPath;

use Exception;
use Wizardbeard\PhpHappyPath\Core\Flash;

class Router
{
    protected $routes = [];

    private function addRoute($route, $controller, $action, $method)
    {
        try {
            $this->routes[$method][$route] = ['controller' => $controller, 'action' => $action];
        } catch (Exception $e) {
            Flash::setMessage($e->getMessage());
        }
    }

    public function get($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "GET");
    }

    public function post($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "POST");
    }

    public function patch($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "PATCH");
    }

    public function put($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "PUT");
    }

    public function delete($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "DELETE");
    }

    /**
     * @throws Exception
     */
    public function dispatch()
    {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method =  $_SERVER['REQUEST_METHOD'];

        if (array_key_exists($uri, $this->routes[$method])) {
            $controller = $this->routes[$method][$uri]['controller'];
            $action = $this->routes[$method][$uri]['action'];

            $controller = new $controller();
            $controller->$action();
        } else {
            throw new Exception("No route found for URI: $uri");
        }
    }
}
