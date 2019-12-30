<h1 align="center">Login Mahasiswa</h1>
<div class="container">
	<?= $this->session->flashdata('msg')?>	
	<?= $this->session->flashdata('msg1')?>	
	<?= $this->session->flashdata('msg2')?>	
	<form  class="form" action="<?php echo base_url('login/aksi_login_mhs'); ?>" method="POST">
		<div class="form-group">
			<label for="npm">NPM :</label>
			<input class="form-control" id="npm" type="text" name="npm" placeholder="Masukan NPM" value="">	
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