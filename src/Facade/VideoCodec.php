<?php

declare(strict_types=1);

namespace App\Facade;

final class VideoCodec
{
    public function compressVideo(string $videoChunk): string
    {
        return '<video_compressed_' . $videoChunk . '>' . PHP_EOL;
    }
}
