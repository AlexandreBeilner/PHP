<?php

namespace App\Structural\Bridge\Impl;

class SimplePage extends AbstractPage
{

    public function view(): string
    {
        $str = 'Cor de fundo ' . $this->theme->getPrimaryColor() . PHP_EOL;
        $str .= 'Cor de TEXTO ' . $this->theme->getTextColor() . PHP_EOL;
        $str .= 'FONTE ' . $this->theme->getMainFont() . PHP_EOL;
        return $str;
    }
}
