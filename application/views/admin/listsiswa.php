<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">List Siswa</li>
			</ol>
		</div>
  
	<div class= container-fluid>
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Siswa</h1>
			<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Siswa</div>
						<div class="panel-body timeline-container">
						<form method="post"  action="<?php  echo base_url(). 'admin/addsiswa'; ?>">
							<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Siswa</button>
						</form>
							<table data-toggle="table" data-url="<?base_url('assets_admin')?>/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								<thead>
								    <tr>
											<th><font face ="Calibri"> No </font></th>
											<th data-sortable="true"><font face ="Calibri"> Nisn </font></th>
											<th data-sortable="true"><font face ="Calibri"> Nama Siswa </font></th>
											<th><font face ="Calibri"> Tanggal Lahir </font></th>
											<th><font face ="Calibri"> Jenis Kelamin </font></th>
											<th><font face ="Calibri"> Kelas </font></th>
											<th><font face ="Calibri"> Jurusan </font></th>
											<th data-sortable="true"><font face ="Calibri"> Kota </font></th>
											<th><font face ="Calibri"> Alamat</font></th>
											<th><font face ="Calibri"> No Telepon </font></th>
											<th data-sortable="true"><font face ="Calibri"> foto </font></th>
											<th><font face ="Calibri"> Menu </font></th>
									</tr>
						    	</thead>
							<tbody>
							<?php
									$this->db->select('nisn,nama_siswa,tanggal_lahir,jenis_kelamin, nama_kelas, nama_jurusan, kota, alamat, no_telp, foto, id_siswa');
									// SELECT 
										 $this->db->join('jurusan', 'jurusan.id_jurusan = siswa.id_jurusan');
									$q = $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas')->get('siswa');
									$nomor = 1;
									foreach ($q->result_array() as $murid) : ?>
									<tr>
										<td><?php echo $nomor; ?></td>
										<td><p><?=  $murid['nisn']?></p></td>
										<td><p><?=  $murid['nama_siswa']?></p></td>
										<td><p><?=  $murid['tanggal_lahir']?></p></td>
										<td><p><?=  $murid['jenis_kelamin']?></p></td>
										<td><p><?=  $murid['nama_kelas']?></p></td>
										<td><p><?=  $murid['nama_jurusan']?></p></td>
										<td><p><?=  $murid['kota']?></p></td>
										<td><p><?=  $murid['alamat']?></p></td>
										<td><p><?=  $murid['no_telp']?></p></td>
									
										<td>
										<img src="<?php echo base_url('foto/siswa/'.$murid['foto']) ?>" width="64" />
										</td>
										<td>
										<?php echo anchor('Admin/siswaEdit/'.$murid['id_siswa'],'<button class="btn btn-primary margin" type="button"><span class="fa fa-pencil"></span> </button>'); ?>
						
										<?php  echo anchor('Admin/siswaDelete/'.$murid['id_siswa'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
						
										</i>
										</td>
									</tr>
									<?php $nomor++; ?>
									<?php endforeach; ?>
							</tbody>	
						</table>
					</div>
				</div>
			</div>
		</div>
