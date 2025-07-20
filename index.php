<?php

require_once __DIR__ . '/vendor/autoload.php';

use SOLID\SRP\Bus;
use SOLID\SRP\Driver;
use SOLID\SRP\Route;

$ahmed = new Driver('Ahmed', 25, 'SA23456B', 'Egypt');

$route80 = new Route('Cairo', 'Alexandria', 302);
$route90 = new Route('Alexandria', 'Marsa Matruh', 435);

$bus = new Bus(200);
$bus->setDriver($ahmed);
$bus->setColor('blue');
$bus->setDoors(2);
$bus->setMaximumSpeed(135);
$bus->setNumberOfPassengers(62);
$bus->addRoute($route80);
$bus->addRoute($route90);
echo $bus->move();

//echo '<pre>';
//var_dump($bus);
//echo '</pre>';
