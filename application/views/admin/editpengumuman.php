<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Pengumuman</li>
			</ol>
        </div><!--/.row-->
        
        <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
        <?php endif; ?>

        <div class="container-fluid" style="margin-top:10px">
            <div class="card">        
                <h1 class="card-header">Pengumuman</h1><br>
                <div class="col-md-6">
                    <!-- <div class="panel panel-success">
                        <div class="panel-heading">
                            Tanggal
                            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                              <div class="panel-body">
                                <div id="calendar"></div>
                            </div>
                        </div> -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            Tulis Pengumuman
                            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                                <div class="panel-body">
                                    <form action="<?php echo base_url("Pengumuman/edit/$pengumuman->id")?>" method="post" enctype="multipart/form-data">
                                            <fieldset>

                                                <input type="hidden" name="id" value="<?php echo $pengumuman->id?>" />

                                                <!-- Name input-->
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="judul">Judul</label>
                                                    <div class="col-md-9">
                                                        <input name="judul" type="text" class="form-control" value="<?php echo $pengumuman->judul ?>">
                                                    </div>
                                                </div>

                                                <!-- Input Tanggal -->
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="tanggal">Tanggal</label>
                                                    <div class="col-md-9">
                                                        <input name="tanggal" type="date" class="form-control" value="<?php echo $pengumuman->tanggal ?>">
                                                    </div>
                                                </div>
                                            
                                                <!-- Keterangan input-->
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="keterangan">Keterangan :</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control"  name="keterangan" rows="5"><?php echo $pengumuman->keterangan ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="foto">Photo</label>
                                                    <input class="form-control-file" type="file" name="foto" />
                                                    <input class="form-control-file" type="hidden" name="old_image" value="<?php echo $pengumuman->foto ?>" />
                                                    <img src="<?php echo base_url('assets_home/img/blog/'.$pengumuman->foto) ?>" width="64" />
                                                </div>
                                                
                                                    <div class="col-sm-10 widget-right">
                                                        <button type="submit" class="btn btn-md btn-primary pull-right">Posting</button>
                                                    </div>
                                                    <div class="col-sm-2 widget-right">
                                                        <button type="submit" class="btn btn-danger btn-md pull-right">Cancel</button>
                                                    </div>                    
                                            </fieldset>
                                    </form>
                                </div>
                        </div>
                </div>
            </div>