<?php
include_once('debug.php');
include_once('api/steam.php');

//include_once('DB.php');
//$database = new DB();


$usersToQuery = array(
		"76561198044116279",
		"76561198044116280",
		"76561198044116281",
		"76561198044116282",
		"76561198044116283"
	);

$steam = new steamInterface();

//five sequential random test profiles
//(no idea who these are)
$steam->request($usersToQuery);

//$steam->printDebug();


//so see all the information gathered
//$steam->printDebug();

//echo $steam->getAvatarSmall();
//echo $steam->getAvatarMedium();
//echo $steam->getAvatarLarge();

//create a table showing all the user data
echo '<table border=1>';
for($i = 0; $i < count($usersToQuery); $i++){
	echo '<tr>
		<td>
			<img src="'.$steam->getAvatarLarge($i).'"/>
			<img src="'.$steam->getAvatarMedium($i).'"/>
			<img src="'.$steam->getAvatarSmall($i).'"/></td>
		<td>'.$usersToQuery[$i].'</td>
	</tr>';
}
echo '</table>';

?>
