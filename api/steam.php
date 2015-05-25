<?php
include_once('debug.php');

class steamInterface{
	public $steamQueryUrl =
		'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=%s&steamids=%s';
	public $steamKey = 'FAF55CE51DF85A6B5D18E836EF55D022';
	public $steamQueryResults = "";

	//request data for a steam id (or set of steam id's in an array)
	//and load it
	function request($steamId){

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
		$steamQueryResults = json_decode($rawJson, true);

		print_r($steamQueryResults);
		//$user_profile = $extended_profile["response"]["players"][0];
		//return($user_profile);
	}

	//returns the url of the user's avatar at different sizes
	function getSteamAvatarSmall($steamId){
		throw new Exception('not implemented');
		$profile = getSteamProfile($steam_id);
		$avatar = $profile["avatar"];
		return($avatar);
	}
	function getSteamAvatarMedium($steam_id){
		throw new Exception('not implemented');
		$profile = getSteamProfile($steam_id);
		$avatar = $profile["avatarmedium"];
		return($avatar);
	}
	function getSteamAvatarFull($steam_id){
		throw new Exception('not implemented');
		$profile = getSteamProfile($steam_id);
		$avatar = $profile["avatarfull"];
		return($avatar);
	}

}

//there is a medium, 64x64 avatar, but that can be added later
?>
