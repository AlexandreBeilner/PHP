<?php

declare(strict_types=1);

namespace App\Impl;

final class ShoppingCart
{
    /**
     * @var array{product: Product, quantity: int} $items
     */
    private array $items = [];

    public function addItem(Product $product, int $quantity)
    {
        $this->items[] = ['product' => $product, 'quantity' => $quantity];
    }

    public function removeItem(Product $product)
    {
        $this->items = array_filter($this->items, function ($item) use ($product) {
            return $product !== $item['product'];
        });
    }

    public function getTotal(): float
    {
        return array_reduce($this->items, function (float $total, array $item): float {
            return $total + ($item['product']->getPrice() * $item['quantity']);
        }, 0);
    }
}
