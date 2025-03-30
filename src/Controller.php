<?php

namespace Wizardbeard\PhpHappyPath;

class Controller
{
    protected function render($view, $viewModel = []) {
        extract($viewModel);
        include "Views/$view.php";
    }
}