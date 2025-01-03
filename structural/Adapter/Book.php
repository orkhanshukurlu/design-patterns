<?php

declare(strict_types=1);

namespace Structural\Adapter;

interface Book
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}