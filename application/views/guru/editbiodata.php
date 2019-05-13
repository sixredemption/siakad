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

		<div class="form-group">
			<label for="jenis_kelamin">Jenis Kelamin:</label>
			<input type="radio" name="jenis_kelamin" value="L" <?php if ('L') {
															echo 'checked';
															} ?>>Laki-Laki
			<input type="radio" name="jenis_kelamin" value="P" <?php if ('P') {
															echo 'checked';
															} ?>>Perempuann
		</div>

		<div class="form-group">
			<label for="foto_profil">Photo</label>
			<input class="form-control-file" type="file" name="foto" />
			<input class="form-control-file" type="hidden" name="old_image" value="" />
			<img src="<?php echo base_url('foto/guru/') ?>" width="64" />
		</div>

		<button type="submit" class="btn btn-primary" href="<?= base_url();?>guru/biodata">Simpan</a></button>
		<button type="reset" class="btn btn-danger" href="<?= base_url();?>guru/biodata">Reset</a></button>
	
	</form>
	
	</section>
</div> 
