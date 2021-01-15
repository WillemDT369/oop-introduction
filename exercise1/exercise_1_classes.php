<?php

declare(strict_types=1);
require "Beverage.php";

//Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
//USE TYPEHINTING EVERYWHERE!
$cola = new Beverage("black", 2.0);

//print the getInfo on the screen.
echo $cola->getInfo();

//print the temperature on the screen.
echo "<br>";
echo $cola->temperature;
