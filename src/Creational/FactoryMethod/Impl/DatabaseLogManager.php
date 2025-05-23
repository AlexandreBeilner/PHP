<?php

namespace App\Creational\FactoryMethod\Impl;

use App\Creational\FactoryMethod\LoggerInterface;

class DatabaseLogManager extends AbstractLogManager
{
    private string $dsn;

    public function __construct(string $dsn)
    {
        $this->dsn = $dsn;
    }

    protected function createLogger(): LoggerInterface
    {
        return new DatabaseLogger($this->dsn);
    }
}
