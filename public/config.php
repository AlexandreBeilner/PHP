<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$config = new \App\Impl\Configuration(['db' => 'databse', 'test' => 'db_test']);

echo $config->db;
