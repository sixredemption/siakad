  <div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">List Siswa</li>
			</ol>
		</div>
  
	<div class= container>
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Siswa</h1>
			<div class="panel-button-tab-left">				
			<form method="post"  action="<?php  echo base_url(). 'admin/addsiswa'; ?>">
				<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Siswa</button>
			</form>
			</div>	<br>
			<table class="table table-striped">
				<thead>
					<tr>
						<th><font face ="Calibri"> NO </font></th>
						<th><font face ="Calibri"> nisn </font></th>
						<th><font face ="Calibri"> nama_siswa </font></th>
						<th><font face ="Calibri"> tanggal_lahir </font></th>
						<th><font face ="Calibri"> jenis_kelamin </font></th>
						<th><font face ="Calibri"> id_kelas </font></th>
						<th><font face ="Calibri"> kota </font></th>
						<th><font face ="Calibri"> alamat</font></th>
						<th><font face ="Calibri"> no_telp </font></th>
						<th><font face ="Calibri"> password </font></th>
						<th><font face ="Calibri"> foto </font></th>
						<th><font face ="Calibri"> menu </font></th>
                    </tr>
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
								<td><p><?=  $murid->password?></p></td>
								<td>
								<img src="<?php echo base_url('foto/siswa/'.$murid->foto) ?>" width="64" />
								</td>
								<td>
								<?php echo anchor('Admin/siswaEdit/'.$murid->id_siswa,'Edit'); ?>
								<?php echo anchor('Admin/siswaDelete/'.$murid->id_siswa,'Hapus'); ?>
								</td>
							</tr>
							<?php $nomor++; ?>
							<?php endforeach; ?>
						</tbody>	
				</table>
			</div>
			<div>
</div>
