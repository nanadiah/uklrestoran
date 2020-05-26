<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Pendaftar</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<label>Id Pendaftar</label>
			<input type="text" value="<?=$list_pendaftar->id_pendaftar;?>" disabled class="form-control">
			<br>

			<label>Nama</label>
			<input type="text" value="<?=$list_pendaftar->nama;?>" disabled class="form-control">
			<br>

			<label>Telp</label>
			<input type="text" value="<?=$list_pendaftar->telp;?>" disabled class="form-control">
			<br>

			<label>Alamat</label>
			<textarea disabled class="form-control"><?=$list_pendaftar->alamat;?></textarea>
			<br>

			<label>Username</label>
			<input type="text" value="<?=$list_pendaftar->username;?>" disabled class="form-control">
			<br>

			<label>Password</label>
			<input type="text" value="<?=$list_pendaftar->password;?>" disabled class="form-control">
			<br>

			<a class="btn btn-primary" href="<?=base_url('index.php');?>/Pendaftar/list_pendaftar">Kembali</a>
		</div>
	</div>
</div>