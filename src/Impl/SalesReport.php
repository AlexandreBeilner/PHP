<?php

namespace App\Impl;

use App\ExportableInterface;
use App\LoggableInterface;

class SalesReport implements ExportableInterface, LoggableInterface
{
    public function exportCsv(): string
    {
        return 'calor exportado csv';
    }

    public function generateLogEntry(): string
    {
        return 'gerou log';
    }
}
