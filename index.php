<?php

require_once __DIR__ . '/vendor/autoload.php';

use SOLID\OCP\Driver;
use SOLID\OCP\MoveOverWaves;
use SOLID\OCP\Route;
use SOLID\OCP\Ship;
use SOLID\OCP\Trip;

$ahmed = new Driver('Ahmed', 25, 'SA23456B', 'Egypt');

$route80 = new Route('Cairo', 'Alexandria', 302);
$route90 = new Route('Alexandria', 'Marsa Matruh', 435);

$vehicle = new Ship();
$vehicle->setDriver($ahmed);
$vehicle->setColor('blue');
$vehicle->setMaximumSpeed(135);
$vehicle->addRoute($route80);
$vehicle->addRoute($route90);
$vehicle->setMoveable(new MoveOverWaves());

$trip = new Trip($vehicle, 'R210', 250.4, 120);
echo $trip->move();
