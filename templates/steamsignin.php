<div class="dialog">
<div class="dialog_title">Create an account?</div>
<hr/>
<div class="dialog_pad">
this will allow you to log in without steam,
<br/>
you can always complete this later
<form action="signup.php" method="POST">
<input value="<?php echo $this->username; ?>" type="text" name="username" placeholder="username" class="field" autofocus>
	<br/>
	<input type="text" name="email" placeholder="email (optional)" class="field">
	<br/>
	<input type="password" name="password" placeholder="password" class="field">
	<br/>
	<input type="submit" value="sign up" class="button">
</form>
<a href="index.php">
	<div class="button">no thanks</div>
</a>
</div>
