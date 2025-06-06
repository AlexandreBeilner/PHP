<?php

declare(strict_types=1);

namespace App\Structural\Facade;

final class AudioCodec
{
    public function compressAudio(string $audio): string
    {
        return '<audio_compressed_' . $audio . '>' . PHP_EOL;
    }
}
