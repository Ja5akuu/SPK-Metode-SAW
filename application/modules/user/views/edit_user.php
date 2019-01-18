<div class="container">

	<ol class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li><a href="alternatif.php">Data Kriteria</a></li>
		<li class="active">Edit Data Kriteria</li>
	</ol>
	<!-- Main component for a primary marketing message or call to action -->
	<div class="panel panel-primary">
		<!-- Default panel contents -->
		<div class="panel-heading">Edit Data Kriteria</div>
		<div class="panel-body">
			<?php
			foreach ($user as $data) {

				?>
				<?php echo form_open('user/update');?>
				<div class="box-body">
					<div class="form-group">
						<label for="alternatif">Username</label>
						<input type="hidden" class="form-control" name="id_user" id="id_kriteria"  value="<?php echo $data->id_user ;?>">

						<input type="text" class="form-control" name="username" id="username"  value="<?php echo $data->user ;?>">
					</div>
					<div class="form-group">
						<label for="bobot">Password</label>
						<input type="text" class="form-control" name="password" id="password" value="<?php echo $data->password ;?>" >
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">level</label>
						<select name="level" id="level" class="form-control">
							<option value="manager">Manager</option>
							<option value="admin">Admin</option>
						</select>
					</div>
				</div><!-- /.box-body -->

				<div class="box-footer">
					<a href="<?php echo base_url()?>kriteria" type="cancel" class="btn btn-warning">Cancel</a>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
				<?php form_close(); ?>
				<?php
			}
			?>
		</div>
		<div class="panel-footer"><b class="text-primary">By Ternak Code</b><b class="pull-right text-primary">&copy <?php echo date('Y') ?></b></div>
	</div>
</div>