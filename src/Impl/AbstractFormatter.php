<?php

namespace App\Impl;

use App\FormatterInterface;

abstract class AbstractFormatter implements FormatterInterface {
    protected function validate($data)
    {
        $keysValidate = ['id', 'name', 'course'];
        array_map(static function ($item) use ($data) {
            if (! array_key_exists($item, $data)) {
                throw new \InvalidArgumentException('Deu erro');
            }
        }, $keysValidate);
    }
}
