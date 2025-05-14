<?php

declare(strict_types=1);

namespace App\SimpleFactory\Impl;

use App\SimpleFactory\NotifierInterface;

final class EmailNotifier implements NotifierInterface
{

    public function send(string $message): void
    {
        echo 'Email notifier: ' . $message . PHP_EOL;
    }
}
