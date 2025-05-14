<?php

declare(strict_types=1);

namespace App\StaticFactoryMethod;

final class DateRange
{
    private \DateTimeImmutable $start;
    private \DateTimeImmutable $end;

    protected function __construct(\DateTimeImmutable $start, \DateTimeImmutable $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public static function fromString(string $start, string $end)
    {
        return new self(new \DateTimeImmutable($start), new \DateTimeImmutable($end)    );
    }

    public function contains(\DateTimeImmutable $date): bool
    {
        return $date >= $this->start && $date <= $this->end;
    }



}
