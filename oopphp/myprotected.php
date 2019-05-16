<?php


class abc {

protected $dastgir = "i like protection ";
protected function sabbu(){

echo "sabbu is protected by allah";



}

}
 class test extends abc{


  public function xyz(){

  	echo $this->dastgir;

  	echo "<br>";

  	echo $this->sabbu();
  }

 }

 class best extends abc{

 	public function rest(){
 		echo "<br>";

echo $this->dastgir;

  	echo "<br>";

  	echo $this->sabbu();
  	echo "<br>";

 	}



 }



$obj = new test;
$obj->xyz();

$obj = new best;

$obj->rest();





?>