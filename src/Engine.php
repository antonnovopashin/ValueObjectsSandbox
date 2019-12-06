<?php

namespace Cars;

use Exception;

class Engine
{
    const ELECTRIC_TYPE = 'electric';
    const DIESEL_TYPE = 'diesel';
    const GASOLINE_TYPE = 'gasoline';
    const HYBRID = 'hybrid';

    const VALID_TYPES = [
        self::ELECTRIC_TYPE,
        self::DIESEL_TYPE,
        self::GASOLINE_TYPE,
        self::HYBRID,
    ];

    /**
     * @var EngineVolume
     */
    protected $volume;

    protected $type;

    /**
     * @var int
     */
    protected $power;

    /**
     * Engine constructor.
     * @param EngineVolume $volume
     * @param string $type
     * @param int $power
     * @throws Exception
     */
    public function __construct(EngineVolume $volume, string $type, int $power) //todo make power value object too, with diferent units (horsepowers and kwt)
    {

        $this->validateEngineType($type);
        $this->volume = $volume;
        $this->type = $type;
        $this->power = $power;
    }



    /**
     * Calculates new volume of new engine and returns new Engine Value Object
     *
     * @param $byHowMuch
     * @param $byHowMuchOfWhat
     * @return Engine
     * @throws Exception
     */
    public function increaseVolume($byHowMuch, $byHowMuchOfWhat)
    {
        if (self::ELECTRIC_TYPE === $this->type) {
            throw new Exception('You cant increase volume of electric motor');
        }

        $currentEngineVolumeQuantity = $this->volume->getVolumeInCC();
        $newEngineVolumeQuantity = 0;

        if ($byHowMuchOfWhat == 'cc') {
            $newEngineVolumeQuantity = $currentEngineVolumeQuantity + $byHowMuch;
        } elseif ($byHowMuchOfWhat == 'litre') {
            $newEngineVolumeQuantity = $currentEngineVolumeQuantity + $byHowMuch * 1000;
        } else {
            throw new Exception('invalid unit of measurement, use cc or litre');
        }

        $newVolume = new EngineVolume($newEngineVolumeQuantity, $byHowMuchOfWhat);

        $newPower = $this->power * $newEngineVolumeQuantity / $currentEngineVolumeQuantity;

        return new static($newVolume, $this->type, $newPower);
    }

    public function getInfo()
    {
        $info = new \stdClass();

        $info->volume= $this->volume->getInfo();
        $info->power= $this->power;

        return $info;
    }

    /**
     * Validates input year
     *
     * @param string $type
     * @throws Exception
     */
    protected function validateEngineType(string $type)
    {

        if (!is_string($type) || !in_array($type, self::VALID_TYPES)) {
            $typesAsString = implode(", ",self::VALID_TYPES);

            throw new Exception('Engine type should be either ' . $typesAsString);
        }
    }
}