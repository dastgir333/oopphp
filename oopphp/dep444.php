<?php

class logger{

  public function log($message){

  	echo "my project is : $message";




}





}

class userProfile{

	private $logger;

public function userCreated(){
	
  $this->logger->log("user is created");








}
public function userUpdated(){
	
$this->logger->log("user is updated");







}

public function userDeleted(){
	
$this->logger->log("user is deleted");







}


public function __construct($logger){

$logger = $logger;






}



}
$logger = new logger();
$profile = new userProfile($logger);
$profile->userCreated();

?>