<?php

declare(strict_types=1);

class Beverage
{
    const BARNAME = 'The GreenGoblin';
    protected $color;
    protected $price;
    protected $temperature;
    protected $name;
    protected static int $numberOfDrinks = 0;

    public function __construct(string $color, float $price, string $temperature = 'cold', string $name)
    {
        $this->color       = $color;
        $this->price       = $price;
        $this->temperature = $temperature;
        $this->name        = $name;
        self::$numberOfDrinks++;
    }

    public function getInfo(): string
    {
        return $this->name . ' is ' . $this->temperature . ' and ' . $this->color . '</br>';
    }

    public function order(): string
    {
        return $this->name . ' has been ordered at ' . self::BARNAME . '.</br>';
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getNumberOfDrinks()
    {
        return 'There are ' . self::$numberOfDrinks . ' drinks in total.';
    }
}

class Beer extends Beverage
{
    private $alcoholpercentage;

    public function __construct(string $color, float $price, string $temperature = 'cold', string $name, float $alcoholpercentage)
    {
        parent::__construct($color, $price, $temperature, $name);
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholPercentage(): string
    {
        return 'The alcohol percentage of ' . $this->name . ' is ' . $this->alcoholpercentage . '%.</br>';
    }

    public function beerInfo(): string
    {
        return 'Hi, I\'m ' . $this->name . ' and I have an alcohol percentage of ' . $this->alcoholpercentage . '%. I\'m ' . $this->color . ' in color.</br>';
    }
}

$duvel = new Beer('blond', 3.50, 'cold', 'duvel', 8.5);
$chouffe = new Beer('blond', 3.50, 'cold', 'chouffe', 8.5);
$karmeliet = new Beer('blond', 3.50, 'cold', 'karmeliet', 8.5);

echo ($duvel->getInfo());
$duvel->setColor('light');
echo ($duvel->getInfo());
echo ($duvel->beerInfo());
echo ($duvel->order());
echo ($duvel->getAlcoholPercentage());
echo ($duvel->getNumberOfDrinks());