<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Impl;

use App\Structural\Bridge\ThemeInterface;

abstract class AbstractPage
{
    protected ThemeInterface $theme;

    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    public function changeTheme(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    public abstract function view(): string;
}
