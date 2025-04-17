<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$sales = new \App\Impl\SalesReport();

echo $sales->generateLogEntry();
echo '<br>';
echo $sales->exportCsv();
