<?php
include_once('debug.php');

class gravatarInterface{
	private $queryUrl = 'http://www.gravatar.com/avatar/%s';
	private $requestUrl = "";
	private $queryResults = "";

	//request data for a steam id (or set of steam id's in an array)
	//and load it
	function request($email){
		$requestEmail = trim($email);
		$requestEmail = strtolower($requestEmail);
		$emailHash = md5($requestEmail);

		$this->requestUrl = sprintf($this->queryUrl, $emailHash);
		$this->queryResults = file_get_contents($this->requestUrl);

	}

	function getAvatarUrl(){
		return $this->requestUrl;
	}

	function getAvatar(){
		return $this->queryResults;
	}
}

//there is a medium, 64x64 avatar, but that can be added later
?>
