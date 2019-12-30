<h1 align="center">Login Admin</h1>
<div class="container">
	<form  class="form" action="<?php echo base_url('login/aksi_login'); ?>" method="POST">
		<div class="form-group">
			<label for="username">Username :</label>
			<input class="form-control" id="username" type="text" name="username" placeholder="Masukan Username" value="">	
		</div>
		<div class="form-group">
			<label for="/password">Password :</label>
			<input class="form-control" id="password" type="password" name="password" placeholder="Masukan Password" value="">
		</div>
		<div class="form-group" align="center">
			<button class="btn btn-primary" style="width: 100px" type="submit" value="Submit">Login</button>
		</div>	
	</form>
</div>