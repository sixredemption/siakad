<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
			<li class="active">List Guru</li>
		</ol><br>
		<div class="col-lg-10">
			<form role="search">
				<div class="form-group" method="get" action="">
					<label>NIG:</label>
					<input type="text" name="nig_guru" />
					<button class="btn btn-info fa fa-search" type="submit" name="cari" value="cari Guru"></button>
				</div>
		</div>
	</div>
	<!--/.row-->

	<div class = container>
		<div class = "row">
			<div class = "col-lg-12">
				<h1 class = "page-header">Daftar Guru</h1>
				<div class = "panel-button-tab-left">

				<button class = "btn btn-primary fa fa-user-plus">...</button>
				</div>

				<table class = "table table-striped">
					<thead>
						<tr>
							<th>
								<font face = "Calibri" >NIG</font>
							</th>
							<th>
								<font face = "Calibri" >Nama</font>
							</th>
							<th>
							 	<font face = "Calibri" >Tanggal Lahir</font>
							</th>
							<th>
								<font face = "Calibri" >Kota Asal</font>
							</th>
							<th>
								<font face = "Calibri" >Jenis Kelamin</font>
							</th>
							<th>
								<font face = "Calibri" >Alamat</font>
							</th>
							<th>
								<font face = "Calibri" >No Telepon</font>
							</th>
							<th>
								<font face = "Calibri" >FOTO</font>
							</th>
						</tr>
					</tbody>

					<?php
					foreach ($guru as $dosen) :
						?>
						<tr>
							<td>
								<p><?= $dosen->nig_guru ?></p>
							</td>
							<td>
								<p><?= $dosen->nama_lengkap ?></p>
							</td>
							<td>
								<p><?= $dosen->tanggal_lahir ?></p>
							</td>
							<td>
								<p><?= $dosen->asal_kota ?></p>
							</td>
							<td>
								<p><?= $dosen->jenis_kelamin ?></p>
							</td>
							<td>
								<p><?= $dosen->alamat ?></p>
							</td>
							<td>
								<p><?= $dosen->no_telp ?></p>
							</td>
							<td>
								<img src="<?php echo base_url('foto/guru/' . $dosen->foto_profile) ?>" width="64" />
							</td>
