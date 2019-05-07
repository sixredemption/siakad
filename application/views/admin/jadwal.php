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
                      <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                <div class="panel-body">
               
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
                                    
                     <div class="col-md-6">            
                        <div class="form-group">
                            <label for="id_kelas">Kelas</label>
                                <select class="form-control" name="id_kelas">
                                    <option value="" disabled selected>pilih kelas</option>

                                    <?php foreach($kelas as $kel):?>
                                                <option value="<?= $kel->id_kelas?>"><?= $kel->nama_kelas?></option>
                                            <?php  endforeach;?>
                                      
                                </select>
                        </div>
                    </div>
                    <div class="col-sm-10 widget-right">
                        <button type="submit" class="btn btn-md btn-primary pull-right">Posting</button>
                    </div> 
                   <div class="col-sm-2 widget-right">
                       <button type="submit" class="btn btn-danger btn-md pull-right">Cancel</button>
                  </div>                                                
                </div>  
              </div>
          </div>
        </div>
</div>

















