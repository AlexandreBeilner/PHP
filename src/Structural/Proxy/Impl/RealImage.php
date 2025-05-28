<?php

declare(strict_types=1);

namespace App\Structural\Proxy\Impl;

use App\Structural\Proxy\ImageInterface;

final class RealImage implements ImageInterface
{
    private string $fileName;
    private string $content;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->content = "CONTEUDO CONTIDO NO ARQUIVO " . $fileName;
        sleep(1);
    }

    public function display(): void
    {
        echo "DISPLAY DA IMAGEM " . $this->fileName . " COM COMTEUDO " . $this->content . PHP_EOL;
    }
}
