<?php

/*
|----------------------------------------------------------------------------------------------------------------
	A POO example
|---------------------------------------------------------------------------------------------------------------- 
*/


class House
{


	public $rooms = 3;
	public $home_color = 'white';
	public $for_sale = true;


	public function __construct($home_color = null)
	{

		if ($home_color) {
			$this->home_color = $home_color;
		}
	}

	public function add_room()
	{
		$this->rooms++;
	}

	public function sell()
	{
		$this->for_sale = false;
	}
}

$house1 =  new House('red');
$house1->add_room();
$house1->add_room();
$house1->add_room();
echo "This {$house1->home_color} house has {$house1->rooms} romms. ";
echo ($house1->for_sale)
	? "It's for sale"
	: "It's not for sale";

echo "<br>";

$house2 =  new House();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->sell();
echo "This {$house2->home_color} house has {$house2->rooms} romms. ";
echo ($house2->for_sale)
	? "It's for sale"
	: "It's not for sale";
