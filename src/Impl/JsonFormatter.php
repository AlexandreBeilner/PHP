<?php

declare(strict_types=1);

namespace App\Impl;

final class JsonFormatter extends AbstractFormatter
{
    public function format(array $data)
    {
        $this->validate($data);
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
