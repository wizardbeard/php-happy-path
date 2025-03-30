<?php

namespace Wizardbeard\PhpHappyPath\Controllers;

use Wizardbeard\PhpHappyPath\Attributes\Route;
use Wizardbeard\PhpHappyPath\Controller;
use Wizardbeard\PhpHappyPath\Core\Flash;

class HomeController extends Controller
{
    #[Route(path: '/', methods: ['GET', 'POST'], schemes: ['http'])]
    public function index(): void
    {
        Flash::setMessage("Flash displayed by index.php template & set in the HomeController's index() method.");
        $routes = parent::getRoutes($this);
        $this->render('Home/index', ["version" => "0.0.2", "routes" => $routes]);
    }
}
