<?php

namespace Cars;

require './vendor/autoload.php';


$myNextCarModel = new Model('audi', 'a5', '5th');
$myNextCarTransmission = new Transmission('automatic');
$myNextCarYear = new Year(2019);
$myNextCarEngineVolume = new EngineVolume('2000', 'cc');
$myNextCarEngine = new Engine($myNextCarEngineVolume, '250');
$myNextCarColor = new Color('#fffff');

$myNextCar = Car::create('afdawed', $myNextCarModel, $myNextCarTransmission, $myNextCarYear, $myNextCarEngine, $myNextCarColor);

$myNextCarNewEngineVolume = new EngineVolume('2100', 'cc');
$increasedEngine = $myNextCarEngine->increaseVolume($myNextCarNewEngineVolume, 270);

$myNextCar->swapEngine($increasedEngine);

var_dump($myNextCar);