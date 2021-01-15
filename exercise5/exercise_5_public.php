<?php

declare(strict_types=1);
require "Beverage.php";

//Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
//USE TYPEHINTING EVERYWHERE!
$cola = new Beverage("black", 2.0);

$ref = new ReflectionClass("Beverage");

$prop1 = $ref->getProperty("color");
$prop1->setAccessible(TRUE);

$prop2 = $ref->getProperty("price");
$prop2->setAccessible(TRUE);
$prop2->setValue($cola, 3.5);

$prop3 = $ref->getProperty("temperature");
$prop3->setAccessible(TRUE);

echo "This beverage is ";
echo $prop1->getValue($cola);
echo " and ";
echo $prop3->getValue($cola);

echo "<br>The new price of cola is : ";
echo $prop2->getValue($cola); 
//print the getInfo on the screen.

//print the temperature on the screen.

//echo $cola->Beverage;
/* EXERCISE 5
Copy the class of exercise 1.
fix the errors without using getter and setter functions.
change the price to 3.5 euro and print it also on the screen on a new line.
*/