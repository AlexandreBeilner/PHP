<?php

namespace App\SimpleFactory;

interface NotifierInterface
{
    public function send(string $message): void;
}
