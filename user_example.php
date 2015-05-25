<?php
include_once('debug.php');
include_once('user.php');

include_once('DB.php');
$database = new DB();

//prevents the remaining examples from actually being executed
//you can change this to run each example
$signup = false;
$login  = false;
$logout = false;

$username   = "test";
$password   = "another_test";
$email      = "test@test.com";
$first_name = "test";
$last_name  = "user";

//example login
if($login){
	try{
		user::login($username, $password, $database);
	}catch(Exception $e){
		echo 'unable to login, ' . $e->getMessage();
		echo '<br/>';
	}
}

//example signup
if($signup){
	try{
		user::signup($username, $password, $email, $first_name, $last_name, $database);
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

?>
