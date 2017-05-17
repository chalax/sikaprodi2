
	<div class="col-md-4 col-md-offset-4">
		
		<div class="panel panel-info panel-login">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
		      <form action="<?php echo base_url();?>user/auth" method="post" class="form-signin">
		        
		        <label for="inputEmail" class="sr-only">Username</label>
		        <input name="uname" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
		        <hr>
		        <label for="inputPassword" class="sr-only">Password</label>
		        <input name="psw" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
		        <hr>
		        
		        <button class="btn btn-info pull-right" type="submit"><i class="fa fa-sign-in"></i> Login</button>
		      </form>
		  	</div>
		</div>

	</div>

		
