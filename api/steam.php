<?php
include_once('debug.php');
require 'include/openid.php';

class steamInterface{
	private $steamQueryUrl =
		'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=%s&steamids=%s';
	private $steamKey = 'FAF55CE51DF85A6B5D18E836EF55D022';
	private $steamQueryResults = "";
	private $steamId = "";

	function signin(){
		$openid = new LightOpenID('http://localhost/');
		if(!$openid->mode){
			$openid->identity = 'http://steamcommunity.com/openid/?l=english';
			header('Location: ' . $openid->authUrl());
		}elseif($openid->mode == 'cancel'){
			throw new Exception('user canceled authentication');
		}elseif($openid->validate()){
			$id = $openid->identity;
			$ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
			preg_match($ptn, $id, $matches);
			$this->request($matches[1]);
		}else{
			throw new Exception('user not logged in');
		}
	}

	//request data for a steam id (or set of steam id's in an array)
	//and load it
	function request($steamId){
		$this->steamId = $steamId;
		$steamIdAsString = "";
		if(is_array($steamId)){
			for($i = 0; $i < count($steamId); $i++){
				$steamIdAsString .= $steamId[$i];
				if($i != count($steamId) - 1){
					$steamIdAsString .= ',';
				}
			}
		}else{
			$steamIdAsString = $steamId;
		}

		//NOTE: according to the API doc, you can enter as many steam id's in
		//the "steamids" section, delimited by commas.
		$expendedUrl = sprintf($this->steamQueryUrl, $this->steamKey, $steamIdAsString);

		$rawJson = file_get_contents($expendedUrl);
		$this->steamQueryResults = json_decode($rawJson, true);


		//$user_profile = $extended_profile["response"]["players"][0];
		//return($user_profile);
	}

	//TODO: REMOVE THIS
	function printDebug(){
		print_r($this->steamQueryResults);
	}

	function getName($userIndex = 0){
		$user = $this->steamQueryResults['response']['players'][$userIndex];
		return $user['personaname'];
	}

	//returns the url of the user's avatar
	//size determines if it should be (defualt is small)
	//small = 0
	//medium = 1
	//large = 2
	//the index is the order in which the uesr was requested (defualt is 0)
	function getAvatar($size = 0, $userIndex = 0){
		//throw new Exception('not implemented');
		$user = $this->steamQueryResults['response']['players'][$userIndex];
		$avatarUrl = '';

		//select avatar url based on size, defaults to small/0 if the value
		//is out of range
		switch($size){
			default:
			case 0:
				$avatarUrl = $user['avatar'];
				break;
			case 1:
				$avatarUrl = $user['avatarmedium'];
				break;
			case 2:
				$avatarUrl = $user['avatarfull'];
				break;
		}

		return($avatarUrl);
	}
	function getAvatarSmall($userIndex = 0){
		return $this->getAvatar(0, $userIndex);
	}
	function getAvatarMedium($userIndex = 0){
		return $this->getAvatar(1, $userIndex);
	}
	function getAvatarLarge($userIndex = 0){
		return $this->getAvatar(2, $userIndex);
	}

	function getId(){
		return $this->steamId;
	}

}
?>
