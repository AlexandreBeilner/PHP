<?php

namespace App;

interface ExportableInterface
{
    public function exportCsv(): string;
}
