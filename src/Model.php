<?php

namespace Cars;


class Model
{
    /**
     * @var string
     */
    protected $brand;

    /**
     * @var string
     */
    protected $modelName;

    /**
     * @var int
     */
    protected $generation;

    /**
     * Model constructor.
     *
     * @param string $brand
     * @param string $modelName
     * @param int $generation
     */
    public function __construct(string $brand, string $modelName, int $generation) {
        $this->brand = $brand;
        $this->modelName = $modelName;
        $this->generation = $generation;
    }

    public function getInfo()
    {
        $info = new \stdClass();

        $info->brand= $this->brand;
        $info->modelName= $this->modelName;
        $info->generation= $this->generation;

        return $info;
    }
}