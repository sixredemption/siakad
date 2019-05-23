<!-- <div class="container">
    <section class="content">
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
						<li><a href="#">Biodata</a></li>
						<li class="active">Edit Biodata</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

    <div class="jumbotron text-center"> 
      <h3> Edit Biodata Guru </h3>
      </section> 
    </div>

    <div class="col-lg-12">
        <div class="panel panel-default">
        <div class="panel-heading">
	</div>  
		
	<?php if ($this->session->flashdata('success')) : ?>
		<div class = "alert alert-success" role = "alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php endif ; ?>

	<div class="container">
		<div class="row mt-3">
		<div class="col-md-6">
		<div class="card">
		<div class="card-header">
		<h1>Form Edit Guru</h1>
	</div>

	<form action = "<?php echo base_url("guru/editbiodata") ?>" method = "post" enctype = "multipart/form-data">


		<div class="form-group">
			<label for="nig_guru">NIG :</label>
			<input type="text" class="form-control" name="nig_guru" value="">
		</div>

		<div class="form-group">
			<label for="nama_lengkap">Nama :</label>
			<input type="text" class="form-control" name="nama_lengkap" value="">
		</div>

		<div class="form-group">
			<label for="tanggal_lahir">Tanggal Lahir :</label>
			<input type="text" class="form-control" name="tanggal_lahir" value="">
		</div>

		<div class="form-group">
			<label for="asal_kota">Kota Asal :</label>
			<input type="text" class="form-control" name="asal_kota" value="">
		</div>

		<div class="form-group">
			<label for="alamat">Alamat anda :</label>
			<input type="text" class="form-control" name="alamat" value="">
		</div>

		<div class="form-group">
			<label for="no_telp"> Nomer Hp:</label>
			<input type="number" class="form-control" name="no_telp" value="">
		</div>

        <div class="card-body">
        <div class="form-group-input-group">
			<label for="nis">NIP :</label>
			<input type="text" class="form-control" id="nis">
		</div>

		<div class="form-group">
			<label for="foto_profil">Photo</label>
			<input class="form-control-file" type="file" name="foto" />
			<input class="form-control-file" type="hidden" name="old_image" value="" />
			<img src="<?php echo base_url('foto/guru/') ?>" width="64" />
		</div>

        </div>
        </div>	
    	</div>
</fieldset>
</form>
</body>
</section>
</div> -->


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
			<li class="active">Edit Guru</li>
		</ol>
	</div>
	<?php if ($this->session->flashdata('success')) : ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
		
	<?php endif; ?>
		<h1>Edit Guru</h1>
	<div class="container-fluid">
		<div class="panel-button-tab-left">				
			<form method="post"  action="<?= $this->session->userdata("id_guru"); ?>">
			</form>
		</div>
		<br>

		<form action="<?php echo base_url("guru/updateProfile")?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id_guru" value="" />
						<div class="col-md-8">
							<div class="form-group">
								<label for="nig">NIG :</label>
								<input type="text" class="form-control" name="nig_guru" value="<?= $this->session->userdata("nig_guru"); ?>">
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label for="nama">Nama :</label>
								<input type="text" class="form-control" name="nama_lengkap" value="<?= $this->session->userdata("nama_lengkap"); ?>">
							</div>
						</div>
						
						<div class="col-md-5">
							<div class="form-group">
								<label for="tanggal_lahir">Tanggal lahir:</label>
								<input type="date" class="form-control" name="tanggal_lahir" value="<?= $this->session->userdata("tanggal_lahir"); ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="asal_kota"> Kota Asal:</label>
								<input type="text" class="form-control" name="asal_kota" value="<?= $this->session->userdata("asal_kota"); ?>">
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label for="alamat">Alamat anda:</label>
								<textarea type="text" class="form-control" name="alamat" value="" rows="10"><?= $this->session->userdata("alamat"); ?></textarea>
							</div>
						</div>	

						<div class="col-md-5">
							<div class="form-group">
								<label for="no_telp"> Nomer Hp:</label>
								<input type="number" class="form-control" name="no_telp" value="<?= $this->session->userdata("no_telp"); ?>">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin:</label>
								<input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($this->session->userdata("jenis_kelamin") == 'Laki-laki') {
																				echo 'checked';
																			} ?> >Laki-Laki
								<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($this->session->userdata("jenis_kelamin") == 'Perempuan') {
																				echo 'checked';
																			} ?> >Perempuann
							</div>
						</div>
						<!-- <div class = "col-md-12">
							<div class="form-group">
								<label for="password">password:</label>
								<input type="password" class="form-control" name="password" value="<?= $this->session->userdata("password"); ?>">
							</div>
						</div> -->
							<div class="form-group">
								<label for="foto">Photo</label>
								<input class="form-control-file" type="file" name="foto" />
								<input class="form-control-file" type="hidden" name="old_image" value="<?= $this->session->userdata("foto"); ?>" />
								<img src="" width="64" />
								</div>
                </div>   
                <div class=col-md-12>      
				<button type="submit" class="btn btn-primary" href="<?= base_url();?>guru/biodata">Simpan</a></button>
				<button type="reset" class="btn btn-danger" href="<?= base_url();?>guru/biodata">Reset</a></button>
                <!-- <button type="submit" class="btn btn-primary"  >Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button> -->  

		<!-- <button type="submit" class="btn btn-primary" href="<?= base_url();?>guru/biodata">Simpan</a></button>
		<button type="reset" class="btn btn-danger" href="<?= base_url();?>guru/biodata">Reset</a></button> -->
	
	</form>
	
	</section>
</div> 
