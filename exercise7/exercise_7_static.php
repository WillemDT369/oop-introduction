<?php

declare(strict_types=1);

//EXERCISE 6
//Copy the classes of exercise 2.

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "Beer.php";

//Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically. Also the name equal to Duvel and the alcohol percentage to 8,5%

/* EXERCISE 7
Copy your solution from exercise 6
Make a static property in the Beverage class that can only be accessed from inside the class called address
which has the value "Melkmarkt 9, 2000 Antwerpen".
print the address without creating a new instant of the beverage class 2 times in two different ways.
Use typehinting everywhere!
*/
echo "This is printing using echo : <br>";
echo Beverage::$address;

echo "<br><br>This is printing using print : <br>";
echo Beverage::$address;
echo "<br><br>";


$duvel = new Beer("Duvel", 8.5, "blond", 3.5);

//print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
// Make sure that each print is on a different line.
echo "This is from echo :<br>";
echo $duvel->getAlcoholpercentage();
echo "<br><br>This is from print_r :<br>";
print_r($duvel->getAlcoholpercentage());

// Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
//echo $duvel->Beverage::getAlcoholpercentage();
// USE TYPEHINTING EVERYWHERE!
// */
//print the constant on the screen


echo "<br><br>This is the constant : <br>";
echo $duvel::BARNAME;

$cola = new Beverage("black", 2);
echo "<br><br>This is the constant from Beverage class : <br>";
$cola->showConstantBeverage();

echo "<br><br>This is the constant from Beer class : <br>";
$duvel->showConstantBeer();
//print the output of these functions on the screen.
//Make sure that every print is on a new line.
