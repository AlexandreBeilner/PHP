<?php

declare(strict_types=1);

namespace App\ObjectPool;

use RuntimeException;

final class ResourcePool
{
    private const MAX_CONNECTIONS = 3;

    private array $available = [];

    private array $inUse = [];

    public function getConnection(): DatabaseConnection
    {
        echo 'Getting connection' . PHP_EOL;
        if (count($this->inUse) >= self::MAX_CONNECTIONS) {
            throw new RuntimeException('No more connections available');
        }
        if (empty($this->available)) {
            echo 'Creating new connection e armazenando no avialable' . PHP_EOL;
            $connection = new DatabaseConnection();
            $this->available[$connection->getID()] = $connection;
        }
        echo 'Passando para uso e retornando connection' . PHP_EOL;
        /** @var DatabaseConnection $connection */
        $connection = array_pop($this->available);
        $this->inUse[$connection->getID()] = $connection;
        return $connection;
    }

    public function release(DatabaseConnection $connection): void
    {
        if (isset($this->inUse[$connection->getID()])) {
            echo 'Releasing connection' . PHP_EOL;
            $this->available[$connection->getID()] = $connection;
            unset($this->inUse[$connection->getID()]);
        }
    }
}
