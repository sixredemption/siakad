<div class="container">
<section class="content">
<div class="jumbotron text-center">
  <h2>Nilai Siswa</h2>
</div>

<div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col col-md-8">
                    <i class="fa fa-external-link-square"></i>
                    Upload Nilai
                </div>
                <div class="col col-md-4">
                    <input class="search" type="text" placeholder="Cari..." required>	
                    <input class="button" type="button" value="Cari">
                </div>
            </div>	
        </div>
        <div class="panel-body">
        <h2>Pilih nilai kelas yang akan diupload<h2>
        
        <!-- <form action="">
          Select a file: <input type="file" name="myFile"><br><br>
            </form>
            <button type="button" class="btn btn-primary">Posting</button>
            <button type="button" class="btn btn-danger">Reset</button> -->
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">       
                <select>
                <option nama="Mapel" value="ipa"><a href="<?= base_url();?>ipa/guru">IPA</a></option>
                <option nama="Mapel" value="ips"><a href="<?= base_url();?>ips/guru">IPS</a></option>
                <option nama="Mapel" value="bi"><a href="<?= base_url();?>bi/guru">BI</a></option>
                </select>
                </label>

                <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">       
                <select>
                <option nama="Mapel" value="ipa"><a href="<?= base_url();?>ipa/guru">Kelas 10</a></option>
                <option nama="Mapel" value="ips"><a href="<?= base_url();?>ips/guru">Kelas 11</a></option>
                <option nama="Mapel" value="bi"><a href="<?= base_url();?>bi/guru">Kelas 12</a></option>
                </select>
                </label>

                <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">       
                <select>
                <option nama="Mapel" value="ipa"><a href="<?= base_url();?>ipa/guru">1</a></option>
                <option nama="Mapel" value="ips"><a href="<?= base_url();?>ips/guru">2</a></option>
                </select>
                </label> 

                <button type="button" class="btn btn-danger"><a href="<?= base_url();?>guru/isinilai">Tampilkan</a></button>      
</section>
</div>
                <!-- <menu>
          <ul class="menu-content">
            <h1><a href="<?= base_url();?>home/index"><i class="fa fa-plus"></i> IPA</a></h1>
            <h1><a href="<?= base_url();?>nilai/guru"><i class="fa fa-plus"></i> IPS</a></h1>
          </ul>
        </menu>
       
        <!-- <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Kelas</th>
                        <th> Edit </th>
                        <th> Hapus </th>
                    </tr>
                </thead>
            </table>
        </div> -->
        <!-- <script type="text/javascript">
    function updateDataWalikelas(id_walikelas){
        var id_guru = $("#guru"+id_walikelas).val();
        $.ajax({
            type:'GET',
            url :'<?php echo base_url() ?>index.php/walikelas/updateWalikelas',
            data:'id_walikelas='+id_walikelas+'&id_guru='+id_guru,
            success:function(html){
                //$("#showRombel").html(html);
                //loadPelajaran();
            }
        })
    }

</script> -->

                <!-- <div class="col-sm-1">
                    <button type="submit" name="submit" class="btn btn-danger"><a href="<?= base_url();?>isinilai/guru">Submit</a></button>
                </div> -->

