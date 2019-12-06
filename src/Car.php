<?php

namespace Cars;

/**
 * Class Car Entity
 */
class Car
{
    /**
     * @var string UUID
     */
    protected $vin;

    /**
     * @var Model
     */
    protected $model;

    /**
     * @var Year
     */
    protected $year;

    /**
     * @var Engine
     */
    protected $engine;

    /**
     * @var Transmission
     */
    protected $transmission;

    /**
     * @var Color
     */
    protected $color;

    /**
     * Car constructor.
     * @param Model $model
     * @param Transmission $transmission
     * @param Year $year
     * @param Engine $engine
     * @param Color $color
     */
    public function __construct(Model $model, Transmission $transmission, Year $year, Engine $engine, Color $color)
    {
        $this->vin = uniqid();
        $this->model = $model;
        $this->transmission = $transmission;
        $this->year = $year;
        $this->engine = $engine;
        $this->color = $color;
    }

    public function getInfo()
    {
        $info = new \stdClass();

        $info->vin= $this->vin;
        $info->model= $this->model->getInfo();
        $info->transmission= $this->transmission->getInfo();
        $info->engine= $this->engine->getInfo();

        return $info;
    }

    /**
     * @param Model $model
     * @param Transmission $transmission
     * @param Year $year
     * @param Engine $engine
     * @param Color $color
     * @return static
     */
    public static function create(Model $model, Transmission $transmission, Year $year, Engine $engine, Color $color)
    {
        return new static($model, $transmission, $year, $engine, $color);
    }

    public function swapEngine(Engine $newEngine)
    {
        $this->engine = $newEngine;
    }

    public function repaint(Color $newColor)
    {
        $this->color = $newColor;
    }
}