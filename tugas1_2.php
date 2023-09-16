<?php
abstract class Person {
    abstract public function greet();
}

class English extends Person {
    public function greet() {
        return "Hello!";
    }
}

class German extends Person {
    public function greet() {
        return "Hallo!";
    }
}

class French extends Person {
    public function greet() {
        return "Bonjour!";
    }
}

// Menggunakan Polymorphism
$people = [new English(), new German(), new French()];

foreach ($people as $person) {
    echo $person->greet() . "\n";
}
?>
