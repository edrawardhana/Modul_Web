<?php

namespace VehicleManagement;

require_once 'Vehicle.php'; // Memastikan Vehicle.php dimuat

class Motorcycle extends Vehicle {
    private $type;

    public function __construct($brand, $model, $type) {
        parent::__construct($brand, $model);
        $this->type = $type;
    }

    public function getInfo() {
        return "Motorcycle - " . $this->__toString() . ", Type: $this->type";
    }
}

?>