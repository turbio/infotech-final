<?php
class user{
	public static $userTableName = 'users';

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
		session_destroy();
	}

	//create an entry in the user's table for the desired username
	static function signup(
		$name,
		$password,
		$email,
		$first_name,
		$last_name,
		$database){
		if(!user::validName($name)){
			throw new Exception('usesrname not valid');
		}
		if(user::userExists($name, $database)){
			throw new Exception('user already exists');
		}

		//the username show be valid and unique at this point
		$passwordSalt = md5(time());
		$passwordHash = hash("sha512", $password . $passwordSalt);

		$userAddQuery = $database->query(
			'INSERT INTO '.self::$userTableName.' (
				username,
				password,
				salt,
				email,
				date_joined,
				first_name,
				last_name)
			VALUES ("'
			. $name . '","'
			. $passwordHash . '","'
			. $passwordSalt . '","'
			. $email
			. '",NOW(),"'
			. $first_name . '","'
			. $last_name . '")');
	}

	//check if a user exists with the given username
	static function userExists($name, $database){
		$userExistsQuery = $database->query(
			'SELECT * FROM '.self::$userTableName.' WHERE username = "'. $name . '"');

		if($userExistsQuery->fetch()){
			return true;
		}

		return false;
	}

	//makes sure username is valo ie alphanumeric
	static function validName($name){
		if(!ctype_alnum($name)){
			return false;
		}
		return true;
	}

	//makes sure email is valid and follows name@domain.tld
	static function validateEmail($email){
		//TODO implement this
		throw new Exception('not implemented');
	}
}
?>
