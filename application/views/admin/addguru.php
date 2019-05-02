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
        <form action="<?php echo base_url() . 'Admin/guruAdd'; ?>" method="post" enctype="multipart/form-data">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="nig_guru">NIG :</label>
                    <input type="text" class="form-control" name="nig_guru">
                </div>    
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="nama_lengkap">Nama :</label>
                    <input type="text" class="form-control" name="nama_lengkap">
                </div>
            </div>                
            <div class="col-md-5">
                 <div class="form-group">
                    <label for="tanggal_lahir">Tanggal lahir:</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
            </div>    

            <div class="col-md-3">
                 <div class="form-group">
                    <label for="asal_kota"> Kota Asal:</label>
                    <input type="text" class="form-control" name="asal_kota">
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
           
            <div class="col-md-12">
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuann
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
			<button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
            </div>
    </form>
</div>
</div>


