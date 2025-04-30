<?php

declare(strict_types=1);

namespace App\Impl;

final class User
{
    private string $name;
    private string $email;
    private string $phone;

    public function __construct($name, $email, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}
