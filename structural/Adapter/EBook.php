<?php

declare(strict_types=1);

namespace Structural\Adapter;

interface EBook
{
    public function unlock();

    public function pressNext();

    public function getPage(): array;
}