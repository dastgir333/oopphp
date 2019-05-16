<?php


//dependency injection
class logger{


	public function log($message){

echo "loging message: $message";


	}
}



class userProfile{
	private $logger;


public function creatUser(){
	// create user

	$this->logger->log("user created");

}
public function updateUser(){
	
	$this->logger->log("user updated");

}


public function deleteUser(){


	$this->logger->log("user deleted");

}

public function __construct($logger){


	$this->logger = $logger;
}

}

$logger = new logger();
$profile = new userProfile($logger);
$profile->creatUser();

	
?>

