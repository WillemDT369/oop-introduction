<?php
//EXERCISE 1
//Create a class beverage.
class Beverage
{
    //Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    public $color;
    public $price;
    public $temperature;

    const BARNAME = 'Het Vervolg';
    //Have a default value "cold" in the construct for temperature.
    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    //Remember for now we will use properties and methods that can be accessed from everywhere.
    //Make a getInfo function which returns "This beverage is <temperature> and <color>."
    function getInfo()
    {
        return "This beverage is $this->temperature and $this->color";
    }

    function showConstantBeverage()
    {
        echo  self::BARNAME . "\n";
    }
}
