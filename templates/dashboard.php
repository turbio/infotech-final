<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
</head>
<body>
<div id="wrapper">
<?php

$titlebar = new TitleBar();

$titlebar->setButton('signout_button', '<img src="res/signout.svg"/>', 'signout.php');
$userImage = '<img id="user_image" src="res/loading.gif"/> ';
$titlebar->setButton('username_button', $userImage . user::getName(), 'profile.php');
$titlebar->setButton('add_schedule_button', '<img src="res/add_schedule.svg" title="Add a new schedule"/>', 'schedule.php');
//$titlebar->setButton('example_button', 'example button', 'http://example.com');

$titlebar->render();

?>
	<div id="dash_left_content">
		<div class="content_card" class="user_profile">
			<div id="user_profile_icon" class="content_card"></div>
			<div id="user_profile_text">
				<div id="user_username">
					<div id="username_text">username</div>
					<a href="#"><div class="steam_link_button"></div></a>
				</div>
				<div id="user_status">current schedule status</div>
			</div>
		</div>
		<div class="content_card" id="user_friends_list">
			<div class="card_title">Availible</div>
			<div class="content_card" class="user_profile">
				<div id="user_profile_icon" class="content_card"></div>
				<div id="user_profile_text">
					<div id="user_username">
						<div id="username_text">test user</div>
					</div>
					<div id="user_status">availible</div>
				</div>
			</div>
			<div class="content_card" class="user_profile">
				<div id="user_profile_icon" class="content_card"></div>
				<div id="user_profile_text">
					<div id="user_username">
						<div id="username_text">another user</div>
						<a href="#"><div class="steam_link_button"></div></a>
					</div>
					<div id="user_status">availible</div>
				</div>
			</div>
			<div class="content_card" class="user_profile">
				<div id="user_profile_icon" class="content_card"></div>
				<div id="user_profile_text">
					<div id="user_username">
						<div id="username_text">user2</div>
						<a href="#"><div class="steam_link_button"></div></a>
					</div>
					<div id="user_status">availible</div>
				</div>
			</div>
			<div class="content_card" class="user_profile">
				<div id="user_profile_icon" class="content_card"></div>
				<div id="user_profile_text">
					<div id="user_username">
						<div id="username_text">user3</div>
					</div>
					<div id="user_status">availible</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content_card" id="user_schedule">
		<div id="edit_schedule_card_button"> </div>
		<div style="margin-bottom: 10em">schedule<br/>information<br/>here<br/>possible interactive, maybe an edit button in the upper right?</div>
	</div>
</div>
</body>
</html>
