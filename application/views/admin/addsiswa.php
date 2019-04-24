<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
        </div>      
        <h1>Tambah Data Siswa</h1>
   <div class="container-fluid">
    <form action="<?php echo base_url(). 'Admin/siswaAdd'; ?>" method="post" enctype="multipart/form-data" >
        <div class="col-md-8">
                <div class="form-group-input-group">
                    <label for="nisn">Nisn </label>
                    <input type="text" class="form-control" name="nis" placeholder="Nomor Induk Siswa">
                </div>
            </div>
         <div class="col-md-8">
                <div class="form-group">
                    <label for="nama_siswa">Nama</label>
                    <input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid':'' ?>" type="text" name="nama_siswa" placeholder="Nama Siswa" />
                    <div class="invalid-feedback">
                    <?php echo form_error('nama') ?>
                    </div>
                </div>
        </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="kota"> Kota Asal</label>
                    <input type="text" class="form-control" name="kota" placeholder="Kota Asal">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="alamat">Alamat anda</label>
                    <textarea class="form-control" name="alamat" rows="6"></textarea>
                </div>
            </div>
            <div class="col-md-6">            
                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                            <select class="form-control" name="kelas">
                                <option value="" disabled selected>pilih kelas</option>
                                <option value="1">10-Ipa-1</option>
                                <option value="2">10-Ipa-2</option>
                                <option value="3">11-Ipa-1</option>
                                <option value="4">11-Ipa-2</option>
                                <option value="5">12-Ipa-1</option>
                                <option value="6">12-Ipa-2</option>
                                <option value="7">10-Ips-1</option>
                                <option value="8">10-Ips-2</option>
                                <option value="9">11-Ips-1</option>
                                <option value="10">11-Ips-2</option>
                                <option value="11">12-Ips-1</option>
                                <option value="12">12-Ips-2</option>
                                <option value="13">12-Ips-2</option>
                                <option value="14">12-Ips-2</option>
                                <option value="15">12-Ips-2</option>
                                <option value="16">12-Ips-2</option>  
                            </select>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuann
                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input class="form-control-file" type="file" class="form-control" name="foto">
                </div>
            </div>    
            <div class="col-md-12"> 
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
</div>
		