<?php

declare(strict_types=1);

namespace App\Adapter\Impl;

use App\Adapter\NotificationInterface;

class EmailServiceAdapter implements NotificationInterface
{
    private LegacyEmailService $legacyEmailService;
    private string $recipient;

    public function __construct(LegacyEmailService $legacyEmailService, string $recipient)
    {
        $this->legacyEmailService = $legacyEmailService;
        $this->recipient = $recipient;
    }

    public function send(string $title, string $message): bool
    {
        echo 'Adapter enviando email para ' . $this->recipient . PHP_EOL;
        return $this->legacyEmailService->sendEmailWithSubjectAndRecipient($this->recipient, $title, $message) === 'Ok';
    }
}
