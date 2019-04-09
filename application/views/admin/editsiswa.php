<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
    <div class="container">
		<div class="row mt-3">
			<div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Siswa</h1>
                </div>
<div class="card-body">

<form action="<?php echo base_url("C_siswa/edit/$siswa->id")?>" method="post" enctype="multipart/form-data" >
        
        <input type="hidden" name="id" value="<?php echo $siswa->id?>" />		

        <div class="form-group">
            <label for="name">Nama*</label>
            <input class="form-control"
             type="text" name="nama" placeholder="Product name" value="<?php echo $siswa->nama ?>" />								
        </div>

        <div class="form-group">
            <label for="nis">Nim*</label>
            <input class="form-control"
             type="text" name="nis" placeholder="Product name" value="<?php echo $siswa->nis ?>" />								
        </div>

        <div class="form-group">
            <label for="tanggallahir">Tanggal lahir:</label>
            <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $siswa->tgl_lahir ?>">
        </div>

        <div class="form-group">
            <label for="kotaasal"> Kota Asal:</label>
            <input type="text" class="form-control" name="kota_asl" value="<?php echo $siswa->kota_asl ?>">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat anda:</label>
            <textarea type="text" class="form-control" name="alamat" value=""><?php echo $siswa->alamat ?></textarea>
        </div>

        <div class="form-group">
            <label for="Kelas">Kelas:</label>
                <select class="form-control" name="kelas">
                    <option value="" disabled selected >pilih kelas</option>
                    <option value="1" <?php if($siswa->kelas == 1){ echo 'selected'; } ?>>10-Ipa-1</option>
                    <option value="2" <?php if($siswa->kelas == 2){ echo 'selected'; } ?>>10-Ipa-2</option>
                    <option value="3" <?php if($siswa->kelas == 3){ echo 'selected'; } ?>>11-Ipa-1</option>
                    <option value="4" <?php if($siswa->kelas == 4){ echo 'selected'; } ?>>11-Ipa-2</option>
                    <option value="5" <?php if($siswa->kelas == 5){ echo 'selected'; } ?>>12-Ipa-1</option>
                    <option value="6" <?php if($siswa->kelas == 6){ echo 'selected'; } ?>>12-Ipa-2</option>
                    <option value="7" <?php if($siswa->kelas == 7){ echo 'selected'; } ?>>10-Ips-1</option>
                    <option value="8" <?php if($siswa->kelas == 8){ echo 'selected'; } ?>>10-Ips-2</option>
                    <option value="9" <?php if($siswa->kelas == 9){ echo 'selected'; } ?>>11-Ips-1</option>
                    <option value="10" <?php if($siswa->kelas == 10){ echo 'selected'; } ?>>11-Ips-2</option>
                    <option value="11" <?php if($siswa->kelas == 11){ echo 'selected'; } ?>>12-Ips-1</option>
                    <option value="12" <?php if($siswa->kelas == 12){ echo 'selected'; } ?>>12-Ips-2</option>  
                </select>
        </div>

        <div class="form-group">
                <label for="nohp"> Nomer Hp:</label>
                <input type="text" class="form-control" name="no_telp" value="<?php echo $siswa->no_telp ?>">
            </div>

        <div class="form-group">
        <label for="jk">Jenis Kelamin:</label>
        <input type="radio" name="gender" value="L" <?php if($siswa->gender == 'L'){ echo 'checked'; } ?>>Laki-Laki
        <input type="radio" name="gender" value="P" <?php if($siswa->gender == 'P'){ echo 'checked'; } ?>>Perempuann
        </div>

        <div class="form-group">
            <label for="password">password:</label>
            <input type="text" class="form-control" name="password" value="<?php echo $siswa->password ?>" >
        </div>

        <div class="form-group">
            <label for="Kelas">Jurusan:</label>
                <select class="form-control" name="id_jurusan">
                    <option value="" disabled selected>Pilih Jurusan</option>
                    <option value="1" <?php if($siswa->id_jurusan == 1){ echo 'selected'; } ?>>IPA</option>
                    <option value="2" <?php if($siswa->id_jurusan == 2){ echo 'selected'; } ?>>IPS</option>

                </select>
        </div>

        <div class="form-group">
            <label for="foto">Photo</label>
            <input class="form-control-file" type="file" name="foto" />
            <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $siswa->foto ?>" />
        </div>

<button type="submit" class="btn btn-primary"  >Simpan</button>
<button type="reset" class="btn btn-danger">Reset</button>
</form>
</div>
                </div>
			</div>
		</div>
    </div>
</div>