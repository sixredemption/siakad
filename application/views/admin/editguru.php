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

<form action="<?php echo base_url("C_guru/edit/$guru->id") ?>" method="post" enctype="multipart/form-data" >
		
<input type="hidden" name="id" value="<?php echo $guru->id?>" />	

		<div class="form-group">
			<label for="nig">NIG :</label>
			<input type="text" class="form-control" name="nig" value="<?php echo $guru->nig ?>">
		</div>
        
		<div class="form-group">
			<label for="nama">Nama :</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $guru->nama ?>">
        </div>

        <div class="form-group">
			<label for="tanggallahir">Tanggal lahir:</label>
			<input type="date" class="form-control" name="tgl_lahir" value="<?php echo $guru->tgl_lahir ?>">
		</div>

        <div class="form-group">
			<label for="kotaasal"> Kota Asal:</label>
			<input type="text" class="form-control" name="kota_asl" value="<?php echo $guru->kota_asl ?>">
		</div>

        <div class="form-group">
            <label for="alamat">Alamat anda:</label>
            <textarea type="text" class="form-control" name="alamat" value=""><?php echo $guru->alamat ?></textarea>
        </div>

        <div class="form-group">
                <label for="nohp"> Nomer Hp:</label>
                <input type="number" class="form-control" name="no_telp" value="<?php echo $guru->no_telp ?>">
            </div>

		<div class="form-group">
        	<label for="jk">Jenis Kelamin:</label>
        	<input type="radio" name="gender" value="L" <?php if($guru->gender == 'L'){ echo 'checked'; } ?>>Laki-Laki
        	<input type="radio" name="gender" value="P" <?php if($guru->gender == 'P'){ echo 'checked'; } ?>>Perempuann
        </div>

        <div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control" name="password" value = "<?php echo $guru->password ?>">
        </div>

		<div class="form-group">
			<label for="id_pelajaran"> Mengajar:</label>
			<input type="number" class="form-control" name="id_pelajaran" value="<?php echo $guru->id_pelajaran ?>">
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


  