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
	        <label> NIP :</label> 
			<input type="text" name="nip"/>
	            <button class="btn btn-info fa fa-search" type="submit" name="cari" value="cari Guru" ></button>
            </div>
			</div>
		</div>
		<!--/.row-->
		
		<div class= container>
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Pegawai</h1>
	        <div class="panel-button-tab-left">

            <button class="btn btn-primary fa fa-user-plus" >Tambah Data</button>
			</div>
			
				<table class="table table-striped">
				<thead>
					<tr>
						<th><font face ="Calibri">Username</font></th>
						<th><font face ="Calibri">Password</font></th>
						<th><font face ="Calibri">Foto</font></th>
						<th><font face ="Calibri">Menu</font></th>
					</tr>
					<tbody>

							<?php
							foreach($pegawai as $admin) :
							?>
					<tr>
						<td><p><?= $admin->username?></p></td>
						<td><p><?= $admin->password?></p></td>
						<td>
							<img src="<?php echo base_url('foto/pegawai/'.$admin->foto) ?>" width="64" />
							</td>
						<td>
					 	<?php echo anchor('C_pegawai/edit/'.$admin->id_admin,'Edit'); ?>
						<?php echo anchor('C_pegawai/delete/'.$admin->id_admin,'Hapus'); ?> 
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

	
        
       