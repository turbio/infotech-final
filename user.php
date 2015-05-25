<?php
class user{
	public static $userTable = 'users';

	static function isLoggedIn(){
		if(session_status() == PHP_SESSION_NONE){
			session_start();
		}

		//a user is considered logged in if their name and id are set
		if(!empty($_SESSION['user_id'])
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

	static function getId(){
		if(session_status() != PHP_SESSION_NONE
			&& !empty($_SESSION['user_id'])){
			return $_SESSION['user_id'];
		}

		throw new Exception('no session');
	}

	//checks if user has the correct credentials, then set the user's
	//evironment variables if they do
	static function login($name, $password, $database){
		if($name == ""){
			throw new Exception('must supply a username');
		}
		if($password == ""){
			throw new Exception('must supply a password');
		}

		$userQuery = $database->query(
			'SELECT * FROM '.self::$userTable.'
			WHERE username = "'. $name . '";');
		$userInfo = $userQuery->fetch();

		if(!empty($userInfo['password'])
			&& !empty($userInfo['salt'])
			&& !empty($userInfo['id'])){

			$hashedPassword = hash("sha512", $password . $userInfo["salt"]);

			if($userInfo["password"] == $hashedPassword){
				if(session_status() == PHP_SESSION_NONE){
					session_start();
				}
				$_SESSION['user_id'] = $userInfo["id"];
				$_SESSION['user_name'] = $name;
				return;
			}

		}

		throw new Exception('incorrect credentials');
	}

	//destroy all session information thus logging the user out
	static function logout(){
		if(session_status() == PHP_SESSION_NONE){
			session_start();
		}
		$_SESSION['user_id'] = null;
		$_SESSION['user_name'] = null;
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
		if(!self::validateName($name)){
			throw new Exception('usesrname not valid');
		}
		if(self::userExists($name, $database)){
			throw new Exception('user already exists');
		}

		//the username show be valid and unique at this point
		$passwordSalt = md5(time());
		$passwordHash = hash("sha512", $password . $passwordSalt);

		$userAddQuery = $database->query(
			'INSERT INTO '.self::$userTable.' (
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
			'SELECT * FROM '.self::$userTable.' WHERE
			LOWER(username) = LOWER("'. $name . '")');

		if($userExistsQuery->fetch()){
			return true;
		}

		return false;
	}

	//makes sure username is valo ie alphanumeric
	static function validateName($name){
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
