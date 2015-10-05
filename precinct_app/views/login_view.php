<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div>
	<h4>Please Sign In</h4>
	<?php //if(isset($error) && $error): ?>
	<div class="alert alert-danger alert-dismissable" role="alert">
		<button class="close" data-dismis="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
		<strong>Warning!</strong> Incorrect Username or Password.
	</div>
	<?php //endif; ?>
	
	<?php echo form_open('Login/login_user'); ?>
		<input type="text" name="user_input" placeholder="Username"/>
		<input type="password" name="pass_input" placeholder="Password"/>
		<button type="submit">Sign in</button>
	</form>
</div>