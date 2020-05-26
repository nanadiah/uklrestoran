<!-- OVERVIEW -->
<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Semangat PW banget!</h3>
		<p class="panel-subtitle">Period: Des 01, 2019 - Des 07, 2019</p>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-download"></i></span>
					<p>
						<span class="number"><?=count($list_transaksi);?></span>
						<span class="title">Rekrutmen</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-shopping-bag"></i></span>
					<p>
						<span class="number"><?=count($list_pelanggan);?></span>
						<span class="title">Pendaftar</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-eye"></i></span>
					<p>
						<span class="number"><?=count($list_admin);?></span>
						<span class="title">Perusahaan</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-bar-chart"></i></span>
					<p>
						<span class="number"><?=count($list_masakan);?></span>
						<span class="title">Lowongan</span>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h1 class="heading">Rekrutmen</h1>
				<div id="headline-chart1" class="ct-chart"></div>
			</div>
		</div>
	</div>
</div>