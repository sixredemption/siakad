<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Tambah Data Siswa</li>
			</ol>
        </div>      
        <h1>Tambah Data Siswa</h1>
    <div class="container-fluid">
        <form action="<?php echo base_url(). 'Admin/siswaAdd'; ?>" method="post" enctype="multipart/form-data" >
            <div class="col-md-8">
                    <div class="form-group-input-group">
                        <label for="nisn">Nisn </label>
                        <input type="text" class="form-control" name="nisn" placeholder="Nomor Induk Siswa">
                    </div>
                </div>
            <div class="col-md-8">
                    <div class="form-group">
                        <label for="nama_siswa">Nama</label>
                        <input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid':'' ?>" type="text" name="nama_siswa" placeholder="Nama Siswa" />
                        <div class="invalid-feedback">
                        <?php echo form_error('nama_siswa') ?>
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
                            <label for="id_kelas">Kelas</label>
                                <select class="form-control" name="id_kelas">
                                    <option value="" disabled selected>pilih kelas</option>
                                    <option value="1">10 IPA 1</option>
                                    <option value="2">10 IPA 2</option>
                                    <option value="4">11 IPA 1</option>
                                    <option value="5">11 IPA 21</option>
                                    <option value="7">12 IPA 1</option>
                                    <option value="8">12 IPA 2</option>
                                      
                                </select>
                        </div>
                    </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuann
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_telp"> Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telp" placeholder="No Telp">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input class="form-control-file" type="file" class="form-control" name="foto">
                    </div>
                </div>  
                
                <div class="col-md-6">
                <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password">
                </div>
                </div>  

                <div class= "col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>                 
                </div>

            </form>
        </div>
</div>
		