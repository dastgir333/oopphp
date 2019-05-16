<?php
$object1 = new User();
$object1->name = "Alice";
$object2  = $object1;
$object1->name = "Any";


echo "object1 name".$object1->name. "<br>";
echo "object2 name" .$object2->name. "<br>";

class User{

	public $name;
}






?>