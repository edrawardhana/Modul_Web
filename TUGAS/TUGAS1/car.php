<?php

namespace VehicleManagement;

require_once 'Vehicle.php'; // Memastikan Vehicle.php dimuat

class Car extends Vehicle {
    use FuelEfficiency;

    private $numberOfDoors;

    public function __construct($brand, $model, $numberOfDoors) {
        parent::__construct($brand, $model);
        $this->numberOfDoors = $numberOfDoors;
    }

    public function getInfo() {
        return "Car - " . $this->__toString() . ", Doors: $this->numberOfDoors";
    }
}

?>