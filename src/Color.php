<?php

namespace Cars;

class Color
{
    /**
     * @var string
     */
    protected $color;

    /**
     * Color constructor.
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
    }
}