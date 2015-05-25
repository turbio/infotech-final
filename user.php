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

	static function login($name, $password, $database){
		//TODO implement this
		throw new Exception('not implemented');
	}

	static function signup($name, $password, $database){
		//TODO implement this
		throw new Exception('not implemented');
	}

	static function validateUsername($name){
		//TODO implement this
		throw new Exception('not implemented');
	}
}
?>
