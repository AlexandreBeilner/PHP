<?php

declare(strict_types=1);

use App\Builder\Impl\MySQLQueryBuilder;

require __DIR__ . "/../vendor/autoload.php";

$builder = new MySQLQueryBuilder();

$query = $builder->select('users', ['id', 'name', 'age'])
    ->where("name = 'Alexandre'")
    ->limit(10)
    ->build();

echo $query;
