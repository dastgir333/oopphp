

<?php

//dependency injection


class Logger{


public function log($message){



	echo "logging message: $message";
}


}

$logger = new logger();

$logger->log("this is a message");



class userProfile{
	private $logger;

public function createUser(){

$this->logger->log("user created");


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
$profile->createUser();
$profile->deleteUser();


?>