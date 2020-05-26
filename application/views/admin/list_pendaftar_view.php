<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Pendaftar</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-md"><span class="fa fa-plus"></span> Tambah Pendaftar</button>

			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			      	<form method="post" action="<?=base_url('index.php');?>/pendaftar/add_pendaftar">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Data Diri Pendaftar</h4>
				        </div>
				        <div class="modal-body">
				        	<div class="panel-body">
					          	<div class="form-group">
					          		<input type="text" name="nama" placeholder="Nama" class="form-control">
					          	</div>
					          	<br> 
					          	<div class="form-group">
					          		<input type="number" name="telp" placeholder="Telepon" class="form-control">
					          	</div>
					          	<div class="form-group">
					          		<textarea name="alamat" placeholder="Alamat" class="form-control"></textarea>
					          	</div>
					          	<div class="form-group">
					          		<input type="text" name="username" placeholder="Username" class="form-control">
					          	</div>
					          	<div class="form-group">
					          		<input type="text" name="password" placeholder="Password" class="form-control">
					          	</div>
					        </div>
				        </div>
				        <div class="modal-footer">
				        	<button type="submit" class="btn btn-primary">Submit</button>
				          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
			        </form>
			      </div>
			      
			    </div>
			</div>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>No. Telepon</th>
						<th>Username</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						foreach ($list_pendaftar as $pendaftar) {
						?>
							<tr>
								<td><?=$no;?></td>
								<td><?=$pendaftar->nama;?></td>
								<td><?=$pendaftar->telp;?></td>
								<td><?=$pendaftar->username;?></td>
								<td>
									<a href="<?=base_url("index.php");?>/pendaftar/detail_pendaftar/<?=$pendaftar->id_pendaftar;?>" class="btn btn-info btn-sm"><i class="fa fa-eye fa-lg"></i></a>

									<a href="<?=base_url("index.php");?>/pendaftar/edit_pendaftar/<?=$pendaftar->id_pendaftar;?>" class="btn btn-primary btn-sm"><i class="fa fa-edit fa-lg"></i></a>

									<a href="<?=base_url("index.php");?>/pendaftar/delete_pendaftar/<?=$pendaftar->id_pendaftar;?>" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-lg"></i></a>
								</td>
							</tr>
						<?php
						$no++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>