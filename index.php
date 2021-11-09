<?php

//BICYCLE

require_once 'Bicycle.php';
$bike = new Bicycle("blue", 1);
//var_dump($bike);

$bike->setCurrentSpeed(0);
//var_dump($bike); 

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


//CAR

require_once 'Car.php';
$homerCar = new Car('pink', 5, 'Essence');
//var_dump($homerCar);

// //Moving car
echo $homerCar->start();
echo "<br> Vitesse de la voiture : ' . {$homerCar->getCurrentSpeed()} . ' km/h' . '<br>";
echo $homerCar->forward();
echo "<br> Vitesse de la voiture : ' . {$homerCar->getCurrentSpeed()} . ' km/h' . '<br>";
echo $homerCar->brake();
echo "<br> Vitesse de la voiture : ' . {$homerCar->getCurrentSpeed()} . ' km/h' . '<br>";

//TRUCK

require_once 'Camion.php';
$camion = new Camion('100', 'purple', '5', 'essence' );
echo $camion->forward();
echo "<br> Vitesse du camion : ' . {$camion->getCurrentSpeed()} . ' km/h' . '<br>";
echo $camion->brake();
echo "<br> Vitesse du camion : ' . {$camion->getCurrentSpeed()} . ' km/h' . '<br>";

echo $camion->isLoad();


// //

// $residentialWay = new ResidentialWay();
// $residentialWay->addVehicle($bike);
// $residentialWay->addVehicle($homerCar);
// $residentialWay->addVehicle($camion);

// var_dump($residentialWay->getCurrentVehicle());


// $motorWay = new MotorWay();
// $motorWay->addVehicle($bike);
// $motorWay->addVehicle($homerCar);
// $motorWay->addVehicle($camion);

// var_dump($motorWay->getCurrentVehicle());

// $pedestrianWay = new PedestrianWay();
// $pedestrianWay->addVehicle($bike);
// $pedestrianWay->addVehicle($homerCar);
// $pedestrianWay->addVehicle($camion);

// var_dump($pedestrianWay->getCurrentVehicle());


// ?>