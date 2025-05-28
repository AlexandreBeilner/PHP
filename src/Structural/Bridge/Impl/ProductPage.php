<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Impl;

use App\Structural\Bridge\ThemeInterface;

final class ProductPage extends AbstractPage
{
    private string $productId;
    private string $productName;

    public function __construct(ThemeInterface $theme, string $productId, string $productName)
    {
        parent::__construct($theme);
        $this->productId = $productId;
        $this->productName = $productName;
    }

    public function view(): string
    {
        $str = 'Cor de fundo:' . $this->theme->getPrimaryColor() . PHP_EOL;
        $str .= 'Fonte da página' . $this->theme->getMainFont() . PHP_EOL;
        $str .= 'Cor da fonte:' . $this->theme->getTextColor() . PHP_EOL;
        $str .= 'Product Page' . PHP_EOL;
        $str .= 'Product ID: ' . $this->productId . PHP_EOL;
        $str .= 'Product Name: ' . $this->productName . PHP_EOL;
        return $str;
    }
}
