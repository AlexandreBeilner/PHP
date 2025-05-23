<?php

declare(strict_types=1);

use App\Creational\StaticFactoryMethod\DateRange;

require __DIR__ . '/../vendor/autoload.php';

$dateRange = DateRange::fromString('2021-01-01', '2021-12-07');

if ($dateRange->contains(new DateTimeImmutable('2021-01-31'))) {
    echo  'CONTEM' . PHP_EOL;
} else {
    echo  'ERROR' . PHP_EOL;
}
