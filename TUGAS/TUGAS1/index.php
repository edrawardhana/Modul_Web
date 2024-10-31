<?php

require_once 'car.php';
require_once 'motorcycle.php';

use VehicleManagement\Car;
use VehicleManagement\Motorcycle;

// Contoh penggunaan
$car = new Car("Toyota", "Camry", 4);
echo $car->getInfo() . PHP_EOL;
echo "Fuel Efficiency: " . $car->calculateFuelEfficiency(500, 25) . " km/l" . PHP_EOL;

$motorcycle = new Motorcycle("Yamaha", "R15", "Sport");
echo $motorcycle->getInfo() . PHP_EOL;

?>