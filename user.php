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
}
?>
