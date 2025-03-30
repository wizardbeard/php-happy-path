<?php

namespace Wizardbeard\PhpHappyPath;

use ReflectionObject;
use Wizardbeard\PhpHappyPath\Attributes\Route;

class Controller
{
    /**
     * @param string $view
     * @param array $viewModel
     * @return void
     */
    protected function render(string $view, array $viewModel = []): void
    {
        extract($viewModel);
        include "Views/$view.php";
    }

    /**
     * @param Controller $controller
     * @return array
     */
    protected static function getRoutes(Controller $controller): array
    {
        $routes = [];

        $reflection = new ReflectionObject($controller);

        foreach ($reflection->getMethods() as $method) {
            $attributes = $method->getAttributes(Route::class);

            if (count($attributes) > 0) {
                $methodName = $method->getName();
                foreach ($attributes as $attribute) {
                    $routes[$methodName] = $attribute->getArguments();
                }
            }
        }

        return $routes;
    }
}
