<?php

declare(strict_types=1);

namespace App\Structural\Proxy\Impl;

use App\Structural\Proxy\ImageInterface;

final class ImageProxy implements ImageInterface
{
    private string $fileName;
    private ?ImageInterface $image = null;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function display(): void
    {
        if ($this->image === null) {
            $this->image = new RealImage($this->fileName);
        }
        $this->image->display();
    }
}
