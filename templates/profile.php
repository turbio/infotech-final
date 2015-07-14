<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="splash_actions.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
</head>
<body>
<div id="wrapper">
<?php
include_once('title_bar.php');
include_once('api/gravatar.php');
include_once('DB.php');

$titlebar = new TitleBar();

$titlebar->setButton('signout_button', '<img src="res/signout.svg"/>', 'signout.php');

$userImage = '<img id="user_image" src="res/loading.gif"/> ';
$gravatar = new gravatarInterface();
$database = new DB();
$gravatar->request(user::getEmail($database));
echo user::getEmail($database);
$userImage = '<img id="user_image" width="24px" src="'.$gravatar->getAvatarUrl().'"/> ';

$titlebar->setButton('username_button', $userImage . user::getName(), 'profile.php');
$titlebar->setButton(
	'add_schedule_button',
	'<img src="res/add_schedule.svg" title="Add a new schedule" class="bar_icon"/>',
	'schedule.php');
$titlebar->setButton('add_schedule_button', '<img src="res/add_schedule_white.svg" title="Add a new schedule"/>', 'schedule.php');
$titlebar->setButton('add_friend_button', '<img src="res/add_friend_white.svg" title="Add a new friend"/>', 'add_friend.php');
//$titlebar->setButton('example_button', 'example button', 'http://example.com');

$titlebar->render();

?>
	<div id="content_container">
		<div class="content_card" class="user_profile">
			<!--<div id="user_profile_icon" class="content_card"></div>-->
			<div id="user_profile_icon" class="content_card"></div>
			<div id="user_profile_text">
				<div id="user_username">
				<div id="username_text">
<?php
include_once('user.php');
echo user::getName();
?>
</div>
					<a href="#"><div class="steam_link_button"></div></a>
				</div>
				<div id="user_status">current schedule status</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
