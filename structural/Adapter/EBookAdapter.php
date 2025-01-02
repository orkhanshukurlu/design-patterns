<?php

declare(strict_types=1);

namespace Structural\Adapter;

class EBookAdapter implements Book
{
    public function __construct(protected EBook $eBook)
    {
    }

    public function open(): void
    {
        $this->eBook->unlock();
    }

    public function turnPage(): void
    {
        $this->eBook->pressNext();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}