 <?php
interface abc{


public function test();
public function xyz();


}



class def implements abc{

public function test(){

	echo "text function";
}



public function xyz(){

echo "xyz function";

}



}


$obj = new def();
$obj->test();

echo "<br>";
$obj->xyz();



 ?>