<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

include_once('user.php');
if(user::isLoggedIn()){
	try{
		echo "logged in as " . user::getName();
	}catch(Exception $e){
		echo 'something went wrong' . $e->getMessage();
	}
}else{
	echo "not logged in<br/>";

}

include_once('DB.php');
$database = new DB();

//prevents the remaining examples from actually being executed
return;

$username = "testuser";
$password = "test_passowrd";
$email = "test@test.com";
$first_name = "test";
$last_name = "user";

//example login
try{
	user::login($username, $password, $database);
}catch(Exception $e){
	echo 'unable to login, ' . $e->getMessage();
}

//example signup
try{
	user::signup($username, $password, $email, $first_name, $last_name, $database);
	echo 'successfully signed up!';
}catch(Exception $e){
	echo 'unable to signup, ' . $e->getMessage();
}

?>
