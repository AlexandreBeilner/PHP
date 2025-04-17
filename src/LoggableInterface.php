<?php

namespace App;

interface LoggableInterface
{
    public function generateLogEntry(): string;
}
