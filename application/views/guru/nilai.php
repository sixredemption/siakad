<!-- <div class="content mt-3">
<div class="animated fadeIn">
<div class="row">
    <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Pilih Jurusan</strong> Nilai yang akan diupload
                </div>
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="col col-md-2"><label for="select" class=" form-control-label">Jurusan</label></div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
                            <option value="1">IPA</option>
                            <option value="2">IPS</option>
                        </select>
                    </div>
                </div>

                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="col col-md-2"><label for="select" class=" form-control-label">Kelas</label></div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
                            <option value="0">10</option>
                            <option value="1">11</option>
                            <option value="2">12</option>
                        </select>
                    </div>
                </div>

                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="col col-md-2"><label for="select" class=" form-control-label">Tingkat</label></div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
                            <option value="0">1</option>
                            <option value="1">2</option>
                        </select>
                    </div>      
                    </form>
                </div>
                <div class="card-footer">
                    <a <button type="button" class="btn btn-primary" href="<?= base_url();?>guru/isinilai">Tambah</a></button>                
                </div>      
                </div>      
</div> -->


 <!-- container --> 
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>Silahkan Upload Nilai</h2>
      </div>

      <?php if(form_error('fileURL')) {?>    
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php print form_error('fileURL'); ?>
        </div>       
    <?php } ?>
    <div class="row padall border-bottom">  
      <div class="col-lg-12">
      <div class="float-right">  
          <a href="<?php print site_url();?>assets/uploads/sample-xlsx.xlsx" class="btn btn-info btn-sm"><i class="fa fa-file-excel"></i> Sample .XLSX</a>
          <a href="<?php print site_url();?>assets/uploads/sample-xls.xls" class="btn btn-info btn-sm"><i class="fa fa-file-excel"></i> Sample .XLS</a>
          <a href="<?php print site_url();?>assets/uploads/sample-csv.csv" class="btn btn-info btn-sm" target="_blank" ><i class="fa fa-file-csv"></i> Sample .CSV</a>
        </div> 
      </div>
      </div>

    <form action="<?php print site_url();?>phpspreadsheet/upload" class="excel-upl" id="excel-upl" enctype="multipart/form-data" method="post" accept-charset="utf-8">
      <div class="row padall">
        <div class="col-lg-6 order-lg-1">
          
          <input type="file" class="custom-file-input" id="validatedCustomFile" name="fileURL">
          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        </div>
        <div class="col-lg-6 order-lg-2">
          <button type="submit" name="import" class="float-right btn btn-primary">Import</button>
        </div>
      </div>
    </form>
    </div>
  </section>

