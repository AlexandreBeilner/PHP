<?php

namespace App\Structural\Decorator\Impl;

use App\Structural\Decorator\TextInterface;

final class SimpleText implements TextInterface
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function format(): string
    {
        return '<p>' . $this->text . '</p>';
    }
}
