<?php

declare(strict_types=1);

namespace App\Prototype;

final class ShapeRegister
{
    private array $shapes = [];

    public function addShape(string $name, AbstractShape $shape): self
    {
        $this->shapes[$name] = $shape;
        return $this;
    }

    public function getShape(string $name): AbstractShape
    {
        return clone $this->shapes[$name];
    }

    /**
     * @return array
     */
    public function getShapes(): array
    {
        return $this->shapes;
    }
}
