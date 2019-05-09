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
            <h1>Edit Siswa</h1>
     
            <div class="container-fluid">
            <div class="panel-button-tab-left">				
                <form method="post"  action="<?php  echo base_url(). 'admin/listsiswa'; ?>">
                    <button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>List Siswa</button>
                </form>
            </div>	<br>
                  <form action="<?php echo base_url("Admin/SiswaEdit/$siswa->id_siswa")?>" id="data"method="post" enctype="multipart/form-data" >
                  <input type="hidden" name="id_siswa" value="<?php echo $siswa->id_siswa?>" />                    

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="nama_siswa">Nama</label>
                            <input class="form-control"
                            type="text" name="nama_siswa" value="<?php echo $siswa->nama_siswa ?>" />								
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="nisn">Nisn</label>
                            <input class="form-control"
                            type="text" name="nisn"  value="<?php echo $siswa->nisn ?>" />								
                        </div>
                    </div>
                   <div class="col-md-5">    
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal lahir:</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $siswa->tanggal_lahir ?>">
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kota"> Kota Asal:</label>
                            <input type="text" class="form-control" name="kota" value="<?php echo $siswa->kota ?>">
                        </div>
                    </div>
                   <div class=col-md-8>
                        <div class="form-group">
                            <label for="alamat">Alamat anda:</label>
                            <textarea type="text" class="form-control" name="alamat" cols="30" rows="5"  value=""><?php echo $siswa->alamat ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-5"> 
                        <div class="form-group">
                            <label for="id_kelas">Kelas:</label>
                            <select class="form-control" name="id_kelas">
                                <option value="" disabled selected >pilih kelas</option>
                               
                                <?php foreach($kelas as $kel):?>
                                    <option value="<?= $kel->id_kelas?>" <?php if($kel->id_kelas == $siswa->id_kelas ){ echo 'selected'; } ?> > <?= $kel->nama_kelas?> </option>
                                <?php endforeach;?>
                                
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">            
                        <div class="form-group">
                            <label for="id_jurusan">Jurusan</label>
                                <select class="form-control" name="id_jurusan">
                                    <option value="" disabled selected>pilih jurusan</option>

                                    <?php foreach($jurusan as $jur):?>
                                        <option value="<?= $jur->id_jurusan?>" <?php if($jur->id_jurusan == $siswa->id_jurusan ){ echo 'selected'; } ?> > <?= $jur->nama_jurusan?> </option>
                                    <?php  endforeach;?>
                                      
                                </select>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="nohp"> Nomer Hp:</label>
                            <input type="text" class="form-control" name="no_telp" value="<?php echo $siswa->no_telp ?>">
                        </div>
                    </div>                 

                <div class=col-md-12>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($siswa->jenis_kelamin == 'Laki-laki'){ echo 'checked'; } ?>>Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($siswa->jenis_kelamin == 'Perempuan'){ echo 'checked'; } ?>>Perempuann
                    </div>
                </div>

                <div class="col-md-3">
                        <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password"name="password" >
                        <input type="checkbox" onclick="myFunction()">Show Password
                        </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input class="form-control-file" type="file" name="foto" />
                        <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $siswa->foto ?>" />
                        <img src="<?php echo base_url('foto/siswa/'.$siswa ->foto) ?>" width="64" />
                    </div>
                </div>   

                <div class=col-md-12>      
                <button type="submit" class="btn btn-primary"  >Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </div>


         </form>

         


         
        </div>     
  </div>      


<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

