<?php

declare(strict_types=1);

use App\Creational\ObjectPool\ResourcePool;

require __DIR__ . '/../vendor/autoload.php';

$pool = new ResourcePool();

$connection1 = $pool->getConnection();
$connection1->query('SET FOREIGN_KEY_CHECKS=0;');
$connection2 = $pool->getConnection();
$connection2->query('SET FOREIGN_KEY_CHECKS=2;');
$connection3 = $pool->getConnection();
$connection3->query('SET FOREIGN_KEY_CHECKS=3;');
$pool->release($connection2);
$connection4 = $pool->getConnection();
$connection4->query('SET FOREIGN_KEY_CHECKS=4;');
