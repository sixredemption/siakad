<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Pegaawai</li>
			</ol>
		</div><!--/.row-->
    <div class="container">
		<div class="row mt-3">
			<div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Tambah Pegawai</h1>
                </div>
<div class="card-body">

<form action="<?php echo base_url(). 'Admin/pewagawaiAdd'; ?>" method="post" enctype="multipart/form-data" >
        <!-- <div class="form-group-input-group">
			<label for="nip">NIP :</label>
			<input type="text" class="form-control" name="nip">
		</div> -->
        
		<div class="form-group">
			<label for="username">Username :</label>
			<input type="text" class="form-control" name="username">
		</div>
		
		<div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password">
        </div>

        <!-- <div class="form-group">
        <label for="jk">Jenis Kelamin:</label>
        <input type="radio" name="gender" value="L">Laki-Laki
        <input type="radio" name="gender" value="P">Perempuann
        </div> -->

		<div class="form-group">
            <label for="foto">Foto</label>
            <input class="form-control-file" type="file" class="form-control" name="foto">
        </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</div>
                </div>
			</div>
		</div><!--/.row-->
    </div>
</div>
