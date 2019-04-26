<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
			<li class="active">List Guru</li>
		</ol>
	</div>

	<div class=container>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Guru</h1>
				<div class="panel-button-tab-left">
					<form method="post" action="<?php echo base_url() . 'admin/addguru'; ?>">
						<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Guru</button>
					</form>
				</div>

				<table class="table table-striped">
					<thead>
						<tr>
							<th>
								<font face="Calibri">NIG</font>
							</th>
							<th>
								<font face="Calibri">Nama</font>
							</th>
							<th>
								<font face="Calibri">Tanggal Lahir</font>
							</th>
							<th>
								<font face="Calibri">Kota Asal</font>
							</th>
							<th>
								<font face="Calibri">Jenis Kelamin</font>
							</th>
							<th>
								<font face="Calibri">Alamat</font>
							</th>
							<th>
								<font face="Calibri">No Telepon</font>
							</th>
							<th>
								<font face="Calibri">Password</font>
							</th>
							<!-- <th>
								<font face="Calibri">Id Pelajaran</font>
							</th> -->
							<th>
								<font face="Calibri"> FOTO </font>
							</th>
							<!-- <th>
								<font face="Calibri"> MENU </font>
							</th> -->
						</tr>
					<tbody>

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
									<p><?= $dosen->password ?></p>
								</td>
								<!-- <td>
							
												</td> -->
								<td>
									<img src="<?php echo base_url('foto/guru/' . $dosen->foto) ?>" width="64" />
								</td>

								<td>
									<?php echo anchor('guru/edit/' . $dosen->id_guru, 'Edit'); ?>
									<?php echo anchor('guru/delete/' . $dosen->id_guru, 'Hapus'); ?>
								</td>
							</tr>
						<?php endforeach; ?>
						<button class="btn btn-success fa fa-edit"></button>
						<button class="btn btn-danger fa fa-trash"></button>
						</td>
						</tr>
					</tbody>
					</thead>
				</table>
			</div>
		</div>
	</div>
