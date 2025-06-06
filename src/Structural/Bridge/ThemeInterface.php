<?php

declare(strict_types=1);

namespace App\Structural\Bridge;

interface ThemeInterface
{
    public function getMainFont(): string;

    public function getPrimaryColor(): string;

    public function getTextColor(): string;

}
