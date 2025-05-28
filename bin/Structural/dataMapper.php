<?php

declare(strict_types=1);

use App\Structural\DataMapper\Impl\InMemoryStorageAdapter;
use App\Structural\DataMapper\Impl\User;
use App\Structural\DataMapper\Impl\UserMapper;

require __DIR__ . "/../../vendor/autoload.php";

//repository -> mapper
// mapper -> repository -> database

echo "INICIANDO EXEMPLO MAPPER" . PHP_EOL;

$adapter = new InMemoryStorageAdapter();

$userMapper = new UserMapper($adapter);

$userMapper->insert(new User('8', 'Alexandre', 'alexandre.beilner.com'));

echo '<pre>';
print_r($userMapper->findById('8'));exit;
