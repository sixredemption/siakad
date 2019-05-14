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
			<div class="panel-button-tab-left">				
			<form method="post"  action="<?php  echo base_url(). 'admin/addsiswa'; ?>">
				<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Siswa</button>
			</form>
			</div>	<br>
			<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Siswa</div>
						<div class="panel-body">
							<table data-toggle="table" data-url="<?base_url('assets_admin')?>/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								<thead>
								    <tr>
											<th><font face ="Calibri"> No </font></th>
											<th data-sortable="true"><font face ="Calibri"> Nisn </font></th>
											<th data-sortable="true"><font face ="Calibri"> Nama Siswa </font></th>
											<th><font face ="Calibri"> Tanggal Lahir </font></th>
											<th><font face ="Calibri"> Jenis Kelamin </font></th>
											<th><font face ="Calibri"> Kelas </font></th>
											<th data-sortable="true"><font face ="Calibri"> Kota </font></th>
											<th><font face ="Calibri"> Alamat</font></th>
											<th><font face ="Calibri"> No Telepon </font></th>
											<th data-sortable="true"><font face ="Calibri"> foto </font></th>
											<th><font face ="Calibri"> Menu </font></th>
									</tr>
						    	</thead>
							<tbody>
									<?php  $nomor =1; ?>
										<?php 
											foreach($siswa  as $murid):
											?>
									<tr>
										<td><?php echo $nomor; ?></td>
										<td><p><?=  $murid->nisn?></p></td>
										<td><p><?=  $murid->nama_siswa?></p></td>
										<td><p><?=  $murid->tanggal_lahir?></p></td>
										<td><p><?=  $murid->jenis_kelamin?></p></td>
										<td><p><?=  $murid->id_kelas?></p></td>
										<td><p><?=  $murid->kota?></p></td>
										<td><p><?=  $murid->alamat?></p></td>
										<td><p><?=  $murid->no_telp?></p></td>
									
										<td>
										<img src="<?php echo base_url('foto/siswa/'.$murid->foto) ?>" width="64" />
										</td>
										<td>
										<?php echo anchor('Admin/siswaEdit/'.$murid->id_siswa,'<span class="glyphicon glyphicon-pencil">'); ?>
						
										<?php  echo anchor('Admin/siswaDelete/'.$murid->id_siswa, '<span class="glyphicon glyphicon-trash">'); ?>
						
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
	
