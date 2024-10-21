<?php
//Step 1: Define a Class
class Car {
    // Properties
    public $make;
    public $model;
    private $year; // private property

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to get the year
    public function getYear() {
        return $this->year;
    }

    // Method to display car information
    public function displayInfo() {
        echo "Car: $this->make $this->model, Year: $this->year";
    }
}

//Step 2: Create an Object

$myCar = new Car("Toyota", "Camry", 2020);
//Step 3: Access Properties and Methods

// Accessing public properties
echo $myCar->make; // Output: Toyota

// Using methods
echo $myCar->getYear(); // Output: 2020
$myCar->displayInfo(); // Output: Car: Toyota Camry, Year: 2020

//Step 4: Inheritance
class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year); // Call the parent constructor
        $this->batteryCapacity = $batteryCapacity;
    }

    public function displayInfo() {
        parent::displayInfo(); // Call the parent method
        echo ", Battery Capacity: $this->batteryCapacity kWh";
    }
}

$myElectricCar = new ElectricCar("Tesla", "Model S", 2021, 100);
$myElectricCar->displayInfo(); // Output: Car: Tesla Model S, Year: 2021, Battery Capacity: 100 kWh


//Step 5: Polymorphism
class HybridCar extends Car {
    public function displayInfo() {
        echo "This is a hybrid car: $this->make $this->model";
    }
}

$myHybridCar = new HybridCar("Toyota", "Prius", 2022);
$myHybridCar->displayInfo(); // Output: This is a hybrid car: Toyota Prius



// Step 6: Access Modifiers
// In PHP, you can use different access modifiers:

// public: Accessible from anywhere.
// private: Accessible only within the class itself.
// protected: Accessible within the class and by derived classes.



class Animal {
    protected $name; // Can be accessed in child classes

    public function __construct($name) {
        $this->name = $name;
    }

    public function display() {
        echo "Animal: $this->name";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "$this->name says Woof!";
    }
}

$dog = new Dog("Buddy");
$dog->display(); // Output: Animal: Buddy
$dog->bark();    // Output: Buddy says Woof!

//Step 7: Interfaces
interface Vehicle {
    public function start();
    public function stop();
}

class Bike implements Vehicle {
    public function start() {
        echo "Bike starting...";
    }

    public function stop() {
        echo "Bike stopping...";
    }
}

$bike = new Bike();
$bike->start(); // Output: Bike starting...
// Step 8: Abstract Classes


abstract class Shape {
    abstract public function area(); // Must be implemented by child classes

    public function display() {
        echo "This is a shape.";
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

$circle = new Circle(5);
echo $circle->area(); // Output: 78.539816339744

?>
