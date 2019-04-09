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
			<label for="nip"> NIP :</label>
			<input type="text" class="form-control" id="nip">
		</div>

		<div class="form-group">
			<label for="nama"> Nama :</label>
			<input type="text" class="form-control" id="nama">
		</div>

		<div class="form-group">
			<label for="password"> Password:</label>
			<input type="text" class="form-control" id="password">
		</div>

		<div class="form-group">
      		<label for="gender">Jenis Kelamin:</label>
      		<input type="radio" name="gender" value="lakilaki">Laki-Laki
      		<input type="radio" name="gender" value="perempuan">Perempuann
      		</select>
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
