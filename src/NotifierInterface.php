<?php

declare(strict_types=1);

namespace App;

use App\Impl\User;

interface NotifierInterface
{
    public function send(User $user, string $message): void;

}
