<?php
// //public
// class Car {
//     public $make;

//     public function setMake($make) {
//         $this->make = $make;
//     }
// }

// $myCar = new Car();
// $myCar->setMake("Toyota");
// echo $myCar->make; // Output: Toyota


// //private 
// class Car {
//     private $model;

//     public function setModel($model) {
//         $this->model = $model;
//     }

//     public function getModel() {
//         return $this->model;
//     }
// }

// $myCar = new Car();
// $myCar->setModel("Camry");
// echo $myCar->getModel(); // Output: Camry
// // echo $myCar->model; // This would cause an error



// //protected 


// class Car {
//     protected $year;

//     public function setYear($year) {
//         $this->year = $year;
//     }
// }

// class ElectricCar extends Car {
//     public function displayYear() {
//         return $this->year; // Accessible here
//     }
// }

// $myElectricCar = new ElectricCar();
// $myElectricCar->setYear(2021);
// echo $myElectricCar->displayYear(); // Output: 2021
// // echo $myElectricCar->year; // This would cause an error

?>
