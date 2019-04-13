<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">List Guru</li>
			</ol>
		</div>
		<!--/.row-->
		
		<div class= "container-fluid" >
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Pegawai</h1>
	        <div class="panel-button-tab-left">

			<form method="post"  action="<?php  echo base_url(). 'admin/addpegawai'; ?>">
			<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Pegawai</button>
			</form>
			</div>
			
				<table class="table table-striped">
				<thead>
					<tr>
						<th><font face ="Calibri">NIP</font></th>
						<th><font face ="Calibri">Nama</font></th>
						<th><font face ="Calibri">Password</font></th>
						<th><font face ="Calibri">Jenis Kelamin</font></th>
						<th><font face ="Calibri">Foto</font></th>
						<th><font face ="Calibri">Menu</font></th>
					</tr>
					<tbody>

							<?php
							foreach($pegawai as $admin) :
							?>
					<tr>
						<td><p><?= $admin->nip?></p></td>
						<td><p><?= $admin->nama?></p></td>
						<td><p><?= $admin->password?></p></td>
						<td><p><?= $admin->gender?></p></td>
						<td>
							<img src="<?php echo base_url('foto/pegawai/'.$admin->foto) ?>" width="64" />
							</td>
						<td>
					 	<?php echo anchor('C_pegawai/edit/'.$admin->id,'Edit'); ?>
						<?php echo anchor('C_pegawai/delete/'.$admin->id,'Hapus'); ?> 
					 </td>
					</tr>
							<?php endforeach; ?>
					</tbody>
				</thead>
				</table>
			</div>
		</div>
		</div>
</div>

	
        
       