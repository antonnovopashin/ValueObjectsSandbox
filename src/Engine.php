<?php

namespace Cars;

use Exception;

class Engine
{
    /**
     * @var EngineVolume
     */
    protected $volume;

    /**
     * @var int
     */
    protected $power;

    public function __construct(EngineVolume $volume, int $power) //todo make power value object too, with diferent units (horsepowers and kwt)
    {
        $this->volume = $volume;
        $this->power = $power;
    }

    /**
     * @param EngineVolume $newVolume
     * @param $newPower
     * @return static
     *
     * @deprecated
     */
    public static function changeVolume(EngineVolume $newVolume, $newPower)
    {
        return new static($newVolume, $newPower);
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

        return new static($newVolume, $newPower);
    }

    public function getInfo()
    {
        $info = new \stdClass();

        $info->volume= $this->volume->getInfo();
        $info->power= $this->power;

        return $info;
    }
}