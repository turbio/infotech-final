<?php
class user{
	static function isLoggedIn(){
		//a user is considered logged in if their name,
		//password hash, and id are set
		if(session_status() != PHP_SESSION_NONE
			&& !empty($_SESSION['user_id'])
			&& !empty($_SESSION['user_pass_hash'])
			&& !empty($_SESSION['user_name'])){
			return true;
		}
		return false;
	}

	static function getName(){
		if(session_status() != PHP_SESSION_NONE
			&& !empty($_SESSION['user_name'])){
			return $_SESSION['user_name'];
		}

		throw new Exception('no session');
	}

	//checks if user has the correct credentials, then set the user's
	//evironment variables if they do
	static function login($name, $password, $database){
		//TODO implement this
		throw new Exception('not implemented');
	}

	//destroy all session information thus logging the user out
	static function logout(){
		//TODO implement this
		throw new Exception('not implemented');
	}

	//create an entry in the user's table for the desired username
	static function signup($name, $password, $database){
		//TODO implement this
		throw new Exception('not implemented');
	}

	//check if a user exists with the given username
	static function userExists($name, $database){
		//TODO implement this
		throw new Exception('not implemented');
	}

	//makes sure username is valo ie alphanumeric
	static function validateUsername($name){
		//TODO implement this
		throw new Exception('not implemented');
	}
}
?>
