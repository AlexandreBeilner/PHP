<?php

declare(strict_types=1);

namespace App\Builder;

interface SQLQueryBuilderInterface
{
    public function build(): string;

    public function select(string $table, array $fields): self;

    public function where(string $condition): self;

    public function limit(int $limit): self;
}
