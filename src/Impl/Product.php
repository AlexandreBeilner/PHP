<?php

declare(strict_types=1);

namespace App\Impl;

use App\ProductInterface;

final class Product implements ProductInterface
{
    private string $name;
    private float $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
