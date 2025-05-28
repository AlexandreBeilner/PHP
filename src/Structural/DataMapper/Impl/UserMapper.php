<?php

namespace App\Structural\DataMapper\Impl;

use App\Structural\DataMapper\StorageAdapterInterface;

class UserMapper
{
    private StorageAdapterInterface $storageAdapter;


    public function __construct(StorageAdapterInterface $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    public function findById(string $id): ?User
    {
        $userArray = $this->storageAdapter->find('user', $id);
        return $userArray ? new User($userArray['id'], $userArray['name'], $userArray['email']) : null;
    }

    public function insert(User $user): void
    {
        $this->storageAdapter->insert('user', [
            'id' => $user->getId(),
            'name' => $user->getName(),
            'email' => $user->getEmail(),
        ]);
    }
}
