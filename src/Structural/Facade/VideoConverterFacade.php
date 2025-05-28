<?php

declare(strict_types=1);

namespace App\Structural\Facade;

final class VideoConverterFacade
{
    public function convertVideo(string $sourceFile, string $destinationFormat): string
    {
        $reader = new VideoFileReader($sourceFile);
        $audioChunk = $reader->readAudioChunk();
        $videoChunk = $reader->readVideoChunk();
        $audioCodec = new AudioCodec();
        $videoCodec = new VideoCodec();

        $compressedAudio = $audioCodec->compressAudio($audioChunk);
        $compressedVideo = $videoCodec->compressVideo($videoChunk);

        $mix = new AudioVideoMixer();
        $mixed = $mix->mix($compressedAudio, $compressedVideo);

        $writer = new VideoFilerWriter($destinationFormat);
        $writer->writeChunk($mixed);
        return 'file.wmv';
    }
}
