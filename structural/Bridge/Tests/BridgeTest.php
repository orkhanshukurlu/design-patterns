<?php

declare(strict_types=1);

namespace Structural\Bridge\Tests;

use Structural\Bridge\HelloWorldService;
use Structural\Bridge\HtmlFormatter;
use Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());

        $this->assertSame('<p>Hello World</p>', $service->get());
    }
}
