<h1 align="center">Tambah Data Mahasiswa</h1>
<div class="container">
<?= $this->session->flashdata('message')?>	
<?= $this->session->flashdata('message1')?>	
<?= $this->session->flashdata('message2')?>	
<?= $this->session->flashdata('message3')?>	
	<form  class="form" action="<?php echo base_url('Myadmin/aksi_tambah_data')?>" method="POST">
		<div class="form-group">
			<label for="npm">NPM :</label>
			<input class="form-control" id="npm" type="number" name="npm" placeholder="Masukan NPM" maxlength="8" value="<?= set_value('npm');?>">	
			<small class="text-danger"><?php echo form_error('npm'); ?></small>
		</div>
		<div class="form-group">
			<label for="nama">NAMA :</label>
			<input class="form-control" id="nama" type="text" name="nama" placeholder="Masukan Nama" value="<?= set_value('nama');?>">	
			<?php echo form_error('nama','<small class="text-danger">','</small>'); ?>
		</div>
		<div class="form-group">			
			<label for="semester">SEMESTER :</label>
			<select class="form-control" id="semester" name="semester" value="<?= set_value('semester');?>">
				<option value="">-Pilih Semester-</option>
				<?php for ($i=0; $i < 11 ; $i++) { ?>
					<option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
				<?php } ?> 					
			</select>
			<small class="text-danger"><?php echo form_error('semester'); ?></small>
		</div>
		<div class="form-group" align="center">
			<button class="btn btn-primary" style="width: 100px" type="submit" value="Submit">Simpan</button>
		</div>
	</form>
	<br><br>

	<form>
		<table class="table table-bordered table-stripped table-hover">
			<caption>Data Mahasiswa</caption>
			<thead align="center">
				<tr>
					<td>ID</td>
					<td>NPM</td>
					<td>NAMA</td>
					<td>SEMESTER</td>
					<td colspan="2">OPSI</td>
				</tr>
			</thead>

			<tbody align="center">
				<?php 
				$no=1;
				foreach ($tampil as $tpl) { ?>

					<!-- POP-UP KONPIRMASI -->
					<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h3 id="myModalLabel">Konfirmasi Hapus</h3>

								</div>
								<div class="modal-body">
									<p class="error-text"><i class="fa fa-warning modal-icon"></i>Anda yakin akan menghapus data mahasiswa ini?
										<br>Data yang terhapus tidak dapat dikembalikan.</p>
									</div>
									<div class="modal-footer">
										<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Kembali</button> <a href="<?php echo base_url('Myadmin/hapus/'.$tpl->id)?>" class="btn btn-danger" id="modalDelete" >Hapus</a>

									</div>
								</div>
							</div>
						</div>

						<?php 
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$tpl->npm."</td>";
						echo "<td>".$tpl->nama."</td>";
						echo "<td>".$tpl->semester."</td>";?>
						<td style="vertical-align: middle;"><a href="<?php echo base_url('Myadmin/editdata/'.$tpl->id)?>" class="btn btn-success btn-sm">Edit</a></td>
						<td style="vertical-align: middle;"><a href="#myModal" data-toggle="modal" class="btn btn-danger btn-sm">Hapus</a></td>
						<?php echo "</tr>";
						$no++; 
					}			
					?>		
				</tbody>
			</table>
		</form>
	</div>

