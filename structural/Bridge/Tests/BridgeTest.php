<?php

declare(strict_types=1);

namespace Structural\Bridge\Tests;

use PHPUnit\Framework\TestCase;
use Structural\Bridge\HelloWorldService;
use Structural\Bridge\HtmlFormatter;
use Structural\Bridge\PlainTextFormatter;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter(): void
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter(): void
    {
        $service = new HelloWorldService(new HtmlFormatter());

        $this->assertSame('<p>Hello World</p>', $service->get());
    }
}