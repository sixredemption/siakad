<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
        </div>
                
    <div class="container">
		<div class="row mt-3">
			<div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Tambah Siswa</h1>
                </div>

                
<div class="card-body">

<form action="<?php echo base_url(). 'C_siswa/add'; ?>" method="post" enctype="multipart/form-data" >
        <div class="form-group-input-group">
			<label for="nis">NIS </label>
			<input type="text" class="form-control" name="nis" placeholder="Nomor Induk Siswa">
		</div>
        
		<div class="form-group">
								<label for="nama">Nama</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" type="text" name="nama" placeholder="Product name" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
		</div>

        <div class="form-group">
			<label for="tanggallahir">Tanggal lahir</label>
			<input type="date" class="form-control" name="tgl_lahir">
		</div>

        <div class="form-group">
			<label for="kotaasal"> Kota Asal</label>
			<input type="text" class="form-control" name="kota_asl" placeholder="Kota Asal">
		</div>

        <div class="form-group">
            <label for="alamat">Alamat anda</label>
            <textarea type="text" class="form-control" name="alamat"></textarea>
        </div>

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
                </select>
         </div>

        <div class="form-group">
                <label for="nohp"> Nomer Hp</label>
                <input type="number" class="form-control" name="no_telp" placeholder="Product name" placeholder="Nomor Hp">
            </div>

        <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <input type="radio" name="gender" value="L">Laki-Laki
        <input type="radio" name="gender" value="P">Perempuann
        </div>

        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

         <div class="form-group">
            <label for="Kelas">Jurusan</label>
                <select class="form-control" name="id_jurusan">
                    <option value="" disabled selected>Pilih Jurusan</option>
                    <option value="1">IPA</option>
                    <option value="2">IPS</option>

                </select>
         </div>

        <div class="form-group">

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
<!-- <form>
<div class="form-group-input-group">
			<label for="nis">NIS :</label>
			<input type="text" class="form-control" id="nis">
		</div>
		<div class="form-group">
			<label for="nama">Nama :</label>
			<input type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
			<label for="tanggallahir">Tanggal lahir:</label>
			<input type="date" class="form-control" id="tanggallahir">
		</div>
        <div class="form-group">
			<label for="kotaasal"> Kota Asal:</label>
			<input type="text" class="form-control" id="kotaasal">
		</div>	  
        <div class="form-group">
            <label for="alamat">Alamat anda:</label>
            <textarea type="text" class="form-control" id="alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="Kelas">Kelas:</label>
        <select class="form-control">
            <option value="" disabled selected>pilih kelas</option>
            <option value="10ipa1">10-Ipa-1</option>
            <option value="10ipa2">10-Ipa-2</option>
            <option value="11ipa1">11-Ipa-1</option>
            <option value="11ipa2">11-Ipa-2</option>
            <option value="12ipa1">12-Ipa-1</option>
            <option value="12ipa2">12-Ipa-2</option>
            <option value="10ips1">10-Ips-1</option>
            <option value="10ips2">10-Ips-2</option>
            <option value="11ips1">11-Ips-1</option>
            <option value="11ips2">11-Ips-2</option>
            <option value="12ips1">12-Ips-1</option>
            <option value="12ips2">12-Ips-2</option>  
        </select>
    </div>
    <div class="form-group">
			<label for="nohp"> Nomer Hp:</label>
			<input type="number" class="form-control" id="kotaasal">
		</div>	  
    <div class="form-group">
      <label for="jk">Jenis Kelamin:</label>
      <input type="radio" name="gender" value="lakilaki">Laki-Laki
      <input type="radio" name="gender" value="perempuan">Perempuann
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-danger">Reset</button>

  </div>
   -->