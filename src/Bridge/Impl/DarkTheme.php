<?php

namespace App\Bridge\Impl;

use App\Bridge\ThemeInterface;

class DarkTheme implements ThemeInterface
{

    public function getMainFont(): string
    {
        return 'Suns Serif';
    }

    public function getPrimaryColor(): string
    {
        return 'Dark';
    }

    public function getTextColor(): string
    {
        return 'White';
    }
}
