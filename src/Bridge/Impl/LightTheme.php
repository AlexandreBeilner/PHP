<?php

namespace App\Bridge\Impl;

use App\Bridge\ThemeInterface;

class LightTheme implements ThemeInterface
{

    public function getMainFont(): string
    {
        return 'Monstserif';
    }

    public function getPrimaryColor(): string
    {
        return 'White';
    }

    public function getTextColor(): string
    {
        return 'Black';
    }
}
