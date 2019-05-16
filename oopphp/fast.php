<?php 

// declare the class
class Car{

// properties
	public $comp;
	public $color = "blue";


	// method that say hello

	public function hello(){


    return "beep";
 

	}




}

// create objects

$bmw = new car();
$toyta = new car();

// get the value;

echo $bmv-> color; // blue

echo "<br>";

echo "$toyta->color"; // blue


echo "<hr>";

// set the value

$bmv-> color = "white";
$toyta->color = "red";


// get the value again



cho $bmv-> color; // white

echo "<br>";

echo "$toyta->color"; // red



 ?>