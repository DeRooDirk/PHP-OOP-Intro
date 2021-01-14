<?php
declare(strict_types=1);
/* EXERCISE 2
Make class beer that extends from Beverage.
Create the properties name (string) and alcoholpercentage (float).
Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
Make a getAlcoholpercentage function which returns the alocoholpercentage.
Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
Also the name equal to Duvel and the alcohol percentage to 8,5%
print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/
// needs to change this to include  ex1 instead of this
class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;
    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function getInfo(): string
    {
        return "€ This beverage is a cola, it is $this->temperature and $this->color.";
    }
}
$cola = new Beverage('black', 2);
echo $cola->price;
echo $cola->temperature;
echo $cola->getInfo();
// EXERCISE TWO
class Beer extends Beverage
{
    public string $name;
    public float $alcoholPercentage;

    public function __construct(string $color, float $price,  string $name, float $alcoholPercentage, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholpercentage()
    {
        return $this->alcoholPercentage . '%';
    }
}
$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
echo '<br>';
echo $duvel->alcoholPercentage . '%';
echo '<br>';
echo $duvel->getAlcoholpercentage();
echo '<br>';
echo $duvel->color;
echo '<br>';
echo $duvel->getInfo();
echo '<br>';
echo '<br>';
echo $cola->alcoholPercentage . '%';
echo '<br>';
?>
