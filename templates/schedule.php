<!--- Template --->
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
$titlebar->setButton(
	'add_schedule_button',
	'<img src="res/add_schedule.svg" title="Add a new schedule" class="bar_icon"/>',
   	'schedule.php');
$titlebar->setButton('add_schedule_button', '<img src="res/add_schedule_white.svg" title="Add a new schedule"/>', 'schedule.php');
$titlebar->setButton('add_friend_button', '<img src="res/add_friend_white.svg" title="Add a new friend"/>', 'add_friend.php');
//$titlebar->setButton('example_button', 'example button', 'http://example.com');

$titlebar->render();

?>

	<div>

		    
	    <form method="post" action="schedule.php">
            <h1><img src="res/start_black.svg"/> Starting Time </h1>
            <input id="start" type="time" maxlength="100" name="start"></p>
    
            <h1><img src="res/end_black.svg"/> Ending Time </h1>
            <input id="end" type="time" name="end"></p>
    
            <h1><img src="res/timezone_black.svg"/> Timezone </h1>
    <select name="timezone" id="timezone" onchange="">
<?php
    include("tables/timezones.php");
?>
    </select>
    <input type="submit" value="Save Changes" onclick="">

    </form>

		
		

	
	</div>
</div>
</body>
</html>
