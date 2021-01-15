<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "Beer.php";
// EXERCISE 3
//Copy the code of excercise 2 to here and delete everything related to cola.
$duvel = new Beer("Duvel", 8.5, "blond", 3.5);

//Make all the other prints work without error.
echo "This is from echo:<br>";
echo $duvel->getAlcoholpercentage();
echo "<br><br>This is from print_r:<br>";
print_r($duvel->getAlcoholpercentage());

/*After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).*/
echo "<br><br>This is the changed color of duvel:<br>";
$duvel->color = "light";
echo $duvel->color;

//Print this method on the screen on a new line.
//USE TYPEHINTING EVERYWHERE!
// echo "<br>";
// echo $duvel->beerInfo();
