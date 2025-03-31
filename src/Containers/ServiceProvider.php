<?php

namespace Wizardbeard\PhpHappyPath\Containers;

use Exception;
use Wizardbeard\PhpHappyPath\Core\Flash;
use Wizardbeard\PhpHappyPath\Core\Singleton;

class ServiceProvider extends Singleton implements ProviderInterface
{
    private array $services = [];

    protected function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function getResource(string $name): mixed
    {
        try {
            return parent::getInstance()->services[$name];
        } catch (Exception $e) {
            Flash::setMessage($e->getMessage());
            return [];
        }
    }

    /**
     * @param string $name
     * @return mixed
     */
    public static function get(string $name): mixed
    {
        return parent::getInstance()->getResource($name);
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    public function setResource(string $name, mixed $value): bool
    {
        try {
            parent::getInstance()->services[$name] = $value;
            return true;
        } catch (Exception $e) {
            Flash::setMessage($e->getMessage());
            return false;
        }
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    public static function set(string $name, mixed $value): bool
    {
        return parent::getInstance()->setResource($name, $value);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasResource(string $name): bool
    {
        try {
            if (array_key_exists($name, parent::getInstance()->services)) {
                if (isset(parent::getInstance()->services[$name])) {
                    return True;
                } else {
                    return False;
                }
            } else {
                return False;
            }
        } catch (Exception $e) {
            Flash::setMessage($e->getMessage());
            return False;
        }
    }

    /**
     * @param string $name
     * @return bool
     */
    public static function has(string $name): bool
    {
        return parent::getInstance()->hasResource($name);
    }
}
