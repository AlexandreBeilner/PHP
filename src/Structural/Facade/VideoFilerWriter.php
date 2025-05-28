<?php

declare(strict_types=1);

namespace App\Structural\Facade;

final class VideoFilerWriter
{
    private string $destination;

    public function __construct(string $destination)
    {
        $this->destination = $destination;
    }

    public function writeChunk(string $chunk): string
    {
        return 'Escrecendo o chunk ' . $chunk . PHP_EOL;
    }
}
