<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Impl;

use App\Creational\FactoryMethod\LoggerInterface;

abstract class AbstractLogManager
{
    abstract protected function createLogger(): LoggerInterface;

    public function log(string $message)
    {
        $logger = $this->createLogger();
        $logger->log($message);
        echo 'Proc log message' . PHP_EOL;
    }
}
