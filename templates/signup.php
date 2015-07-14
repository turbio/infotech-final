<?php
echo '<div class="dialog">';
echo '<div class="dialog_title">sign up</div>';
echo '<hr/>';
echo '<div class="dialog_pad">';

if($this->error){
	echo '<div id="fail_box">'.$this->error.'</div>';
}

echo '<form action="signup.php" method="POST">
		<input type="text" name="username" placeholder="username" class="field" autofocus>
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
