<?php

namespace App\Structural\DataMapper\Impl;

use App\Structural\DataMapper\StorageAdapterInterface;

class InMemoryStorageAdapter implements StorageAdapterInterface
{

    private array $data = [];
    public function find(string $table, string $id): array
    {
        if (! isset($this->data[$table])) {
            throw new \Exception('TABELA NAO EXISTE');
        }

        if (! isset($this->data[$table][$id])) {
            throw new \Exception('ELEMENTO NAO EXISTE');
        }
        return $this->data[$table][$id];
    }

    public function insert(string $table, array $data): void
    {
        if (!isset($this->data[$table])) {
            $this->data[$table] = [];
        }
        $this->data[$table][$data['id']] = $data;
    }
}
