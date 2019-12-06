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
     * @param string $vin
     * @param Model $model
     * @param Transmission $transmission
     * @param Year $year
     * @param Engine $engine
     * @param Color $color
     */
    public function __construct(string $vin, Model $model, Transmission $transmission, Year $year, Engine $engine, Color $color)
    {
        $this->vin = $vin;
        $this->model = $model;
        $this->transmission = $transmission;
        $this->year = $year;
        $this->engine = $engine;
        $this->color = $color;
    }

    /**
     * @param string $vin
     * @param Model $model
     * @param Transmission $transmission
     * @param Year $year
     * @param Engine $engine
     * @param Color $color
     * @return static
     */
    public static function create(string $vin, Model $model, Transmission $transmission, Year $year, Engine $engine, Color $color)
    {
        return new static($vin, $model, $transmission, $year, $engine, $color);
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