<?php

namespace Cars;

require './vendor/autoload.php';

//todo implement validation in every value object

header('Content-Type: application/json;charset=utf-8;');
$myNextCarModel = new Model('audi', 'a5', 2);

$myNextCarTransmission = null;

try {
    $myNextCarTransmission = new Transmission('cvt');
} catch (\Exception $exception) {
    var_dump($exception->getMessage());
    die;
}

$myNextCarYear = null;

try {
    $myNextCarYear = new Year(2019);
} catch (\Exception $exception) {
    var_dump($exception->getMessage());
    die;
}

$myNextCarEngineVolume = new EngineVolume('2000', 'cc');


$myNextCarEngine = null;

try {
    $myNextCarEngine = new Engine($myNextCarEngineVolume, 'gasoline', '250');

} catch (\Exception $exception) {
    var_dump($exception->getMessage());
    die;
}

$myNextCarColor = null;

try {
    $myNextCarColor = new Color('#ff11ff');
} catch (\Exception $exception) {
    var_dump($exception->getMessage());
    die;
}

$myNextCar = Car::create($myNextCarModel, $myNextCarTransmission, $myNextCarYear, $myNextCarEngine, $myNextCarColor);

try {
    $increasedEngine = $myNextCarEngine->increaseVolume(50, 'cc');
    $myNextCar->swapEngine($increasedEngine);

    echo json_encode($myNextCar->getInfo());
} catch (\Exception $exception) {
    var_dump($exception->getMessage());
}
