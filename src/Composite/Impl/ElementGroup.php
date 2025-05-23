<?php

declare(strict_types=1);

namespace App\Composite\Impl;

use App\Composite\GraphicElementInterface;

final class ElementGroup implements GraphicElementInterface
{
    /**
     * @var array<int, GraphicElementInterface> $elements
     */
    private array $elements = [];
    public function draw(): string {
        $str = 'PASSANDO PELO DRAW' . PHP_EOL;
        foreach ($this->elements as $element) {
            $str .= $element->draw();
        }

        return $str;
    }

    public function addElement(GraphicElementInterface $element): void
    {
        $this->elements[] = $element;
    }

    public function removeElement(GraphicElementInterface $element): void
    {
        $this->elements = array_filter(
            $this->elements,
            static fn(GraphicElementInterface $e):bool => $element !== $e
        );
    }
}
