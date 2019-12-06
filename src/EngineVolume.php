<?php

namespace Cars;


class EngineVolume
{
    protected $quantity;

    protected $unitOfMeasurement;

    public function __construct($quantity, $unitOfMeasurement) {
        $this->quantity = $quantity;
        $this->unitOfMeasurement = $unitOfMeasurement;
    }
}