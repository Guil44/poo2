<?php
require_once 'Bicycle.php';
require_once 'Truck.php';

$bike = new Bicycle('blue',1,1,2);
$Trucky = new Truck('red',2,'diesel',30);

var_dump($bike);
var_dump($Trucky);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() .' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();

echo $Trucky->forward();
echo $Trucky->brake();

