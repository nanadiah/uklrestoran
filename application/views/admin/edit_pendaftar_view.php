<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Pendaftar</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<form action="<?=base_url('index.php');?>/pendaftar/proses_edit" method="post">
				<label>Id pendaftar</label>
				<input type="number" value="<?=$list_pendaftar->id_pendaftar;?>" class="form-control" readonly name="id_pendaftar">
				<br>

				<label>Nama</label>
				<input type="text" value="<?=$list_pendaftar->nama;?>" class="form-control" name="nama">
				<br>

				<label>Telp</label>
				<input type="number" value="<?=$list_pendaftar->telp;?>" class="form-control" name="telp">
				<br>

				<label>Alamat</label>
				<textarea class="form-control" name="alamat"><?=$list_pendaftar->alamat;?></textarea>
				<br>

				<label>Username</label>
				<input type="text" value="<?=$list_pendaftar->username;?>" class="form-control" name="username">
				<br>

				<label>Password</label>
				<input type="text" value="<?=$list_pendaftar->password;?>" class="form-control" name="password">
				<br>

				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>
			<br>
			<a class="btn btn-primary" href="<?=base_url('index.php');?>/pendaftar/list_pendaftar">Kembali</a>
		</div>
	</div>
</div>