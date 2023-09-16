<?php
// Antarmuka
interface Drivable {
    public function start();
    public function stop();
}

// Kelas abstrak
abstract class Vehicle {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function accelerate();
    abstract public function brake();
}

// Kendaraan konkret
class Car extends Vehicle implements Drivable {
    public function accelerate() {
        return "Car {$this->name} is accelerating.";
    }

    public function brake() {
        return "Car {$this->name} is braking.";
    }

    public function start() {
        return "Car {$this->name} is starting.";
    }

    public function stop() {
        return "Car {$this->name} is stopping.";
    }
}

class Motorcycle extends Vehicle implements Drivable {
    public function accelerate() {
        return "Motorcycle {$this->name} is accelerating.";
    }

    public function brake() {
        return "Motorcycle {$this->name} is braking.";
    }

    public function start() {
        return "Motorcycle {$this->name} is starting.";
    }

    public function stop() {
        return "Motorcycle {$this->name} is stopping.";
    }
}

class Bicycle implements Drivable {
    public function start() {
        return "Bicycle is starting.";
    }

    public function stop() {
        return "Bicycle is stopping.";
    }

    public function accelerate() {
        return "Bicycle is accelerating.";
    }

    public function brake() {
        return "Bicycle is braking.";
    }
}


// Menggunakan Polymorphism
$vehicles = [new Car("Toyota"), new Motorcycle("Harley"), new Bicycle()];

foreach ($vehicles as $vehicle) {
    echo $vehicle->start() . "\n";
    echo $vehicle->accelerate() . "\n";
    echo $vehicle->brake() . "\n";
    echo $vehicle->stop() . "\n";
    echo "\n";
}
?>
