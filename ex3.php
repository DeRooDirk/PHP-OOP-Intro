<?php

declare(strict_types=1);
class Beverage
{
	protected $color;
	protected $price;
	protected $temperature;
	protected $name;

	public function __construct(string $color, float $price, string $temperature, string $name)
	{
		$this->color = $color;
		$this->price = $price;
		$this->temperature = $temperature;
		$this->name = $name;
	}

	public function getInfo(): string
	{
		return 'The <b>' . $this->name . '</b> is <b>' . $this->temperature . '</b> and <b>' . $this->color . '</b></br>';
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

	public function getTemperature(): string
	{
		return $this->temperature;
	}

	public function setTemperature($temperature)
	{
		$this->temperature = $temperature;

		return $this;
	}
}

class Beer extends Beverage
{
	private $alcoholpercentage;

	public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholpercentage)
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


	public function getName()
	{
		return $this->name;
	}


	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}
}

$duvel = new Beer('blond', 3.50, 'cold', 'duvel', 8.5);
$guldenDraak = new beer('redish', 4, 'cold', 'Gulden Draak', 10.5);

// Duvel
echo '<h3>Duvel</h3>';
echo ($duvel->getInfo());
$duvel->setColor('light');
echo ($duvel->getInfo());
echo ($duvel->beerInfo());
echo ($duvel->getAlcoholPercentage());
echo '</br>';

// Gulden Draak Test
echo '<h3>Gulden Draak</h3>';
echo ($guldenDraak->getInfo());
$guldenDraak->setColor('amber');
echo ($guldenDraak->getInfo());
$guldenDraak->setName('New Gulden Dragon');
$guldenDraak->setColor('green');
$guldenDraak->setTemperature('hot');
echo ($guldenDraak->getInfo());
echo ($guldenDraak->beerInfo());
echo ($guldenDraak->getAlcoholPercentage());
