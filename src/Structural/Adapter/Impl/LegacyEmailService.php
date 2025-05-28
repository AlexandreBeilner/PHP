<?php

declare(strict_types=1);

namespace App\Structural\Adapter\Impl;

final class LegacyEmailService
{
    public function sendEmailWithSubjectAndRecipient(string $recipient, string $subject, string $body): string
    {
        echo 'Enviando email para: ' . $recipient . PHP_EOL;
        echo 'Com o titulo: ' . $subject . PHP_EOL;
        echo 'Com o corpo: ' . $body . PHP_EOL;
        return 'Ok';
    }
}
