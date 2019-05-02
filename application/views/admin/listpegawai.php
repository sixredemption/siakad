<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">List Pegawai</li>
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
			</div><br>
			<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Pegawai</div>
						<div class="panel-body">
							<table data-toggle="table" data-url="<?base_url('assets_admin')?>/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								<thead>
								<tr>
									<th><font face ="Calibri">No </font></th>
									<th><font face ="Calibri">Username</font></th>
									<th><font face ="Calibri">Password</font></th>
									<th><font face ="Calibri">Foto</font></th>
									<th><font face ="Calibri">Menu</font></th>
								</tr>
						    	</thead>
								<tbody>
							<?php  $nomor =1; ?>
							<?php
							foreach($admin as $pegawai) :
							?>
								<tr>
									<td><?php echo $nomor; ?></td>
									<td><p><?= $pegawai->username?></p></td>
									<td><p><?= $pegawai->password?></p></td>
									<td>
										<img src="<?php echo base_url('foto/pegawai/'.$pegawai->foto) ?>" width="64" />
										</td>
									<td>
									<?php echo anchor('Admin/pegawaiEdit/'.$pegawai->id_admin,'<span class="glyphicon glyphicon-pencil"></span>'); ?>
									<?php echo anchor('Admin/pegawaiDelete/'.$pegawai->id_admin,'<span class="glyphicon glyphicon-trash"></span>'); ?> 
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
