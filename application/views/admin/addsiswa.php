<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
<<<<<<< HEAD
		</div>
    <h1>Tambah Siswa</h1>
    <div class="container-fluid "style="margin-top:15px">
       <div class="row">
         <div class="col-md-8">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>
         </div>
         
         <div class="col-md-8">
            <div class="form-group">
              <label for="">Tanggal Lahir</label>
              <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
            </div>
         </div>   

         <div class="col-md-8">
            <div class="form-group">
              <label for="">Kota Asal</label>
              <input type="text" name="kota_asl" id="kota_asl" class="form-control">
            </div>
         </div>   
         <div class="col-md-8">
            <div class="form-group">
              <label for="jk">Jenis Kelamin:</label>
                  <input type="radio" name="gender" value="lakilaki">Laki-Laki
                  <input type="radio" name="gender" value="perempuan">Perempuan      
           </div> 
        </div>   
        <div class="col-sm-6">
            <div class="form-group">
              <label for="kls">Kelas</label>
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
        </div> 
          <div class="col-md-8" >
              <div class="form-group">
                <label for="">Alamat</label>
                <textarea class="form-control" name="" id="" rows="5"></textarea>
              </div>
          </div>   
      </div>
          <div class="form-group" >
              <button type="submit" class="btn btn-success">Simpan</button>
              <button type="reset" class="btn btn-danger">Reset</button>
          </div>
         </div>   
    </div>
</div>









<!-- <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div>
=======
        </div>
                
>>>>>>> 5a15ba1fbfb66973b46064ffaaf4008fefa61cd6
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
			<label for="nis">NIS :</label>
			<input type="text" class="form-control" name="nis">
		</div>
        
		<div class="form-group">
								<label for="nama">Nama</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" type="text" name="nama" placeholder="Product name" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
		</div>

        <div class="form-group">
<<<<<<< HEAD
			<label for="nama">Nama :</label>
			<input type="text" class="form-control" id="nama">
            </div>
        <div class="form-group">
			<label for="tanggallahir">Tanggal lahir:</label>
	    	<input type="date" class="form-control" id="tanggallahir">
=======
			<label for="tanggallahir">Tanggal lahir:</label>
			<input type="date" class="form-control" name="tgl_lahir">
>>>>>>> 5a15ba1fbfb66973b46064ffaaf4008fefa61cd6
		</div>

        <div class="form-group">
			<label for="kotaasal"> Kota Asal:</label>
			<input type="text" class="form-control" name="kota_asl">
		</div>

        <div class="form-group">
            <label for="alamat">Alamat anda:</label>
            <textarea type="text" class="form-control" name="alamat"></textarea>
        </div>

        <div class="form-group">
            <label for="Kelas">Kelas:</label>
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
                <label for="nohp"> Nomer Hp:</label>
                <input type="number" class="form-control" name="no_telp">
            </div>

        <div class="form-group">
        <label for="jk">Jenis Kelamin:</label>
        <input type="radio" name="gender" value="L">Laki-Laki
        <input type="radio" name="gender" value="P">Perempuann
        </div>

        <div class="form-group">
            <label for="password">password:</label>
            <textarea type="password" class="form-control" name="password"></textarea>
        </div>

         <div class="form-group">
            <label for="Kelas">Jurusan:</label>
                <select class="form-control" name="id_jurusan">
                    <option value="" disabled selected>Pilih Jurusan</option>
                    <option value="1">IPA</option>
                    <option value="2">IPS</option>

                </select>
         </div>

        <div class="form-group">

        <div class="form-group">
            <label for="foto">Foto:</label>
            <input class="form-control-file" type="file" class="form-control" name="foto">
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
 -->
