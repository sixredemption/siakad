<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="row">
        <ol class="breadcrumb">
          <li><a href="#">
            <em class="fa fa-home"></em>
          </a></li>
          <li class="active">Pengumuman</li>
        </ol>
	  </div>
	  <div class="container-fluid" style="margin-top:40px">	  
	  <form method="post"  action="<?php  echo base_url(). 'admin/addguru'; ?>">
			<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Guru</button>
		</form><br>   

	<table class="table table-striped">
		<thead>
			<tr>
			<th scope="col">Nig</th>
						<th scope="col">Nama</th>
						<th scope="col">Tanggal Lahir</th>
						<th scope="col">Kota Asal</th>
						<th scope="col">Gender</th>
						<th scope="col">Alamat</th>
						<th scope="col">No Telepon</th>
						<th scope="col">Mengajar</th>
						<th scope="col">Status</th>
						<th scope="col">Action</th>
			</tr>
			<tbody>
			<tr>
					 <th scope='row'>17271721721</th>
					 <td>Siboy</td>
					 <td>1998-12-12</td>
					 <td>Zimbawe</td>
					 <td>Laki-Laki</td>
					 <td>Jl.Zimbawe 5</td>
					 <td>0848128121</td>
					 <td>Matematika</td>
					 <td>Guru</td>
					 <td>
					 <button class="btn btn-success fa fa-edit"></button>
					 <button class="btn btn-danger fa fa-trash"></button>
					 </td>
		</tbody>
	</table>
	</div>
	<div>

</div>


















<!-- <div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
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
			<input type="text" name="nig"/>
	            <button class="btn btn-info fa fa-search" type="submit" name="cari" value="cari Guru" ></button>
            </div>
			</div>
		</div>
<<<<<<< HEAD
		</form>
=======
		<!--/.row-->
		
>>>>>>> 5a15ba1fbfb66973b46064ffaaf4008fefa61cd6
		<div class= container>
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Guru</h1>
	        <div class="panel-button-tab-left">

            <button class="btn btn-primary fa fa-user-plus" >Tambah Data</button>
			</div>
			
				<table class="table table-striped">
				<thead>
					<tr>
						<th><font face ="Calibri">NIG</font></th>
						<th><font face ="Calibri">Nama</font></th>
						<th><font face ="Calibri">Tanggal Lahir</font></th>
						<th><font face ="Calibri">Kota Asal</font></th>
						<th><font face ="Calibri">Jenis Kelamin</font></th>
						<th><font face ="Calibri">Alamat</font></th>
						<th><font face ="Calibri">No Telepon</font></th>
						<th><font face ="Calibri">Password</font></th>
						<th><font face ="Calibri">Id Pelajaran</font></th>
						<th><font face ="Calibri"> FOTO </font></th>
						<th><font face ="Calibri"> MENU </font></th>
	                </tr>
					<tbody>

							<?php
							foreach($guru as $dosen) :
							?>
					<tr>
						<td><p><?= $dosen->nig?></p></td>
						<td><p><?= $dosen->nama?></p></td>
						<td><p><?= $dosen->tgl_lahir?></p></td>
						<td><p><?= $dosen->kota_asl?></p></td>
						<td><p><?= $dosen->gender?></p></td>
						<td><p><?= $dosen->alamat?></p></td>
						<td><p><?= $dosen->no_telp?></p></td>
						<td><p><?= $dosen->password?></p></td>
						<td><p><?= $dosen->id_pelajaran?></p></td>
						<td>
						<img src="<?php echo base_url('foto/guru/'.$dosen->foto) ?>" width="64" />
						</td>

					 <td>
					 	<?php echo anchor('C_guru/edit/'.$dosen->id,'Edit'); ?>
						<?php echo anchor('C_guru/delete/'.$dosen->id,'Hapus'); ?> 
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
	
        
        -->