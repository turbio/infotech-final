<?php
class user{
	public static $userTable = 'users';
	private static $sessionStarted = false;

	private static function startSession(){
		if(!user::$sessionStarted){
			session_start();
			user::$sessionStarted = true;
		}
	}

	static function isLoggedIn(){
		user::startSession();

		//a user is considered logged in if their username and id are set
		if(!empty($_SESSION['user_id'])
			&& !empty($_SESSION['user_name'])){
			return true;
		}
		return false;
	}

	static function getName(){
		user::startSession();

		if(!empty($_SESSION['user_name'])){
			return $_SESSION['user_name'];
		}else{
			throw new Exception('no user logged in');
		}
	}

	static function getId(){
		user::startSession();
		return $_SESSION['user_id'];
	}

	static function getEmail($database){
		user::startSession();
		$userQuery = $database->query(
			'SELECT email FROM '.self::$userTable.'
			WHERE id = '. $_SESSION['user_id'] . ';');
		$userInfo = $userQuery->fetch();
		return $userInfo[0];
	}

	static function signin_steam($steamId){

	}

	//checks if user has the correct credentials, then sets the user's
	//environment variables if they do
	static function signin($username, $password, $database){
		if($username == ""){
			throw new Exception('must supply a username');
		}
		if($password == ""){
			throw new Exception('must supply a password');
		}

		$userQuery = $database->query(
			'SELECT * FROM '.self::$userTable.'
			WHERE username = "'. $username . '";');
		$userInfo = $userQuery->fetch();

		if(!empty($userInfo['password'])
			&& !empty($userInfo['salt'])
			&& !empty($userInfo['id'])){

			$hashedPassword = hash("sha512", $password . $userInfo["salt"]);

			if($userInfo["password"] == $hashedPassword){
				user::startSession();
				$_SESSION['user_id'] = $userInfo["id"];
				$_SESSION['user_name'] = $username;
				return;
			}

		}

		throw new Exception('incorrect credentials');
	}

	//destroy all session information thus logging the user out
	static function logout(){
		user::startSession();
		$_SESSION['user_id'] = null;
		$_SESSION['user_name'] = null;
		session_destroy();
	}

	//create an entry in the user's table for the desired username
	static function signup(
		$username,
		$password,
		$email,
		//$first_name,
		//$last_name,
		$database){
		if(!self::validateName($username)){
			throw new Exception('username not valid');
		}
		if(self::userExists($username, $database)){
			throw new Exception('user already exists');
		}
		if(!self::validateEmail($email)){
			throw new Exception('email not valid');
		}

		//the username show be valid and unique at this point
		$passwordSalt = md5(time());
		$passwordHash = hash("sha512", $password . $passwordSalt);

		//$userAddQuery = $database->query(
			//'INSERT INTO '.self::$userTable.' (
				//username,
				//password,
				//salt,
				//email,
				//date_joined)
			//VALUES ("'
			//. $username . '","'
			//. $passwordHash . '","'
			//. $passwordSalt . '","'
			//. $email
			//. '",NOW()"');

		$userAddQuery = $database->query(
			'INSERT INTO '.self::$userTable.
			' ( username, password, salt, email, date_joined)'.
			'VALUES ("'.$username.'","'.$passwordHash.'","'.$passwordSalt.'","'.$email.'",NOW())');
			
		
		//once a new user registers, call sendEmail() to validate them
	}
	
	static function sendEmail($address, $msg){
		//TODO Add functionality
	}

	//check if a user exists with the given username
	static function userExists($username, $database){
		$userExistsQuery = $database->query(
			'SELECT * FROM '.self::$userTable.' WHERE
			LOWER(username) = LOWER("'. $username . '")');

		if($userExistsQuery->fetch()){
			return true;
		}
		return false;
	}

	//makes sure username is valid ie. alphanumeric
	static function validateName($username){
		if(!ctype_alnum($username)){
			return false;
		}
		return true;
	}

	//makes sure email is valid and follows username@domain.tld
	static function validateEmail($email){
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}
}
?>
