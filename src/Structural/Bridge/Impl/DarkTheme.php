<?php

namespace App\Structural\Bridge\Impl;

use App\Structural\Bridge\ThemeInterface;

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
