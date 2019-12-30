<h1 align="center">Ubah Data Mahasiswa</h1>

<div class="container">
	
<?php if(empty($datamhs)):	
	redirect(base_url().'Myadmin/tambahdata');	
	endif; ?>
	
	<form  class="form" action="<?php echo base_url('Myadmin/aksi_edit_data')?>" method="POST">
		<input type="number" name="id" value="<?php echo $datamhs['id']?>" hidden>
		<div class="form-group">
			<label for="npm">NPM :</label>
			<input class="form-control" id="npm" type="number" name="npm" value="<?php echo $datamhs['npm'] ?>">
			<small class="text-danger"><?php echo form_error('npm'); ?></small>	
		</div>
		<div class="form-group">
			<label for="nama">NAMA :</label>
			<input class="form-control" id="nama" type="text" name="nama" value="<?php echo $datamhs['nama'] ?>">	
			<small class="text-danger"><?php echo form_error('nama'); ?></small>
		</div>
		<div class="form-group">
			<label for="semester">SEMESTER :</label>
			<select class="form-control" id="semester" name="semester">
				<option value="">Semester <?php echo $datamhs['semester'] ?></option>
				<?php for ($i=0; $i < 11 ; $i++) { ?>
					<option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
				<?php } ?> 
				<small class="text-danger"><?php echo form_error('semester'); ?></small>
			</select>
		</div>
		<div class="form-group" align="center">
			<button class="btn btn-primary" style="width: 100px" type="submit" value="Submit">Simpan</button>
		</div>
	</form>
	<br><br>