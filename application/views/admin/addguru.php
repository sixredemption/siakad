<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Tambah Data Guru</li>
        </ol>
    </div>
    <h1>Tambah Data Guru</h1>
      <div class="container-fluid">
        <form action="<?php echo base_url() . 'guru/add'; ?>" method="post" enctype="multipart/form-data">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="nig">NIG :</label>
                    <input type="text" class="form-control" name="nig">
                </div>    
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>                
            <div class="col-md-5">
                 <div class="form-group">
                    <label for="tanggallahir">Tanggal lahir:</label>
                    <input type="date" class="form-control" name="tgl_lahir">
                </div>
            </div>    

            <div class="col-md-3">
                 <div class="form-group">
                    <label for="kotaasal"> Kota Asal:</label>
                    <input type="text" class="form-control" name="kota_asl">
                 </div>
            </div>        
            <div class="col-md-8">
                <div class="form-group">
                    <label for="alamat">Alamat anda:</label>
                    <textarea type="text" class="form-control" name="alamat" cols="30" rows="8"></textarea>
                </div>    
            </div>        
            <div class="col-md-5">
                <div class="form-group">
                    <label for="nohp"> Nomer Hp:</label>
                    <input type="number" class="form-control" name="no_telp">
                </div>
            </div>   
            <div class="col-md-4">
                <div class="form-group">
                     <label for="status_user">Mengajar:</label>
                         <select class="form-control">
                            <option value="" disabled selected>Mata Pelajaran</option>
                            <option value="">Agama Islam 1 </option>
                            <option value="">Agama Islam 2</option>
                            <option value="">Agama Islam 3</option>
                            <option value="">Bahasa Indonesia 1</option>
                            <option value="">Bahasa Indonesia 2</option>
                            <option value="">Bahasa Indonesia 3</option>
                            <option value="">Bahasa Inggris 1</option>
                            <option value="">Bahasa Inggris 2</option>
                            <option value="">Bahasa Inggris 3</option>
                            <option value="">Sejarah Wajib</option>
                            <option value="">Fisika</option>
                            <option value="">Biologi</option> 
                            <option value="">Kimia</option> 
                            <option value="">Ekonomi</option>
                            <option value="">Sosiologi</option>
                            <option value="">Geografi</option>
                            <option value="">Sejarah Peminatan</option>
                            <option value="">Matematika Pemintana</option>
                            <option value="">Olahraga 1 </option>
                            <option value="">Olahraga 2</option>
                            <option value="">Olahraga 3</option>
                        </select>
                </div>
        </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="jk">Jenis Kelamin:</label>
                    <input type="radio" name="gender" value="L">Laki-Laki
                    <input type="radio" name="gender" value="P">Perempuann
                </div>
            </div>            
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="password">password:</label>
                        <textarea type="text" class="form-control" name="password"></textarea>
                    </div>
             </div>
                            
             <div class="col-md-12">                
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input class="form-control-file" type="file" class="form-control" name="foto">
                </div>
            </div>
            <div class="col-md-12">                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </form>
       </div>
</div>

