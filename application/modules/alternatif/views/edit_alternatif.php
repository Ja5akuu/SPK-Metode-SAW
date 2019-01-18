<div class="container">

	<ol class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li><a href="alternatif.php">Data alternatif</a></li>
		<li class="active">Edit Data alternatif</li>
	</ol>
	<!-- Main component for a primary marketing message or call to action -->
	<div class="panel panel-primary">
		<!-- Default panel contents -->
		<div class="panel-heading">Edit Data alternatif</div>
		<div class="panel-body">
			<?php
			foreach ($alternatif as $data) {

				?>
				<?php echo form_open('alternatif/update');?>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Nama Calon Karyawan:</label>
					<input type="hidden" class="form-control" id="id_alternatif" name="id_alternatif" autocomplete="off" required="" value="<?php echo $data->id_alternatif ?>">
					<input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required="" value="<?php echo $data->alternatif ?>">
				</div>
				<div class="form-group">
					<label for="message-text" class="col-form-label">Pendidikan:</label>
					<input type="number" class="form-control" id="pendidikan" name="pendidikan" autocomplete="off" value="<?php echo $data->k1 ?>">
				</div>
				<div class="form-group">
					<label for="message-text" class="col-form-label">Usia:</label>
					<input type="number" class="form-control" id="usia" name="usia" autocomplete="off" value="<?php echo $data->k2 ?>">
				</div>
				<div class="form-group">
					<label for="message-text" class="col-form-label">Nilai TES:</label>
					<input type="number" class="form-control" id="tes" name="tes" autocomplete="off" value="<?php echo $data->k3 ?>">
				</div>
				<div class="form-group">
					<label for="message-text" class="col-form-label">Keahlian:</label>
					<input type="number" class="form-control" id="keahlian" name="keahlian" autocomplete="off" value="<?php echo $data->k4 ?>">
				</div>
				<br>
				<div class="form-group">
					<input type="submit" name="" value="Update" class="btn btn-lg btn-primary">
				</div>
				<?php form_close(); ?>
				<?php
			}
			?>
		</div>
		<div class="panel-footer"><b class="text-primary">By Ternak Code</b><b class="pull-right text-primary">&copy <?php echo date('Y') ?></b></div>
	</div>
</div>