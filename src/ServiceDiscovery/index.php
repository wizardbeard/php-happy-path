<?php

namespace Wizardbeard\PhpHappyPath\ServiceDiscovery;

use Exception;
use Wizardbeard\PhpHappyPath\Containers\ServiceProvider;
use Wizardbeard\PhpHappyPath\Core\Flash;
use Wizardbeard\PhpHappyPath\Models\Database;

try {
    ServiceProvider::set("database", Database::getInstance());
} catch (Exception $e) {
    Flash::setMessage($e->getMessage());
}
