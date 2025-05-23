<?php

declare(strict_types=1);

namespace App\Adapter\Impl;

use App\Adapter\NotificationInterface;

class SmsNotification implements NotificationInterface
{
    private string $recipient;
    public function __construct(string $recipient)
    {
        $this->recipient = $recipient;
    }

    public function send(string $title, string $message): bool
    {
        echo 'SMS Notification sending message.' . PHP_EOL;
        echo 'Erro ao enviar SMS' . PHP_EOL;
        return false;
    }
}
