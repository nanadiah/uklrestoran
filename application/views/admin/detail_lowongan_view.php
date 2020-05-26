<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Lowongan</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<label>Id Lowongan</label>
			<input type="text" value="<?=$list_lowongan->id_lowongan;?>" disabled class="form-control">
			<br>

			<label>Posisi</label>
			<input type="text" value="<?=$list_lowongan->posisi;?>" disabled class="form-control">
			<br>

			<label>Job Desc</label>
			<input type="text" value="<?=$list_lowongan->job_des;?>" disabled class="form-control">
			<br>

			<label>Jenis</label>
			<input type="text" value="<?=$list_lowongan->nama_jenis;?>" disabled class="form-control">
			<br>

			<label>Status</label>
			<input type="text" value="<?=$list_lowongan->status_lowongan;?>" disabled class="form-control">
			<br>

			<a class="btn btn-primary" href="<?=base_url('index.php');?>/lowongan">Kembali</a>
		</div>
	</div>
</div>