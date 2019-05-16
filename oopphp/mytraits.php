<?php

class animal{

public function tiger(){

echo "my favourite animal is tiger";


}



}


class beast extends animal{


	public function lion(){

      echo "my favourite animal is lion";



	}
}
 trait panther{

  public function mypanther(){
 	echo "my favourite animal is panther";


}

 }


 class creature extends animal{

   use panther;


     

   }


 
$obj = new creature();
$obj->mypanther();
?>