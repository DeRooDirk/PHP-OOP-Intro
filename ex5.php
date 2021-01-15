<?php

declare(strict_types=1);

class Beverage
{
    const BARNAME = 'The GreenGoblin';

    protected $color;
    protected $price;
    protected $temperature;
    protected $name;

    public function __construct(string $color, float $price, string $temperature = 'cold', string $name)
    {
        $this->color       = $color;
        $this->price       = $price;
        $this->temperature = $temperature;
        $this->name        = $name;
    }

    public function getInfo(): string
    {
        return 'The <b>' . $this->name . '</b> is <b>' . $this->temperature . '</b> and <b>' . $this->color . '</b></br>';
    }

    public function getBar(): string
    {
        return 'The <b>' . $this->name . '</b>  has been ordered at <b>' . self::BARNAME . '</b> .</br>';
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
}

class Beer extends Beverage
{
    private $alcoholpercentage;

    public function __construct(string $color, float $price, string $temperature = 'cold', string $name, float $alcoholpercentage)
    {
        $this->color       = $color;
        $this->price       = $price;
        $this->temperature = $temperature;
        $this->name        = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholPercentage(): string
    {
        return 'The alcohol percentage of <b>' . $this->name . '</b> is <b>' . $this->alcoholpercentage . '%</b>.</br>';
    }

    public function beerInfo(): string
    {
        return 'Hi, I\'m <b>' . $this->name . '</b> and have an alcohol percentage of <b>' . $this->alcoholpercentage . '%</b>. I\'m <b>' . $this->color . '</b> in color.</br>';
    }
}

$guldenDraak = new Beer('blond', 3.50, 'cold', 'Gulden Draak', 8.5);

echo ($guldenDraak->getInfo());
$guldenDraak->setColor('light');
echo ($guldenDraak->getInfo());
echo ($guldenDraak->beerInfo());
echo ($guldenDraak->getBar());
echo ($guldenDraak->getAlcoholPercentage());