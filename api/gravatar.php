<?php
include_once('debug.php');

class steamInterface{
	private $queryUrl = 'http://www.gravatar.com/avatar/%s';
	private $queryResults = "";

	//request data for a steam id (or set of steam id's in an array)
	//and load it
	function request($email){
		$requestEmail = trim($email);
		$requestEmail = strtolower($requestEmail);
		$emailHash = md5($requestEmail);


		$requestUrl = sprintf($queryUrl, $emailHash);
		$this->queryResults = file_get_contents($requestUrl);

	}

	function getAvatarUrl(){
		return $this->queryResults;
	}
}

//there is a medium, 64x64 avatar, but that can be added later
?>
