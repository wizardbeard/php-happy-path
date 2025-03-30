<?php

namespace Wizardbeard\PhpHappyPath\Routes;

use Exception;
use Wizardbeard\PhpHappyPath\Controllers\HomeController;
use Wizardbeard\PhpHappyPath\Core\Flash;
use Wizardbeard\PhpHappyPath\Router;

try {
    $router = new Router();
    $router->get('/', HomeController::class, 'index');
    $router->dispatch();
} catch (Exception $e) {
    Flash::setMessage($e->getMessage());
}
