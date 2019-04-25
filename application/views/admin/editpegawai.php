<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Pegawai</li>
			</ol>
		</div>

		<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
        <?php endif; ?>

    <div class="container">
		<div class="row mt-3">
			<div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Pegawai</h1>
                </div>
<div class="card-body">

<form action="<?php echo base_url("Admin/pewagaiEdit/$pegawai->id_admin") ?>" method="post" enctype="multipart/form-data" >
		
<input type="hidden" name="id_admin" value="<?php echo $pegawai->id_admin?>"/>	

		<!-- <div class="form-group">
			<label for="nip">NIP :</label>
			<input type="text" class="form-control" name="nip" value="">
		</div> -->
        
		<div class="form-group">
			<label for="nama">Username :</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $pegawai->username ?>">
		</div>
		
		<div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" value = "<?php echo $pegawai->password ?>">
        </div>

		<!-- <div class="form-group">
        	<label for="jk">Jenis Kelamin:</label>
        	<input type="radio" name="gender" value="L" >Laki-Laki
        	<input type="radio" name="gender" value="P" >Perempuann
        </div> -->

		<div class="form-group">
            <label for="foto">Photo</label>
            <input class="form-control-file" type="file" name="foto" />
            <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $pegawai->foto ?>" />
            <img src="<?php echo base_url('foto/pegawai/'.$pegawai ->foto) ?>" width="64" />
        </div>


            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</div>
                </div>
			</div>
		</div>
    </div>
</div>
