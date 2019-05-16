<?php

class logger{


public function log($message){

echo "my program say:$message";


}


}




class userProfile{

	private $logger;


public function createUser(){



$this->logger->log("user is created");


}

public function updateUser(){



$this->logger->log("user is updated");
}

public function deleteUser(){


	
$logger->log("user is deleted");
}

public function __construct($logger){

	$this->logger = $logger;



}

	
}

$logger = new logger();
$profile = new userProfile($logger);
$profile->createUser();

?>