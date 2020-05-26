<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Lowongan</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<form action="<?=base_url('index.php');?>/lowongan/proses_edit" method="post">
				<label>Id Lowongan</label>
				<input type="number" value="<?=$list_lowongan->id_lowongan;?>" class="form-control" readonly name="id_lowongan">
				<br>

				<label>Posisi</label>
				<input type="text" value="<?=$list_lowongan->posisi;?>" class="form-control" name="posisi">
				<br>

				<label>Job Desc</label>
				<input type="text" value="<?=$list_lowongan->job_des;?>" class="form-control" name="job_des">
				<br>

				<label>Jenis</label>
          		<select class="form-control" name="id_jenis" readonly>
      				<option value="<?=$list_lowongan->nama_jenis;?>"><?=$list_lowongan->nama_jenis?></option>
          		</select>
          		<br>

				<label>Status</label>
				<select name="status_lowongan" class="form-control">
					<option value="ada" <?php if($list_lowongan->status_lowongan == 'tersedia'):?>selected <?php endif;?>>Ada</option>
					<option value="tidak_tersedia" <?php if($list_lowongan->status_lowongan == 'tidak_tersedia'):?>selected <?php endif;?>>Tidak Tersedia</option>
				</select>
				<br>

				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>
			<br>
			<a class="btn btn-primary" href="<?=base_url('index.php');?>/lowongan">Kembali</a>
		</div>
	</div>
</div>