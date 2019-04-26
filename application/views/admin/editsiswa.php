<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Siswa</li>
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
                    <h1>Edit Siswa</h1>
                </div>
<div class="card-body">

<form action="<?php echo base_url("Admin/SiswaEdit/$siswa->id_siswa")?>" method="post" enctype="multipart/form-data" >
        
        <input type="hidden" name="id_siswa" value="<?php echo $siswa->id_siswa?>" />		

        <div class="form-group">
            <label for="nama_siswa">Nama</label>
            <input class="form-control"
             type="text" name="nama_siswa" value="<?php echo $siswa->nama_siswa ?>" />								
        </div>

        <div class="form-group">
            <label for="nisn">Nisn</label>
            <input class="form-control"
             type="text" name="nisn" placeholder="Product name" value="<?php echo $siswa->nisn ?>" />								
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal lahir:</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $siswa->tanggal_lahir ?>">
        </div>

        <div class="form-group">
            <label for="kota"> Kota Asal:</label>
            <input type="text" class="form-control" name="kota" value="<?php echo $siswa->kota ?>">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat anda:</label>
            <textarea type="text" class="form-control" name="alamat" value=""><?php echo $siswa->alamat ?></textarea>
        </div>

        <div class="form-group">
            <label for="id_kelas">Kelas:</label>
                <select class="form-control" name="id_kelas">
                    <option value="" disabled selected >pilih kelas</option>
                    <option value="1" <?php if($siswa->id_kelas == 1){ echo 'selected'; } ?>>10-Ipa-1</option>
                    <option value="2" <?php if($siswa->id_kelas == 2){ echo 'selected'; } ?>>10-Ipa-2</option>
                    <option value="3" <?php if($siswa->id_kelas == 3){ echo 'selected'; } ?>>11-Ipa-1</option>
                    <option value="4" <?php if($siswa->id_kelas == 4){ echo 'selected'; } ?>>11-Ipa-2</option>
                    <option value="5" <?php if($siswa->id_kelas == 5){ echo 'selected'; } ?>>12-Ipa-1</option>
                    <option value="6" <?php if($siswa->id_kelas == 6){ echo 'selected'; } ?>>12-Ipa-2</option>
                    <option value="7" <?php if($siswa->id_kelas == 7){ echo 'selected'; } ?>>10-Ips-1</option>
                    <option value="8" <?php if($siswa->id_kelas == 8){ echo 'selected'; } ?>>10-Ips-2</option>
                    <option value="9" <?php if($siswa->id_kelas == 9){ echo 'selected'; } ?>>11-Ips-1</option>
                    <option value="10" <?php if($siswa->id_kelas == 10){ echo 'selected'; } ?>>11-Ips-2</option>
                    <option value="11" <?php if($siswa->id_kelas == 11){ echo 'selected'; } ?>>12-Ips-1</option>
                    <option value="12" <?php if($siswa->id_kelas == 12){ echo 'selected'; } ?>>12-Ips-2</option> 
                    <option value="13" <?php if($siswa->id_kelas == 12){ echo 'selected'; } ?>>12-Ips-2</option>
                    <option value="14" <?php if($siswa->id_kelas == 12){ echo 'selected'; } ?>>12-Ips-2</option>
                    <option value="15" <?php if($siswa->id_kelas == 12){ echo 'selected'; } ?>>12-Ips-2</option>
                    <option value="16" <?php if($siswa->id_kelas == 12){ echo 'selected'; } ?>>12-Ips-2</option> 
                </select>
        </div>

        <div class="form-group">
                <label for="nohp"> Nomer Hp:</label>
                <input type="text" class="form-control" name="no_telp" value="<?php echo $siswa->no_telp ?>">
            </div>

        <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($siswa->jenis_kelamin == 'Laki-laki'){ echo 'checked'; } ?>>Laki-Laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($siswa->jenis_kelamin == 'Perempuan'){ echo 'checked'; } ?>>Perempuann
        </div>

        <!-- <div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control" name="password" value="<?php echo $siswa->password ?>" >
        </div> -->

        <!-- <div class="form-group">
            <label for="Kelas">Jurusan:</label>
                <select class="form-control" name="id_jurusan">
                    <option value="" disabled selected>Pilih Jurusan</option>
                    <option value="1" <?php if($siswa->id_jurusan == 1){ echo 'selected'; } ?>>IPA</option>
                    <option value="2" <?php if($siswa->id_jurusan == 2){ echo 'selected'; } ?>>IPS</option>

                </select>
        </div> -->

        <div class="form-group">
            <label for="foto">Foto</label>
            <input class="form-control-file" type="file" name="foto" />
            <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $siswa->foto ?>" />
            <img src="<?php echo base_url('foto/siswa/'.$siswa ->foto) ?>" width="64" />
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