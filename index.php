<?php

require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'HighWay.php';
require_once 'Skateboard.php';


// $velo = new Bicycle('Silver', 1);
// $car = new Car('green', 4, 'electric');
// $skate = new Skateboard('Black', 1);

// echo $car->forward();
// var_dump($car);
// var_dump(Car::ALLOWED_ENERGIES);

// $myTruck = new Truck('blue', 'fuel', 50, 3);

// $myTruck->forward();
// $myTruck->getCurrentSpeed();
// $myTruck->setNbWheels(8);
// $myTruck->setLoading(40);
// echo $myTruck->loadingLevel();
// var_dump($myTruck);
// $myTruck->brake();
// var_dump($myTruck);

// $yourTruck = new Truck('golden', 'electric', 100, 1);

// $yourTruck->forward();
// $yourTruck->getCurrentSpeed();
// $yourTruck->setNbWheels(8);
// $yourTruck->setLoading(101);
// var_dump($yourTruck);
// echo $yourTruck->loadingLevel();



// $A40 = new MotorWay(4, 130, 'Aviva');
// $WayFooting = new PedestrianWay(1, 10);
// $street = new ResidentialWay(2, 50);

// echo $A40->addVehicles($myTruck);
// echo $A40->addVehicles($velo);
// echo $A40->addVehicles($car);
// echo $A40->addVehicles($skate);
// echo $WayFooting->addVehicles($car);
// var_dump($A40, $WayFooting, $street, $skate, $Exception);
$car1 = new Car('red', 4, 'Gasol');
echo ($car1->start());

var_dump($car1);



