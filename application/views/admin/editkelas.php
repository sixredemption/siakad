<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Kurikulum</li>
			</ol><br>
		</div>
    
		<div class= container>
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Kurikulum</h1>
            
                <div class="col-md-12">
				<div class="panel panel-primary ">
					<div class="panel-heading">
					Edit Kelas		
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					 <div class="panel-body timeline-container">
                        
                     <div class="card-body">

                            <form action="<?php echo base_url("Admin/kelasEdit/$kelas->id_kelas")?>" method="post" enctype="multipart/form-data" >
                                           
                            <input type="hidden" name="id_kelas" value="<?php echo $kelas->id_kelas?>"/>

                                    <div class="form-group">
                                        <label for="nama_kelas">Nama Kelas</label>
                                        <input class="form-control <?php echo form_error('nama_kelas') ? 'is-invalid':'' ?>" type="text" name="nama_kelas" value="<?php echo $kelas->nama_kelas?>" />
                                        <div class="invalid-feedback">
                                        <?php echo form_error('nama_kelas') ?>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="id_jurusan">Jurusan</label>
                                            <select class="form-control" name="id_jurusan">
                                            <option disabled selected >Pilih Jurusan</option>
                                            <?php 
                                                foreach($jurusan  as $jur):
                                            ?>
                                                var_dump($jur);
                                                <option value="<?= $jur->id_jurusan?>"><?= $jur->nama_jurusan?></option>
                                            <?php endforeach; ?>

                                            </select>
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