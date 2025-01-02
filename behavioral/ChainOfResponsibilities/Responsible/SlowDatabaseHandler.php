<?php

declare(strict_types=1);

namespace Behavioral\ChainOfResponsibilities\Responsible;

use Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler
{
    protected function processing(RequestInterface $request): ?string
    {
        return 'Hello World!';
    }
}