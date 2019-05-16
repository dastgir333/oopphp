<?php



class BankAccount{

public $Accno;
public $AccName;
public $balance;


public function deposit(){

echo "deposit method";


}
public function withdraw(){


	echo "withdraw method";
}
}



$obj = new BankAccount();

var_dump($obj->deposit());


?>