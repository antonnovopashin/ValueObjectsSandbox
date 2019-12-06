<?php

namespace Cars;

require './vendor/autoload.php';

//todo implement validation in every value object

$myNextCarModel = new Model('audi', 'a5', 2);
$myNextCarTransmission = new Transmission('automatic');
$myNextCarYear = new Year(2019);
$myNextCarEngineVolume = new EngineVolume('2000', 'cc');
$myNextCarEngine = new Engine($myNextCarEngineVolume, '250');
$myNextCarColor = new Color('#fffff');

$myNextCar = Car::create($myNextCarModel, $myNextCarTransmission, $myNextCarYear, $myNextCarEngine, $myNextCarColor);

$myNextCarNewEngineVolume = new EngineVolume('2100', 'cc');
$rebuiltEngine = $myNextCarEngine->changeVolume($myNextCarNewEngineVolume, 270);

try {
    $increasedEngine = $myNextCarEngine->increaseVolume(50, 'cc');
    $myNextCar->swapEngine($increasedEngine);

      echo json_encode($myNextCar->getInfo());
} catch (\Exception $exception) {
    var_dump($exception->getMessage());
}
