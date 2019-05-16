<?php
$object = new user;
print_r($object); echo "<br>";
$object->name = "Dastgir";
$object->password = "*12345#";
print_r($object); echo "<br>";
$object->save_user();



class User{

	public $name, $password;

	function save_user()
	{
		echo "save User goes here";
	}
}

?>