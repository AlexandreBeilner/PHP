<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Impl\Example;

$example = new Example();

$name = $argv[1] ?? 'Alexandre';

$resp = $example->greet($name);
