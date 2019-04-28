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
                    Edit Mapel		
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					 <div class="panel-body timeline-container">
                     <div class="card-body">
                     <form action="<?php echo base_url("Admin/mapelEdit/$mapel->id_mapel") ?>" method="post" enctype="multipart/form-data" >
                                            
                     <input type="hidden" name="id_mapel" value="<?php echo $mapel->id_mapel?>"/>
                                <div class="form-group">
                                    <label for="nama_mapel">Nama Mapel</label>
                                    <input class="form-control <?php echo form_error('nama_mapel') ? 'is-invalid':'' ?>" type="text" name="nama_mapel" value="<?php echo $mapel->nama_mapel?>" />
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
			    </div>
		</div>
</div>



