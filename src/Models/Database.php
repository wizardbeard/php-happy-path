<?php

namespace Wizardbeard\PhpHappyPath\Models;

use ActiveRecord\Config;
use ActiveRecord\Exception\ConfigException;
use Wizardbeard\PhpHappyPath\Core\Singleton;

class Database extends Singleton
{
    private Config $cfg;

    /**
     * @throws ConfigException
     */
    public function __construct()
    {
        parent::__construct();
        $this->cfg = Config::instance();
        $this->cfg->set_connections([
            "development" => "sqlite:/../../db/development.sqlite",
            "staging" => "sqlite:/../../db/staging.sqlite",
            "test" => "sqlite:/../../db/test.sqlite",
            "production" => "sqlite:/../../db/production.sqlite",
        ]);
        $this->cfg->set_default_connection("development");
    }
}
