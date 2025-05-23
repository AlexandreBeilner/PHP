<?php

declare(strict_types=1);

namespace App\Facade;

final class AudioVideoMixer
{
    public function mix(string $video, string $audio): string
    {
        return '<format_audio_video_' . $video .'_' . $audio . '>' . PHP_EOL;
    }
}
