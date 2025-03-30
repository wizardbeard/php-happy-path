<?php

namespace Wizardbeard\PhpHappyPath;

use Exception;
use Wizardbeard\PhpHappyPath\Core\Flash;

class Router
{
    protected array $routes = [];

    /**
     * @param $route
     * @param $controller
     * @param $action
     * @param $method
     * @return void
     */
    private function addRoute($route, $controller, $action, $method): void
    {
        try {
            $this->routes[$method][$route] = ['controller' => $controller, 'action' => $action];
        } catch (Exception $e) {
            Flash::setMessage($e->getMessage());
        }
    }

    /**
     * @param $route
     * @param $controller
     * @param $action
     * @return void
     */
    public function get($route, $controller, $action): void
    {
        $this->addRoute($route, $controller, $action, "GET");
    }

    /**
     * @param $route
     * @param $controller
     * @param $action
     * @return void
     */
    public function post($route, $controller, $action): void
    {
        $this->addRoute($route, $controller, $action, "POST");
    }

    /**
     * @param $route
     * @param $controller
     * @param $action
     * @return void
     */
    public function patch($route, $controller, $action): void
    {
        $this->addRoute($route, $controller, $action, "PATCH");
    }

    /**
     * @param $route
     * @param $controller
     * @param $action
     * @return void
     */
    public function put($route, $controller, $action): void
    {
        $this->addRoute($route, $controller, $action, "PUT");
    }

    /**
     * @param $route
     * @param $controller
     * @param $action
     * @return void
     */
    public function delete($route, $controller, $action): void
    {
        $this->addRoute($route, $controller, $action, "DELETE");
    }

    /**
     * @throws Exception
     */
    public function dispatch(): void
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
