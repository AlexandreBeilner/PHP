<?php

declare(strict_types=1);

namespace App\Impl;

use DateTime;

class Order
{

    /**
     * @var array<int, OrderItem> $items
     */
    private array $items = [];
    private DateTime $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function addItems(Product $product, int $quantity): Order
    {
        $this->items[] = new OrderItem($product, $quantity);
        return $this;
    }

    public function getTotal(): float
    {
        return array_reduce($this->items, static function (float $total, OrderItem $item): float {
            return $total + $item->getTotal();
        }, 0);
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getItems(): array
    {
        return $this->items;
    }
}

