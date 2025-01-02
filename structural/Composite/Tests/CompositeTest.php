<?php

declare(strict_types=1);

namespace Structural\Composite\Tests;

use PHPUnit\Framework\TestCase;
use Structural\Composite\Form;
use Structural\Composite\InputElement;
use Structural\Composite\TextElement;

class CompositeTest extends TestCase
{
    public function testRender(): void
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}