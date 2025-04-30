<?php

declare(strict_types=1);

namespace App\Impl;

use App\NotifierInterface;

class UserService {
    public function notifyUser(User $user, string $message, NotifierInterface $notifier): void
    {
        $notifier->send($user, $message);
    }
}
