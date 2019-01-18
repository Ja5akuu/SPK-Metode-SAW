
<div class="container">
	<ol class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li class="active">Data alternatif</li>
	</ol>
	 <?php 
                if ($this->session->flashdata('succes')) {
                        # code...
                    echo 
                    '
                    <div class="alert alert-success" role="alert">
                    '.$this->session->flashdata("succes").'
                    </div>
                    ';
                } elseif ($this->session->flashdata('delete')) {
                	# code...
                	 echo 
                    '
                    <div class="alert alert-danger" role="alert">
                    '.$this->session->flashdata("delete").'
                    </div>
                    ';
                }elseif ($this->session->flashdata('update')) {
                	# code...
                	 echo 
                    '
                    <div class="alert alert-info" role="alert">
                    '.$this->session->flashdata("update").'
                    </div>
                    ';
                }
                ?>
<!-- 	<div id="page-wrapper">
	<div class="row"> -->
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<!-- Default panel contents -->
				<div class="panel-heading">Data alternatif</div>
				<div class="panel-body table-responsive">
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal">Add alternatif</button>
					<br /><br />
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Calon Karyawan</th>
								<th>k1</th>
								<th>k2</th>
								<th>k3</th>
								<th>k4</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($read_alternatif as $data): ?>
								
							
							<tr>
								<td><?php echo  $data->id_alternatif ;?></td>
								<td><?php echo  $data->alternatif ;?></td>
								<td><?php echo  $data->k1 ;?></td>
								<td><?php echo  $data->k2 ;?></td>
								<td><?php echo  $data->k3 ;?></td>
								<td><?php echo  $data->k4 ;?></td>
								<td>														 
									<a href="<?php echo base_url().'alternatif/edit/'.$data->id_alternatif.'';?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>&nbsp;
									<a href="<?php echo base_url().'alternatif/delete/'.$data->id_alternatif.'';?>" class="btn btn-danger btn-sm"  onClick="return confirmDialog()"><i class="fa fa-pencil"></i> Delete</a>
								</td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
					<div>
					</div>
					<div class="panel-footer"><b class="text-primary">By Ternak Code</b><b class="pull-right text-primary">&copy <?php echo date('Y') ?></b></div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">New alternatif</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<?php echo form_open('alternatif/create');?>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nama Calon Karyawan:</label>
										<input type="text" class="form-control" id="nama" name="nama" required="" autocomplete="off">
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label">Pendidikan:</label>
										<input type="number" class="form-control" id="pendidikan" name="pendidikan" autocomplete="off">
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label">Usia:</label>
										<input type="number" class="form-control" id="usia" name="usia" autocomplete="off">
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label">Nilai TES:</label>
										<input type="number" class="form-control" id="tes" name="tes" autocomplete="off">
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label">Keahlian:</label>
										<input type="number" class="form-control" id="keahlian" name="keahlian" autocomplete="off">
									</div>
									<br>
									<div class="form-group">
										<input type="submit" name="" value="Simpan" class="btn btn-lg btn-primary">
									</div>
								 <?php form_close(); ?>
							</div>
							<!-- <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Send message</button>
							</div> -->
						</div>
					</div>
				</div>
				<!-- end modal -->
			</div>
		<!-- 	</div>
		</div> -->
	</div>
