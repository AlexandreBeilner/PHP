<?php

declare (strict_types=1);

namespace App\Impl;

final class Configuration {
    private array $configData;

    public function __construct(array $configData)
    {
        $this->configData = $configData;
        echo "Config loaded!";
    }

    public function __get(string $name)
    {
        if (isset($this->configData[$name])) {
            return $this->configData[$name];
        }
        throw new \InvalidArgumentException("Property '" . $name . "' does not exist!");
    }
}
