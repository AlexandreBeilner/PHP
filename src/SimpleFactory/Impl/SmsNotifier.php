<?php

declare(strict_types=1);

namespace App\SimpleFactory\Impl;

use App\SimpleFactory\NotifierInterface;

final class SmsNotifier implements NotifierInterface
{

    public function send(string $message): void
    {
        echo 'SMS notifier: ' . $message . PHP_EOL;
    }
}
