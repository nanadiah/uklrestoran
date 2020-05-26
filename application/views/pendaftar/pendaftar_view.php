<script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">History Rekrutmen</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-md"><span class="fa fa-plus"></span> Join Rekrutmen </button>

			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			      	<form method="post" action="<?=base_url('index.php')?>/transaksi/add_transaksi">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Join Rekrutmen</h4>
				        </div>
				        <div class="modal-body">
				        	<div class="panel-body">
					          	<div class="form-group">
					          		
					          	</div>
					          	<br>
					          	<div class="form-group">
					          		<textarea class="form-control" placeholder="Job Desc" name="job_desc"></textarea>
					          	</div>
					          	<br>
					          	<label> Makanan 1</label>
					          	<div class="form-group">
					          		<select class="form-control" name="lowongan[]">
					          			<option value="" disabled>---- Pilih Lowongan ----</option>
						          		<?php foreach ($list_lowongan as $lowongan): ?>
						          			<option value="<?=$lowongan->id_lowongan;?>"><?=$lowongan->posisi." - ".$lowongan->nama_jenis;?></option>
						          		<?php endforeach ?>
					          		</select>
					          	</div>
					          	<br>
					          	<div class="form-group">
					          		<textarea class="form-control" placeholder="Keterangan " name="keterangan_lowongan[]"></textarea>
					          	</div>
					          	<br>
					          	<div id="insert-form"></div>
					          	<button type="button" class="btn btn-primary" id="btn-tambah-lowongan">Join Rekrutmen</button>
					          	<button type="button" class="btn btn-primary" id="btn-reset-lowongan">Reset Lowongan</button>
					        </div>
				        </div>
				        <div class="modal-footer">
				        	<input type="hidden" id="jumlah-form" value="1">
				        	<button type="submit" class="btn btn-info">Submit</button>
				          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
			        </form>
			      </div>
			      
			    </div>
			    <script>
				//	$(document).ready(function(){
				//	  	$("#btn-tambah-lowongan	").click(function(){
				//	  		var jumlah = parseInt($("#jumlah-form").val());
				//	  		var nextform = jumlah + 1;

				//	  		$("#insert-form").append(
				//	  			'<label> Lowongan '+nextform+'</label>'+
				//	  			'<div class="form-group">'+
				//	          		'<select class="form-control" name="lowongan[]">'+
				//	          			'<option value="" disabled>---- Pilih Lowongan ----</option>'+
				//		          		'<?php foreach ($list_lowongan as $lowongan): ?>'+
				//		          			'<option value="<?=$lowongan->id_lowongan;?>"><?=$lowongan->posisi." - ".$lowongan->nama_jenis;?></option>'+
				//		          		'<?php endforeach ?>'+
				//	          		'</select>'+
				//	          	'</div>'+
				//	          	'<br>'+
				//	          	'<div class="form-group">'+
				//	          		'<textarea class="form-control" placeholder="Keterangan Lowongan" name="keterangan_lowongan[]""></textarea>'+
				//	          	'</div>'+
				//	          	'<br>'
				//	  		);
				//		  	$("#jumlah-form").val(nextform);
				//		});

				//		$("#btn-reset-lowongan").click(function(){
				//			$("#insert-form").html("");
				//			$("#jumlah-form").val("1");
				//		});
				//	});
				</script>
			  </div>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>Tanggal</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($list_transaksi as $transaksi): ?>
						<tr>
							<td><?=$no;?></td>
							<td><?=$transaksi->tanggal;?></td>
							<td>
								<span class="label <?php if($transaksi->status == 'pending'):?>label-warning<?php elseif($transaksi->status == 'success'):?>label-success<?php endif;?>">
                                        <?php if($transaksi->status == 'pending'):?>
                                        	Waiting 
                                        <?php elseif($transaksi->status == 'success'):?>
                                        	Success
                                    	<?php endif;?>
                                    </span>
							</td>
						</tr>
					<?php $no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>