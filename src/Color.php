<?php

namespace Cars;

use Exception;

class Color
{
    /**
     * @var string
     */
    protected $color;

    /**
     * Color constructor.
     * @param string $color
     * @throws Exception
     */
    public function __construct(string $color)
    {
        $this->validateColor($color);

        $this->color = $color;
    }

    public function getInfo()
    {
        $info = new \stdClass();

        $info->color= $this->color;

        return $info;
    }

    /**
     * Validates input color
     *
     * @param string $color
     * @throws Exception
     */
    protected function validateColor(string $color)
    {
        $pattern = '/#([a-f]|[A-F]|[0-9]){3}(([a-f]|[A-F]|[0-9]){3})?\b/';

        if ( 0 === preg_match($pattern, $color)) {
            throw new Exception('Color should be in hex code format, like #ff11ff');
        }
    }


}