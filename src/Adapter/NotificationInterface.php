<?php

declare(strict_types=1);

namespace App\Adapter;

interface NotificationInterface
{
    public function send(string $title, string $message): bool;
}
