<?php

namespace Wizardbeard\PhpHappyPath\Containers;

interface ProviderInterface
{
    /**
     * @param string $name
     * @return mixed
     */
    public function getResource(string $name): mixed;

    /**
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    public function setResource(string $name, mixed $value): bool;

    /**
     * @param string $name
     * @return bool
     */
    public function hasResource(string $name): bool;
}
