
<?php


class abc{



	protected $name = "protected visibility";
	protected function demo()

	{

    echo "protected function";


	}

}

	class test extends abc
	{

     public function xyz(){

     	echo $this->name;

     	echo "<br>";

     	echo $this->demo();
     }

	}




$obj = new test;
$obj->xyz();


?>

