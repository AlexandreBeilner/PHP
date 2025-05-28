<?php

declare(strict_types=1);

use App\Structural\FluentInterface\EmailBuilder;

require __DIR__ . '/../../vendor/autoload.php';

echo 'INICIANDO EXEMPLO FLUNT INTERFACE' . PHP_EOL;

$builder = new EmailBuilder();

$emailMessage = $builder->from('alexandre.beilner@gmail.com')
    ->subject('assunto do emaul')
    ->body('corpo do emaul')
    ->to('calama.com@gmail.com')
    ->to('calabreso@gmail.com')
    ->build();

echo $emailMessage;
