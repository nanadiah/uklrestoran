<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Lowongan</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-md"><span class="fa fa-plus"></span> Tambah Lowongan</button>

			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			      	<form method="post" action="<?=base_url('index.php');?>/lowongan/add_lowongan">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Lowongan Pekerjaan</h4>
				        </div>
				        <div class="modal-body">
				        	<div class="panel-body">
					          	<div class="form-group">
					          		<input type="text" name="posisi" placeholder="Posisi Bagian" class="form-control">
					          	</div>
					          	<br> 
					          	<div class="form-group">
					          		<input type="text" name="job_des" placeholder="Job Desc" class="form-control">
					          	</div>
					          	<br>
					          	<div class="form-group">
					          		<select class="form-control" name="id_jenis">
					          			<?php foreach ($list_jenis as $jenis): ?>
					          				<option value="<?=$jenis->id_jenis;?>"><?=$jenis->nama_jenis?></option>
					          			<?php endforeach ?>
					          		</select>
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
						<th>#</th>
						<th>Posisi Bagian</th>
						<th>Job Desc</th>
						<th>Jenis</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						foreach ($list_lowongan as $lowongan) {
						?>
							<tr>
								<td><?=$no;?></td>
								<td><?=$lowongan->posisi;?></td>
								<td><?=$lowongan->job_des;?></td>
								<td><?=$lowongan->nama_jenis;?></td>
								<td>
									<span class="label <?php if($lowongan->status_lowongan == 'tersedia'):?>label-success<?php elseif($lowongan->status_lowongan == 'tidak_ada'):?>label-danger<?php endif;?>">
                                        <?=$lowongan->status_lowongan;?>
                                    </span>
                                </td>
								<td>
									<a href="<?=base_url("index.php");?>/lowongan/detail_lowongan/<?=$lowongan->id_lowongan;?>" class="btn btn-info btn-sm"><i class="fa fa-eye fa-lg"></i></a>

									<a href="<?=base_url("index.php");?>/lowongan/edit_lowongan/<?=$lowongan->id_lowongan;?>" class="btn btn-primary btn-sm"><i class="fa fa-edit fa-lg"></i></a>

									<a href="<?=base_url("index.php");?>/lowongan/delete_lowongan/<?=$lowongan->id_lowongan;?>" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-lg"></i></a>
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