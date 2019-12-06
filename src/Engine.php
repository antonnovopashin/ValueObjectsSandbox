<?php

namespace Cars;

class Engine
{
    protected $volume;

    protected $power;

    public function __construct(EngineVolume $volume, $power)
    {
        $this->volume = $volume;
        $this->power = $power;
    }

    public static function increaseVolume(EngineVolume $newVolume, $newPower)
    {
        return new static($newVolume, $newPower);
    }
}