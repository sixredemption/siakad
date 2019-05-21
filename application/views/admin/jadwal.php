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
                <div class="panel-body">
               
                <div class="panel-body timeline-container">
                        
                <form action="<?php echo base_url(). 'Admin/jadwalAdd'; ?>" method="post" enctype="multipart/form-data" >
                                <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="nama_jadwal">Nama</label>
                                            <input class="form-control <?php echo form_error('nama_jadwal') ? 'is-invalid':'' ?>"
                                             type="text" name="nama_jadwal" placeholder="Nama Jadwal" />
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
                                                <option value="<?= $jur->id_jurusan?>"><?= $jur->nama_jurusan?></option>
                                            <?php endforeach; ?>

                                            </select>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="jadwal">Jadwal</label>
                                        <input class="form-control-file"
                                         type="file" name="jadwal">
                                    </div>
                                </div>
                                
                    <div class="col-sm-10 widget-right">
                        <button type="submit" class="btn btn-md btn-primary pull-right">Posting</button>
                    </div> 
                   <div class="col-sm-2 widget-right">
                       <button type="submit" class="btn btn-danger btn-md pull-right">Cancel</button>
                  </div>  
          </form>                               
                <table data-toggle="table"  data-url="<?base_url('assets_admin')?>/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                <thead>
                    <tr>
                        <th><font face ="Calibri"> No </font></th>
                        <th><font face ="Calibri"> Jurusan </font></th>
                        <th><font face ="Calibri"> Judul </font></th>
                        <th><font face ="Calibri"> Jadwal </font></th>
                        <th><font face ="Calibri"> Menu </font></th>
                    </tr>
                    <tbody>
                    <?php
                            $this->db->select('nama_jurusan,nama_jadwal,jadwal,id_jadwal');
                            // SELECT 
                                    
                            $q = $this->db->join('jurusan', 'jurusan.id_jurusan = jadwal.id_jurusan')->get('jadwal');
                            $nomor = 1;
                            foreach ($q->result_array() as $jad) : ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><p><?=  $jad['nama_jurusan']?></p></td>
                                <td><p><?=  $jad['nama_jadwal']?></p></td>
                                <td><p><?=  $jad['jadwal']?></p></td>
                                
                                <td>
                                <?php echo anchor('Admin/jadwalEdit/'.$jad['id_jadwal'],'<button class="btn btn-primary margin" type="button"><span class="fa fa-pencil"></span> </button>'); ?>
                
                                <?php  echo anchor('Admin/jadwalDelete/'.$jad['id_jadwal'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                
                                </i>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                            <?php endforeach; ?>
                    </tbody>
                </table>
                    </div>	 
                </div>  
            </div>
        </div>
    </div>
</div>

















