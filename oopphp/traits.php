
<?php

class dish{

   public function bread(){

   	echo "bread from dish";

    



   }


   public function vegitables(){

     echo "vegitables from dish";


   }



}

trait sweets

{
public function sweet()

{

	echo "sweet from traits";

	echo "<br>";
}



}

class dish2 extends dish{


use sweets;






}


trait chocho{

public function chochopunch()


{

 echo "chocho from chochopunch";

	echo "<br>";
}


}

class dish3{

 use chocho;
 


}





$obj = new dish2();
$obj->sweet();
$obj = new dish3();
$obj->chochopunch();


?>