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
	  <form method="post"  action="<?php  echo base_url(). 'admin/addsiswa'; ?>">
			<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Siswa</button>
		</form><br>   

	  <table class="table table-striped">
				<thead>
					<tr>
										<th>Nis</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Kota Asal</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                    <th>No Telepon</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
  			<tbody>
								<th scope='row'>17271721721</th>
										<td>KAnjeng</td>
										<td>1998-12-12</td>
										<td>Zimbawe</td>
										<td>Laki-Laki</td>
										<td>Jl.Zimbawe 5</td>
										<td>Ipa</td>
										<td>Ipa2</td>
										<td>084818121</td>
										<td>Siswa</td>
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
				<li class="active">List Siswa</li>
			</ol><br>
			<div class="col-lg-10">
            <form role="search">
			<div class="form-group" method="get" action="">
	        <label>NIS:</label> 
			<input type="text" name="nis"/>
	            <button class="btn btn-info fa fa-search" type="submit" name="cari" value="cari Siswa" ></button>
            </div>
			</div>
		</div>
<<<<<<< HEAD
=======
    
>>>>>>> 5a15ba1fbfb66973b46064ffaaf4008fefa61cd6
		<div class= container>
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Siswa</h1>
            <div class="panel-button-tab-left">
<<<<<<< HEAD
			
         </div>
=======
				
        		<form method="post" action="namafile.html">
				<button type="submit">Link 1</button>
				</form>
            </div>
>>>>>>> 5a15ba1fbfb66973b46064ffaaf4008fefa61cd6
				<table class="table table-striped">
				<thead>
					<tr>
						<th><font face ="Calibri"> NO </font></th>
						<th><font face ="Calibri"> NIS </font></th>
						<!-- <th><font face ="Calibri"> PASSWORD </font></th> -->
						<th><font face ="Calibri"> NAMA </font></th>
						<th><font face ="Calibri"> TANGGAL LAHIR </font></th>
						<th><font face ="Calibri"> GENDER </font></th>
						<th><font face ="Calibri"> JURUSAN </font></th>
						<th><font face ="Calibri"> KELAS </font></th>
						<th><font face ="Calibri"> KOTA ASAL </font></th>
						<th><font face ="Calibri"> ALAMAT </font></th>
						<th><font face ="Calibri"> NO TELP </font></th>
						<th><font face ="Calibri"> FOTO </font></th>
						<th><font face ="Calibri"> MENU </font></th>
                    </tr>
					<tbody>
								<?php  $nomor =1; ?>
								<?php 
								foreach($siswa  as $murid):
								?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td><p><?=  $murid->nis?></p></td>
							
							<td><p><?=  $murid->nama?></p></td>
							<td><p><?=  $murid->tgl_lahir?></p></td>
							<td><p><?=  $murid->gender?></p></td>
							<td><p><?=  $murid->id_jurusan?></p></td>
							<td><p><?=  $murid->kelas?></p></td>
							<td><p><?=  $murid->kota_asl?></p></td>
							<td><p><?=  $murid->alamat?></p></td>
							<td><p><?=  $murid->no_telp?></p></td>
							<td>
							<img src="<?php echo base_url('foto/siswa/'.$murid->foto) ?>" width="64" />
							</td>
							
							<td>
							<?php echo anchor('C_siswa/edit/'.$murid->id,'Edit'); ?>
                              <?php echo anchor('C_siswa/delete/'.$murid->id,'Hapus'); ?>
							</td>
						</tr>
						<?php $nomor++; ?>
						<?php endforeach; ?>
					</tbody>	
	        </table>
			</div>
			<div>
		<form method="post"  action="<?php  echo base_url(). 'tombol/link'; ?>">
			<button id="submit-buttons" type="submit" ​​​​​>Submit 1</button>
		</form>   
	</div>
		</div>
</div>
	
        
        -->