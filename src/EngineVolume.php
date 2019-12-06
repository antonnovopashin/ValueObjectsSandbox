<?php

namespace Cars;

use Exception;

class EngineVolume
{
    /**
     * @var int
     */
    protected $quantityInCC;

    /**
     * @var string
     */
    protected $unitOfMeasurement;

    /**
     * EngineVolume constructor.
     * @param int $quantity
     * @param string $unitOfMeasurement
     * @throws Exception
     */
    public function __construct(int $quantity, string $unitOfMeasurement)
    {
        if ($unitOfMeasurement == 'cc') {
            $this->quantityInCC = $quantity;
        } elseif ($unitOfMeasurement == 'litre') {
            $this->quantityInCC = $quantity * 1000;

        } else {
            throw new Exception('invalid unit of measurement, use cc or litre');
        }
        $this->quantityInCC = $quantity;
        $this->unitOfMeasurement = $unitOfMeasurement;
    }

    /**
     * @return int
     */
    public function getVolumeInCC()
    {
        return $this->quantityInCC;
    }

    /**
     * @return float
     */
    public function getVolumeInLitres()
    {
        return $this->quantityInCC / 1000;

    }

    public function getInfo()
    {
        $info = new \stdClass();

        $info->quantityInCC= $this->quantityInCC;
        $info->unitOfMeasurement= $this->unitOfMeasurement;

        return $info;
    }
}