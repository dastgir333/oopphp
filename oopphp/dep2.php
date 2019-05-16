<?php

class logger{



	public function log($message){

     echo "logging message:$message";

	}
}

$logger = new logger();

$logger->log("this is a message.");

class userProfile{

public function createUser(){

	// create user

	$logger = new logger();
	$logger->log("user created");
}

public function updateUser(){

// update user
	$logger = new logger();
	$logger->log("update user");

}
public function deleteUser(){


	$logger = new logger();
	$logger->log("deleteUser");
}

}
$profile = new userProfile();
$profile->createUser()
?>