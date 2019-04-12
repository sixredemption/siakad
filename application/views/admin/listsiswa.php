  <div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
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
    
		<div class= container>
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Siswa</h1>
            <div class="panel-button-tab-left">
				
        		<form method="post" action="namafile.html">
				<button type="submit">Link 1</button>
				</form>
            </div>
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
		</div>
</div>
	
        
       