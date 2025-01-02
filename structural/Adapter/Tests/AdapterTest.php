<?php

declare(strict_types=1);

namespace Structural\Adapter\Tests;

use PHPUnit\Framework\TestCase;
use Structural\Adapter\EBookAdapter;
use Structural\Adapter\Kindle;
use Structural\Adapter\PaperBook;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook(): void
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook(): void
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }
}