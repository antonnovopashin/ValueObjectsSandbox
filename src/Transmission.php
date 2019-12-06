<?php

namespace Cars;

class Transmission
{
    protected $type;

    public function __construct($type) {
        $this->type = $type;
    }
}