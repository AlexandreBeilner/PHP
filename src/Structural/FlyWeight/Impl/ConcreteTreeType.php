<?php

namespace App\Structural\FlyWeight\Impl;

use App\Structural\FlyWeight\TreeTypeInterface;

final class ConcreteTreeType implements TreeTypeInterface
{
    private string $name;
    private string $color;
    private string $texture;

    public function __construct(string $name, string $color, string $texture)
    {
        $this->name = $name;
        $this->color = $color;
        $this->texture = $texture;
        echo "Criando arvore com nome: " . $this->name . " color: " . $this->color . " texture: " . $this->texture . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getTexture(): string
    {
        return $this->texture;
    }
}
