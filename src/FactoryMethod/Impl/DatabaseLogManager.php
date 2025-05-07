<?php

namespace App\FactoryMethod\Impl;

use App\FactoryMethod\LoggerInterface;

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
