
<?php


class Abc{



	public $name = "public visibility";
	public function demo()

	{

    echo "public function";


	}
}


$obj = new Abc;
 echo $obj->name ."<br>";
$obj->demo();


?>

