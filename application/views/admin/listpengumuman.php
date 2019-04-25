<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">List Pengumuman</li>
			</ol><br>
			</div>
		</div>

		<div class= container>
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Pengumuman</h1>
            <div class="panel-button-tab-left">
				
        		<!-- <form method="post" action="namafile.html">
				<button type="submit">Link 1</button>
				</form> -->
            </div>
				<table class="table table-striped">
				<thead>
					<tr>
						<th><font face ="Calibri"> NO </font></th>
						<th><font face ="Calibri"> JUDUL </font></th>
						<!-- <th><font face ="Calibri"> PASSWORD </font></th> -->
						<th><font face ="Calibri"> TANGGAL </font></th>
						<th><font face ="Calibri"> ISI </font></th>
						<th><font face ="Calibri"> MENU </font></th>
                    </tr>
					<tbody>
								<?php  $nomor =1; ?>
								<?php 
								foreach($pengumuman  as $umum):
								?>
						<tr>
							<td><?php echo $nomor; ?></td>
                            <td><p><?=  $umum->judul?></p></td>
                            <td><p><?=  $umum->tanggal?></p></td>
                            <td><p><?=  $umum->keterangan?></p></td>													
							<td>
							<?php echo anchor('Siswa/edit/'.$umum->id,'Edit'); ?>
                              <?php echo anchor('Siswa/delete/'.$umum->id,'Hapus'); ?>
							</td>
						</tr>
						<?php $nomor++; ?>
						<?php endforeach; ?>
					</tbody>	
	        </table>
			</div>
		</div>
</div>
	
        
       