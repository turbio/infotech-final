<?php
if(!$this->embed){
	echo '
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://www.google.com/recaptcha/api.js"></script>';
}

echo '<div class="dialog">';
echo '<div class="dialog_title">sign up</div>';
echo '<hr/>';
echo '<div class="dialog_pad">';

if(isset($this->error)){
	echo '<div id="fail_box">'.$this->error.'</div>';
}

echo '<form action="signup.php" method="POST">
		<input type="text" name="username" placeholder="username" class="field">
		<br/>
		<input type="text" name="email" placeholder="email" class="field">
		<br/>
		<input type="password" name="password" placeholder="password" class="field">
		<br/>
		<div class="g-recaptcha" id="captcha" data-sitekey="6LcPjwcTAAAAAP_cseFYvlfIpXSf31AmKjdwdS4q"></div>
		<br/>
		<input type="submit" value="sign up" class="button">
	</form>';
echo '</div>';

?>
