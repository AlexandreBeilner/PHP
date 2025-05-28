<?php

namespace App\Structural\Decorator\Impl;

class ItalicDecorator extends AbstractTextDecorator
{
    public function format(): string
    {
//        return '<bold>' . $this->text->format() . '</bold>';
        return '<i>' . parent::format() . '</i>';
    }
}
