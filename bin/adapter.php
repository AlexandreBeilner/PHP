<?php

use App\Adapter\Impl\EmailServiceAdapter;
use App\Adapter\Impl\LegacyEmailService;
use App\Adapter\Impl\SmsNotification;

require __DIR__ . '/../vendor/autoload.php';

echo 'Iniciando exemplo adatper' . PHP_EOL;

$title = 'Titulo da mensagem';
$body = 'Corpo da mensagem';
$recipient = 'test@test.com';

$emailLegacy = new LegacyEmailService();
$emailAdapter = new EmailServiceAdapter($emailLegacy, $recipient);

$emailAdapter->send($title, $body);

$smsNotification = new SmsNotification($recipient);
$smsNotification->send($title, $body);
