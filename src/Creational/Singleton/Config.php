<?php

declare(strict_types=1);

namespace App\Creational\Singleton;

class Config
{
    private static ?Config $instance = null;

    private array $settings = [];

    private function __construct() {
        $this->settings = [
            'db_host' => 'localhost'
        ];
    }

    /**
     * @return Config|null
     */
    public static function getInstance(): Config
    {
        if (null === self::$instance) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    /**
     * @return array
     */
    public function getSettings(): array
    {
        return $this->settings;
    }

    private function __clone()
    {}

    private function __wakeup()
    {}
}
