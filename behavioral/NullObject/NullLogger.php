<?php

declare(strict_types=1);

namespace Behavioral\NullObject;

class NullLogger implements Logger
{
    public function log(string $str)
    {
    }
}