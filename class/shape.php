<?php

class Shape
{
    private string $color;
    private int $x;
    private int $y;

    public function __construct(string $color, int $x, int $y)
    {
        $this->color = $color;
        $this->x = $x;
        $this->y = $y;
    }

    public function render(): string
    {
        $color = htmlspecialchars($this->color, ENT_QUOTES, 'UTF-8');

        return sprintf(
            '<div style="position: absolute; left: %dpx; top: %dpx; width: 50px; height: 50px; background-color: %s;" aria-hidden="true"></div>',
            $this->x,
            $this->y,
            $color
        );
    }
}
