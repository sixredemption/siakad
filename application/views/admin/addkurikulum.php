<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Kurikulum</li>
			</ol><br>
		</div>
    
		<div class= container>
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Kurikulum</h1>
            
                <div class="col-md-12">
				<div class="panel panel-primary ">
					<div class="panel-heading">
					Tambah Kelas		
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					 <div class="panel-body timeline-container">
                        
                     <div class="card-body">

                            <form action="<?php echo base_url(). 'Admin/kelasAdd'; ?>" method="post" enctype="multipart/form-data" >
                                                                        
                                    <div class="form-group">
                                        <label for="nama_kelas">Nama Kelas</label>
                                        <input class="form-control <?php echo form_error('nama_kelas') ? 'is-invalid':'' ?>" type="text" name="nama_kelas" placeholder="Nama Siswa" />
                                        <div class="invalid-feedback">
                                        <?php echo form_error('nama_kelas') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="id_jurusan">Jurusan</label>
                                        <input class="form-control <?php echo form_error('id_jurusan') ? 'is-invalid':'' ?>" type="text" placeholder="JURUSAN NANTI JOIN" name="id_jurusan" placeholder="Nama Siswa" />
                                        <div class="invalid-feedback">
                                        <?php echo form_error('id_jurusan') ?>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="id_jurusan">Jurusan</label>
                                            <select class="form-control" name="id_jurusan">
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
                                                <option value="13">12-Ips-2</option>
                                                <option value="14">12-Ips-2</option>
                                                <option value="15">12-Ips-2</option>
                                                <option value="16">12-Ips-2</option>  
                                            </select>
                                    </div> -->

                                    
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                        </div>
                     
					</div>								
                </div> 
                
                <div class="panel panel-primary ">
					<div class="panel-heading">
                    Tambah Jurusan		
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					 <div class="panel-body timeline-container">
                        
                     <div class="card-body">

                        <form action="<?php echo base_url(). 'Admin/jurusanAdd'; ?>" method="post" enctype="multipart/form-data" >
                                                                    
                                <div class="form-group">
                                    <label for="nama_jurusan">Nama Jurusan</label>
                                    <input class="form-control <?php echo form_error('nama_jurusan') ? 'is-invalid':'' ?>" type="text" name="nama_jurusan" placeholder="Nama Jurusan" />
                                    <div class="invalid-feedback">
                                    <?php echo form_error('nama_jurusan') ?>
                                    </div>
                                </div>
                               
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                    
					</div>								
                </div> 
                
                <div class="panel panel-primary ">
					<div class="panel-heading">
                    Tambah Mapel		
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					 <div class="panel-body timeline-container">
                     <div class="card-body">
                     <form action="<?php echo base_url(). 'Admin/mapelAdd'; ?>" method="post" enctype="multipart/form-data" >
                                                                    
                                <div class="form-group">
                                    <label for="nama_mapel">Nama Jurusan</label>
                                    <input class="form-control <?php echo form_error('nama_mapel') ? 'is-invalid':'' ?>" type="text" name="nama_mapel" placeholder="Nama Jurusan" />
                                    <div class="invalid-feedback">
                                    <?php echo form_error('nama_mapel') ?>
                                    </div>
                                </div>
                               
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>

					</div>								
                </div> 
                
                <div class="panel panel-primary ">
					<div class="panel-heading">
                    Tambah Tahun Ajaran		
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					 <div class="panel-body timeline-container">
						
                     <div class="card-body">
                     <form action="<?php echo base_url(). 'Admin/tahunAdd'; ?>" method="post" enctype="multipart/form-data" >
                                                                    
                                <div class="form-group">
                                    <label for="tahun_ajaran">Tahun Ajaran</label>
                                    <input class="form-control <?php echo form_error('tahun_ajaran') ? 'is-invalid':'' ?>" type="text" name="tahun_ajaran" placeholder="Nama Jurusan" />
                                    <div class="invalid-feedback">
                                    <?php echo form_error('tahun_ajaran') ?>
                                    </div>
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