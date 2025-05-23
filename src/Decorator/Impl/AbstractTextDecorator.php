<?php

declare(strict_types=1);

namespace App\Decorator\Impl;

use App\Decorator\TextInterface;

abstract class AbstractTextDecorator implements TextInterface
{
    protected TextInterface $text;

    public function __construct(TextInterface $text)
    {
        $this->text = $text;
    }

    public function format(): string
    {
        return $this->text->format();
    }
}
