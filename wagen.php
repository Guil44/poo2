<?php
require_once 'SimpsonCar.php';

$car = new SimpsonCar('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(SimpsonCar::ALLOWED_ENERGIES);



require_once 'Bicycle.php';

$cycle = new Bicycle('blue',1);
echo $cycle->forward();
var_dump($cycle); 


require_once 'Truck.php';

$trucky = new Truck('grey',4,'fuel');
var_dump($trucky);
