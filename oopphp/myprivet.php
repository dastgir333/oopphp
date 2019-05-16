<?php

class pvt


{

private $dastgir = "my mobile is for private use";
private function xyz(){

  echo "i will not call you ever";

  echo "<br>";

}

public function sabbu(){

echo $this->dastgir;
echo "<br>";
echo $this->xyz();


}

}

$obj = new pvt;

$obj->sabbu();



?>