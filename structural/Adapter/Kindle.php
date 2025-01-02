<?php

declare(strict_types=1);

namespace Structural\Adapter;

class Kindle implements EBook
{
    private int $page = 1;

    private int $totalPages = 100;

    public function pressNext(): void
    {
        $this->page++;
    }

    public function unlock()
    {
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}