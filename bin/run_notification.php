<?php

declare(strict_types=1);

use App\Impl\EmailNotifier;
use App\Impl\SmsNotifier;
use App\Impl\User;
use App\Impl\UserService;

require_once __DIR__ . '/../vendor/autoload.php';

$user = new User('XANDAO', 'xandao@gmail.com', '(49)1313131313');

$email = new EmailNotifier();

$sms = new SmsNotifier();

$userService = new UserService();

$userService->notifyUser($user, 'AAAAAAAAAAAA', $email);
$userService->notifyUser($user, 'AAAAAAAAAAAA', $sms);
