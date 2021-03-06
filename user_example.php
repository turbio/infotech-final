<?php
include_once('debug.php');
include_once('user.php');
include_once('DB.php');

$database = new DB();

//prevents the remaining examples from actually being executed
//you can change this to run each example
$signup = true;
$signin  = false;
$logout = false;

$username   = "tester";
$password   = "another_test";
$email      = "test@test.com";
$first_name = "test";
$last_name  = "user";

//example signin
if($signin){
	try{
		user::signin($username, $password, $database);
	}catch(Exception $e){
		echo 'unable to signin, ' . $e->getMessage();
		echo '<br/>';
	}
}

//example signup
if($signup){
	try{
		user::signup($username, $password, $email, $database);
		echo 'successfully signed up!';
		echo '<br/>';
	}catch(Exception $e){
		echo 'unable to signup, ' . $e->getMessage();
		echo '<br/>';
	}
}

//example logout
if($logout){
	user::logout();
}


//example checking if logged in and getting name and id
if(user::isLoggedIn()){
	echo "logged in as " . user::getName() . " with id " . user::getId();
}else{
	echo "not logged in<br/>";

}
