<?php

declare(strict_types=1);

namespace App\Structural\Adapter;

interface NotificationInterface
{
    public function send(string $title, string $message): bool;
}
