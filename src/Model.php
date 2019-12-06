<?php

namespace Cars;


class Model
{
    protected $brand;
    protected $modelName;
    protected $generation;

    public function __construct(string $brand,  $modelName,  $generation) {
        $this->brand = $brand;
        $this->modelName = $modelName;
        $this->generation = $generation;
    }

}