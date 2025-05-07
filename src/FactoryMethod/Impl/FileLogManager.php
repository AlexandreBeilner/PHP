<?php

namespace App\FactoryMethod\Impl;

use App\FactoryMethod\LoggerInterface;

class FileLogManager extends AbstractLogManager
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    protected function createLogger(): LoggerInterface
    {
        return new FileLogger($this->filePath);
    }
}
