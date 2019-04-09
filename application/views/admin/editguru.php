<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">List Guru</li>
			</ol>
		</div>

<form>
<div class="form-group-input-group">
			<label for="nig">NIG :</label>
			<input type="text" class="form-control" id="nig">
		</div>

		<div class="form-group">
			<label for="nama">Nama :</label>
			<input type="text" class="form-control" id="nama">
			</div>
			
        <div class="form-group">
			<label for="tgl_lahir">Tanggal lahir:</label>
			<input type="date" class="form-control" id="tgl_lahir">
		</div>

        <div class="form-group">
			<label for="kota_asl"> Kota Asal:</label>
			<input type="text" class="form-control" id="kota_asl">
		</div>

		<div class="form-group">
      		<label for="gender">Jenig Kelamin:</label>
      		<input type="radio" name="gender" value="lakilaki">Laki-Laki
      		<input type="radio" name="gender" value="perempuan">Perempuann
      		</select>
		</div>

        <div class="form-group">
            <label for="alamat">Alamat anda:</label>
            <textarea type="text" class="form-control" id="alamat"></textarea>
		</div>
		
        <!-- <div class="form-group">
            <label for="Kelas">Mengajar:</label>
        <select class="form-control">
            <option value="" disabled selected>Mata Pelajaran</option>
            <option value="">Bahasa Indonesia</option>
            <option value="">Bahasa Inggris</option>
            <option value="">Biologi</option>
            <option value="">Sejarah</option>
            <option value="">Kimia</option>
            <option value="">Geografi</option>
            <option value="">Fisika</option>
            <option value="">Ekonomi</option>
            <option value="">Matematika</option>
            <option value="">Pendidikan Kewarganegaraan</option>
            <option value="">Seni Budaya</option>
            <option value="">Prakarya</option>  
        </select>
	</div> -->
	
    <div class="form-group">
			<label for="no_telp"> Nomer Hp:</label>
			<input type="number" class="form-control" id="no_telp">
		</div>

	<div class="form-group">
			<label for="password"> Password:</label>
			<input type="text" class="form-control" id="password">
	</div>

	<div class="form-group">
			<label for="id_pelajaran"> Mengajar:</label>
			<input type="number" class="form-control" id="id_pelajaran">
	</div>

	<div class="form-group">
            <label for="status_user">Status User:</label>
            <select class="form-control" name="status_user">
        	<option value="" disabled selected>Pilih User</option>
			<option value="1">Siswa</option>
			<option value="2">Guru</option>
			<option value="3">Pegawai</option>
		</select>
			</div>
	
    <button type="submit" class="btn btn-success">Perbarui</button>
    <button type="reset" class="btn btn-danger">Reset</button>

  </div>
</form>
  