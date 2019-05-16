<?php

class person {

static public $Name = "dastgir";
static public function helloWorld(){



	print "my name is dastgir" . self::$Name;
}


}


print person ::$Name . "\n";
person::helloWorld();



?>