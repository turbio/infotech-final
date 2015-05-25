<?php
//steam api interface goes here
// steam key: FAF55CE51DF85A6B5D18E836EF55D022

//returns the full JSON of a user's profile, inside an 
function getSteamProfile($steam_id){
    // note: according to the API doc, you can enter as many steam id's in the "steamids" section, delimited by commas.
    $url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=FAF55CE51DF85A6B5D18E836EF55D022&steamids=".$steam_id;
    $tmp = file_get_contents($url);
    $extended_profile = json_decode($tmp, true);
    $user_profile = $extended_profile["response"]["players"][0];
    return($user_profile);
}

//returns the url of the user's 16x16 avatar
function getSteamAvatar($steam_id){
    $profile = getSteamProfile($steam_id);
    $avatar = $profile["avatar"];
    return($avatar);
}

//returns the url of the user's 184x184 avatar
function getSteamAvatarMedium($steam_id){
    $profile = getSteamProfile($steam_id);
    $avatar = $profile["avatarmedium"];
    return($avatar);
}

//returns the url of the user's 184x184 avatar
function getSteamAvatarFull($steam_id){
    $profile = getSteamProfile($steam_id);
    $avatar = $profile["avatarfull"];
    return($avatar);
}

//there is a medium, 64x64 avatar, but that can be added later
?>