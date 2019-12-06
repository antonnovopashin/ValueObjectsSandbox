<?php

namespace Cars;

class Transmission
{
    /**
     * @var string
     */
    protected $type;

    /**
     * Transmission constructor.
     * @param string $type
     */
    public function __construct(string $type) {
        $this->type = $type;
    }

    public function getInfo()
    {
        $info = new \stdClass();

        $info->type= $this->type;

        return $info;
    }
}