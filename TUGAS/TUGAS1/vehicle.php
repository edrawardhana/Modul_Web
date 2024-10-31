<?php

namespace VehicleManagement;

// Trait untuk menghitung efisiensi bahan bakar
trait FuelEfficiency {
    public function calculateFuelEfficiency($distance, $fuelUsed) {
        return $distance / $fuelUsed; // km per liter
    }
}

// Abstract Class untuk kendaraan
abstract class Vehicle {
    protected $brand;
    protected $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Abstract method untuk mendapatkan informasi kendaraan
    abstract public function getInfo();

    // Magic method untuk mengubah objek menjadi string
    public function __toString() {
        return "Brand: $this->brand, Model: $this->model";
    }
}

?>