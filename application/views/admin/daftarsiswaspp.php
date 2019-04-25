<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
			<li class="active">Pembayaran SPP</li>
		</ol>
	</div>
	<div class="container-fluid" style="margin-top:10px;">
		<div class="card">
			<h2 class="card-header">Daftar Siswa Spp</h2>
			<div class="card-body">
				<form method="get" action="">NIS: <input type="text" name="nis" />
					<input type="submit" name="cari" value="Cari Siswa" />
				</form>
			</div>
		</div><br>
		<div class=col-sm-2>
			<div class="form-group">
				<label for="">Tampilkan:</label>
				<select class="form-control" name="" id="">
					<option>Semua Siswa</option>
					<option>Jurusan Ipa</option>
					<option>Jurusan Ips</option>
				</select>
			</div>
		</div>
		<div class=col-sm-2>
			<div class="form-group">
				<label for="">Kelas: </label>
				<select class="form-control" name="" id="">
					<option>Semua Kelas</option>
					<option>10-Ipa-1</option>
					<option>10-Ipa-2</option>
					<option>11-Ipa-1</option>
					<option>11-Ipa-2</option>
					<option>12-Ipa-1</option>
					<option>12-Ipa-2</option>
					<option>10-Ips-1</option>
					<option>10-Ips-2</option>
					<option>11-Ips-1</option>
					<option>11-Ips-2</option>
					<option>12-Ips-1</option>
					<option>12-Ips-2</option>
				</select>
			</div>
		</div>
	</div><br>
	<div class="container col-md-12">
		<table class="table table-striped clickable">
			<thead>
				<tr>
					<th>No</th>
					<th>NISN</th>
					<th>Nama Siswa</th>
					<th>Jenis Kelamin</th>
					<th>Kelas</th>
					<th>Bulan</th>
					<th>Semester</th>
					<th>Tahun Ajaran</th>
					<th>Status Spp</th>
				</tr>
			<tbody>
				<tr>
					<?php
					$this->db->select('nisn,nama_siswa,jenis_kelamin, nama_bulan, semester, tahun_ajaran, status');
					// SELECT 
					$this->db->join('siswa', 'siswa.id_siswa = spp.id_siswa');
					$this->db->join('bulan', 'bulan.id_bulan = spp.id_bulan');
					$this->db->join('semester', 'semester.id_semester = spp.id_semester');
					$q = $this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = spp.id_tahun_ajaran')->get('spp');
					$no = 1;
					foreach ($q->result_array() as $data) : ?>
						<td><?= $no++; ?></td>
						<td><?= $data['nisn']; ?></td>
						<td><?= $data['nama_siswa']; ?></td>
						<td><?= $data['jenis_kelamin']; ?></td>
						<td>Kosong</td>
						<td><?= $data['nama_bulan']; ?></td>
						<td><?= $data['semester']; ?></td>
						<td><?= $data['tahun_ajaran']; ?></td>
						<td><?= $data['status']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
			</thead>
		</table>
	</div>

</div>