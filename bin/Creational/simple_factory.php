<?php

declare(strict_types=1);

use App\Creational\SimpleFactory\Impl\NotifierFactory;

require __DIR__ . '/../vendor/autoload.php';

$notifier = NotifierFactory::create('email');
$notifier->send('AAAAAAAAAAAa');

$notifier = NotifierFactory::create('sms');
$notifier->send('bBBBBBBBBB');
