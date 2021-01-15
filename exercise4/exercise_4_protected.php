<?php

declare(strict_types=1);

//EXERCISE 4
//Copy the code of exercise 2 to here and delete everything related to cola.
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "Beer.php";

//Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically. Also the name equal to Duvel and the alcohol percentage to 8,5%
$duvel = new Beer("Duvel", 8.5, "blond", 3.5);

//print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
// Make sure that each print is on a different line.
echo "This is from echo:<br>";
echo $duvel->getAlcoholpercentage();
echo "<br><br>This is from print_r:<br>";
print_r($duvel->getAlcoholpercentage());


//Make all the other prints work without error without changing the beverage class.
