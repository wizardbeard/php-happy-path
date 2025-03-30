<?php

namespace Wizardbeard\PhpHappyPath\Controllers;

use Wizardbeard\PhpHappyPath\Controller;
use Wizardbeard\PhpHappyPath\Core\Flash;

class HomeController extends Controller
{
    public function index()
    {
        Flash::setMessage("Flash displayed by index.php template & set in the HomeController's index() method.");
        $this->render('Home/index');
    }
}