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
				</tbody>
			</table>
			</div>
</div>