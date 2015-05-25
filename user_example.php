<?php

include_once('user.php');
if(user::isLoggedIn()){
	try{
		echo "logged in as " . user::getName();
	}catch(Exception $e){
		echo 'something went wrong' . $e->getMessage();
	}
}else{
	echo "not logged in";

}

include_once('DB.php');
$database = new DB();

//prevents the remaining examples from actually being executed
return;

$username = "test_user";
$password = "test_passowrd";

//example login
try{
	user::login($username, $password, $database);
}catch(Exception $e){
	echo 'unable to login, ' . $e->getMessage();
}

//example signup
try{
	user::signup($username, $password, $database);
}catch(Exception $e){
	echo 'unable to signup, ' . $e->getMessage();
}


?>
