<?php

namespace Wizardbeard\PhpHappyPath\Core;

class Flash extends Singleton
{
    private string $message;

    /**
     * Default constructor.
     */
    protected function __construct()
    {
        parent::__construct();
        $this->message = '';
    }

    /**
     * @return string
     */
    public static function getMessage(): string
    {
        return parent::getInstance()->message;
    }

    /**
     * @param string $message
     */
    public static function setMessage(string $message): void
    {
        parent::getInstance()->message = $message;
    }
}
