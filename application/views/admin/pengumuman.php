<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Pengumuman</li>
			</ol>
		</div><!--/.row-->
        <div class="container-fluid" style="margin-top:10px">
            <div class="card">        
                <h1 class="card-header">Pengumuman</h1><br>
                <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            Tulis Pengumuman
                            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                                <div class="panel-body">
                                    <form action="<?php echo base_url(). 'Pengumuman/add'; ?>" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <!-- Name input-->
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="judul">Judul</label>
                                                    <div class="col-md-9">
                                                        <input name="judul" type="text" placeholder="Judul Penguuman" class="form-control">
                                                    </div>
                                                </div>

                                                <!-- Input Tanggal -->
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="tanggal">Tanggal</label>
                                                    <div class="col-md-9">
                                                        <input name="tanggal" type="date" class="form-control">
                                                    </div>
                                                </div>
                                            
                                                <!-- Keterangan input-->
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="keterangan">Keterangan :</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control"  name="keterangan" placeholder="Masukan Isi Pengumuman" rows="5"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="foto">Foto</label>
                                                    <input class="form-control-file" type="file" class="form-control" name="foto">
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