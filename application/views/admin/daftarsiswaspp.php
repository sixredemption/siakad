<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
					<em class="glyphicon glyphicon-home"></em>
				</a></li>
			<li class="active">Pembayaran SPP</li>
		</ol>
	</div>
	<div class="container-fluid" style="margin-top:10px;">
		
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
					$this->db->select('nisn,nama_kelas,nama_siswa,jenis_kelamin, nama_bulan, semester, tahun_ajaran, status');
					// SELECT 
					$this->db->join('kelas', 'kelas.id_kelas = spp.id_kelas');
					$this->db->join('siswa', 'siswa.id_siswa = spp.id_siswa');
					$this->db->join('bulan', 'bulan.id_bulan = spp.id_bulan');
					$this->db->join('semester', 'semester.id_semester = spp.id_semester');
					$q = $this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = spp.id_tahun_ajaran')->get('spp');
					$no = 1;
					foreach ($q->result_array() as $sp) : ?>
						<td><?= $no++; ?></td>
						<td><?= $sp['nisn']; ?></td>
						<td><?= $sp['nama_siswa']; ?></td>
						<td><?= $sp['jenis_kelamin']; ?></td>
						<td><?= $sp['nama_kelas']; ?></td>
						<td><?= $sp['nama_bulan']; ?></td>
						<td><?= $sp['semester']; ?></td>
						<td><?= $sp['tahun_ajaran']; ?></td>
						<td><?= $sp['status']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
			</thead>
		</table>
	</div>

</div>