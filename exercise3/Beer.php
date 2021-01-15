<?php
include "/opt/lampp/htdocs/oop-introduction/exercise1/Beverage.php";
//EXERCISE 2
//Make class beer that extends from Beverage.
class Beer extends Beverage
{
    //Create the properties name (string) and alcoholpercentage (float).
    //Make all properties private.
    private $name;
    private $alcoholpercentage;
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
        $this->beerInfo();
        echo  $this->beerInfo();
        echo "<br>";
        return $this->alcoholpercentage;
    }

    //Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color." Make sure that u use the variables and not just this text line.
    private function beerInfo()
    {
        return "Hi i'm Duvel and have an alochol percentage of {$this->alcoholpercentage} and I have a {$this->color}.";
    }
}
