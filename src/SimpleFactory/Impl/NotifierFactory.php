<?php

namespace App\SimpleFactory\Impl;

use App\SimpleFactory\NotifierInterface;

final class NotifierFactory
{
    public static function create(string $type): ?NotifierInterface
    {
        if ($type === 'sms') {
            return new SmsNotifier();
        }
        if ($type === 'email') {
            return new EmailNotifier();
        }
        return null;
    }
}
