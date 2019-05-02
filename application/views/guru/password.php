

    <div class="col-md-12">
        <section class="content">
        <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Password
        </div>  
        <div class="container">
		<div class="row mt-3">
			<div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Ganti Password</h1>
                </div>
                <div class="card-body">

		<form action = "<?php echo base_url("C_guru/edit/$guru->id_guru") ?>" method = "post" enctype = "multipart/form-data">
				
        <div class="form-group-input-group">
			<label for="password">Password Lama </label>
			<input type="text" class="form-control" id="password">
		</div>
		<div class="form-group">
			<label for="password">Password Baru</label>
			<input type="text" class="form-control" id="password">
        </div>
        <div class="form-group">
			<label for="password">Konfirmasi Password Baru</label>
			<input type="text" class="form-control" id="password">
        </div>
            
    	<a <button type="submit" class="btn btn-primary" href="<?= base_url();?>guru/index">Simpan</a></button>
    	<a <button type="reset" class="btn btn-danger" href="<?= base_url();?>guru/index">Kembali</a></button>
        		</div>
            </div>
		</div>
</fieldset>
</form>
</body>
</section>
</div>
