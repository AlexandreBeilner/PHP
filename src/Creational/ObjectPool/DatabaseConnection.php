<?php

declare(strict_types=1);

namespace App\Creational\ObjectPool;

class DatabaseConnection
{
    private int $id = 0;

    public function __construct()
    {
        $this->id = rand(1, 20000);
        sleep(1);
    }

    public function query(string $sql): void
    {
        echo 'Connecting ID: ' . $this->id . 'query: ' . $sql . PHP_EOL;
    }

    public function reset(): void
    {

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
