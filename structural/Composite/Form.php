<?php

declare(strict_types=1);

namespace Structural\Composite;

class Form implements Renderable
{
    private array $elements;

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        return $formCode . '</form>';
    }

    public function addElement(Renderable $element): void
    {
        $this->elements[] = $element;
    }
}