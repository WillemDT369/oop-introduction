<?php
include "/opt/lampp/htdocs/oop-introduction/exercise1/Beverage.php";
//EXERCISE 2
//Make class beer that extends from Beverage.
class Beer extends Beverage
{
    //Create the properties name (string) and alcoholpercentage (float).
    public $name;
    public $alcoholpercentage;
    //Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
    public function __construct($name, $alcoholpercentage, $color, $price)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }
    //Remember for now we will use properties and methods that can be accessed from everywhere.
    //Make a getAlcoholpercentage function which returns the alocoholpercentage.
    public function getAlcoholpercentage()
    {
        return $this->alcoholpercentage;
    }
}
