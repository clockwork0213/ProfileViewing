<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="container-fluid">
	<div class="row"><!--row-->
		<div class="col-sm-offset-4 col-sm-4 well well-sm"><!--well-->
			<legend>Please Sign In</legend>
			<?php if(isset($error) && $error): ?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning!</strong> Incorrect Username or Password.
			</div>
			<?php endif; ?>
			
			<?php echo form_open('Login/login_user', array('class' => 'form-horizontal', 'role' => 'form')); ?>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" name="user_input" class="form-control" placeholder="Username"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="password" name="pass_input" class="form-control" placeholder="Password"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-info btn-block" >Sign in</button>
					</div>
				</div>
			</form>
		</div><!--end well-->
	</div><!--end row-->
</div>