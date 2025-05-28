<?php

namespace App\Structural\DataMapper;

interface StorageAdapterInterface
{
    public function find(string $table, string $id): array;

    public function insert(string $table, array $data): void;
}
