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
$titlebar->setButton('add_schedule_button', 'add schedule', 'schedule.php');
//$titlebar->setButton('example_button', 'example button', 'http://example.com');

$titlebar->render();

?>
	<div class="content_card" id="user_profile">
		<div id="user_profile_icon" class="content_card">user icon</div>
		<div id="user_profile_text">
			<div id="user_username">username</div>
			<div id="user_status">busy/away/availible?</div>
		</div>
	</div>
</div>
</body>
</html>
