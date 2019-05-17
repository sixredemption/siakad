<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="row">
        <ol class="breadcrumb">
          <li><a href="#">
            <em class="fa fa-home"></em>
          </a></li>
          <li class="active">Jadwal Mata Pelajaran</li>
        </ol>
      </div>
      <div class="container-fluid" style="margin-top:10px">
     <h2 class="card-header">Jadwal Pelajaran</h2>
        <div class="col-md-8">
          <div class="panel panel-success">
             <div class="panel-heading">
                      Upload Jadwal
                      <span class="pull-right clickable panel-toggle panel-button-tab-left"></span></div>
                      
                      <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                    <?php endif; ?>
                    
                <div class="panel-body">
               
                <div class="panel-body timeline-container">
                        
                <form action="<?php echo base_url("Admin/jadwalEdit/$jadwal->id_jadwal") ?>" method="post" enctype="multipart/form-data" >
                                
                                <input type="hidden" name="id_jadwal" value="<?php echo $jadwal->id_jadwal?>" />

                                <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="nama_jadwal">Nama</label>
                                            <input class="form-control <?php echo form_error('nama_jadwal') ? 'is-invalid':'' ?>"
                                             type="text" name="nama_jadwal" value="<?php echo $jadwal->nama_jadwal?>" />
                                            <div class="invalid-feedback">
                                            <?php echo form_error('nama_jadwal') ?>
                                            </div>
                                        </div>
                                </div>

                                <div class="col-md-8">
                                        <label for="id_jurusan">Jurusan</label>
                                            <select class="form-control" name="id_jurusan">
                                            <option disabled selected >Pilih Jurusan</option>
                                            <?php 
                                                foreach($jurusan  as $jur):
                                            ?>
                                                <!-- var_dump($jur); -->
                                                
                                                <option value="<?= $jur->id_jurusan?>" <?php if($jur->id_jurusan == $jadwal->id_jurusan ){ echo 'selected'; } ?> > <?= $jur->nama_jurusan?> </option>
                                            <?php endforeach; ?>

                                            </select>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="jadwal">Jadwal</label>
                                        <input class="form-control-file"
                                         type="file" name="jadwal" >
                                    </div>
                                </div>
                                
                    <div class="col-sm-10 widget-right">
                        <button type="submit" class="btn btn-md btn-primary pull-right">Posting</button>
                    </div> 
                   <div class="col-sm-2 widget-right">
                       <button type="submit" class="btn btn-danger btn-md pull-right">Cancel</button>
                  </div>  
            </form>


                     
					</div>	


          
                  
                </div>  
              </div>
          </div>
        </div>
</div>

















