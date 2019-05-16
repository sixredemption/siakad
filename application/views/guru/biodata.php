 <div class="container">
 	<section class="content">
 	
		<div class="breadcrumbs">
				<div class="col-sm-4">
					<div class="page-header float-left">
						<div class="page-title">
							<h1>Menu</h1>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="page-header float-right">
						<div class="page-title">
							<ol class="breadcrumb text-right">
								<li><a href="#">Menu</a></li>
								<li class="active">Biodata</li>
							</ol>
						</div>
					</div>
				</div>
		</div>

		<div class="jumbotron text-center"> 
		<h3> Biodata Guru </h3>
		</section> 
		</div>
				
		<div class="card-body">
			<table class="table">
				<tr>
					<td rowspan="15" width="250px">
						<img src="<?php echo base_url('foto/pengumuman/default.jpg') ?>" width="300px" height="300px" />
					</td>
				</tr>
				<tr>
					<td><b>NIG</b></td>
					<td>:</td>
					<td><?= $this->session->userdata("nig_guru"); ?></td>
				</tr>

				<tr>
					<td><b>Nama</b></td>
					<td>:</td>
					<td><?= $this->session->userdata("nama_lengkap"); ?></td>
				</tr>
				
				<tr>
					<td><b>Tempat, Tanggal Lahir</b></td>
					<td>:</td>
					<td><?= $this->session->userdata("tanggal_lahir"); ?></td>
				</tr>
				
				<tr>
					<td><b>Kota Asal</b></td>
					<td>:</td>
					<td><?= $this->session->userdata("asal_kota"); ?></td>
				
				<tr>
					<td><b>Jenis Kelamin</b></td>
					<td>:</td>
					<td><?= $this->session->userdata("jenis_kelamin"); ?></td>
				</tr>
				
				<tr>
					<td><b>Alamat</b></td>
					<td>:</td>
					<td><?= $this->session->userdata("alamat"); ?></td>
				</tr>
				
				<tr>
					<td><b>No Telfon</b></td>
					<td>:</td>
					<td><?= $this->session->userdata("no_telp"); ?></td>
				</tr>
				
			</table>
			
			<div class="icon-container">
				<?php echo anchor('guru/editbiodata/' , '<span class="ti-pencil-alt"></span><span class="icon-name"> Edit</span>'); ?>
			</div>

	</section>
</div> 
