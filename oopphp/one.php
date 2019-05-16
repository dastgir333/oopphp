<?php
//declere the class

class Car{
    //properties
    public $comp;
    public $color = 'red';
    public $sunRuf = true;
    //method that says hello
   public function hello()
   {
       return "beep";
   }
    
}
//create an instance
$bmw = new Car();


$toyta  = new Car();

//Get the value
echo $bmw->color;
echo "<br>";
echo $bmw->sunRuf;

//set the values
echo $bmw->color = 'blue';
?>