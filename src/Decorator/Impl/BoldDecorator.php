<?php

declare(strict_types=1);

namespace App\Decorator\Impl;

final class BoldDecorator extends AbstractTextDecorator
{
    public function format(): string
    {
//        return '<bold>' . $this->text->format() . '</bold>';
        return '<bold>' . parent::format() . '</bold>';
    }
}
