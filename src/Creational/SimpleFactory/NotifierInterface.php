<?php

namespace App\Creational\SimpleFactory;

interface NotifierInterface
{
    public function send(string $message): void;
}
