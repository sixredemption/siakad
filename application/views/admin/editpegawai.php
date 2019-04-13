<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
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
                    <h1>Edit Guru</h1>
                </div>
<div class="card-body">

<form action="<?php echo base_url("C_pegawai/edit/$pegawai->id") ?>" method="post" enctype="multipart/form-data" >
		
<input type="hidden" name="id" value="<?php echo $pegawai->id?>" />	

		<div class="form-group">
			<label for="nip">NIP :</label>
			<input type="text" class="form-control" name="nip" value="<?php echo $pegawai->nip ?>">
		</div>
        
		<div class="form-group">
			<label for="nama">Nama :</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $pegawai->nama ?>">
		</div>
		
		<div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control" name="password" value = "<?php echo $pegawai->password ?>">
        </div>

		<div class="form-group">
        	<label for="jk">Jenis Kelamin:</label>
        	<input type="radio" name="gender" value="L" <?php if($pegawai->gender == 'L'){ echo 'checked'; } ?>>Laki-Laki
        	<input type="radio" name="gender" value="P" <?php if($pegawai->gender == 'P'){ echo 'checked'; } ?>>Perempuann
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
