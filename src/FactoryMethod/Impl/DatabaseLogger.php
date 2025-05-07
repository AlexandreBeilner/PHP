<?php

namespace App\FactoryMethod\Impl;

use App\FactoryMethod\LoggerInterface;

class DatabaseLogger implements LoggerInterface
{
    private string $dsn;

    public function __construct(string $dsn)
    {
        $this->dsn = $dsn;
    }

    public function log(string $message): void
    {
        $date = date('Y-m-d H:i:s');
        echo sprintf("[%s] - Log %s", $date, $message);
    }
}
