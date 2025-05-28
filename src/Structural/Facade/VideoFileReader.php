<?php

namespace App\Structural\Facade;

class VideoFileReader
{
    private string $fileName;

    public function __construct(string $fileName) {
        $this->fileName = $fileName;
        echo 'LENDO O ARQUIVO ' . $this->fileName . PHP_EOL;
    }

    public function readAudioChunk(): string
    {
        return '<audio_chunk-1>' . PHP_EOL;
    }

    public function readVideoChunk(): string
    {
        return '<video_chunck_1>' . PHP_EOL;
    }
}
