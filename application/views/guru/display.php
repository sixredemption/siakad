
 <!-- container --> 
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>Silahkan upload nilai</h2>
      </div>
      <div class="row padall border-bottom">  
      <div class="col-lg-12">
      <div class="float-right">  
          <a href="<?php print site_url();?>phpspreadsheet" class="btn btn-info btn-sm"><i class="fa fa-file-upload"></i> Back to Upload</a>
        </div> 
      </div>
      </div>
      <div class="row padall">
        
        <table class="table table-striped">
          <thead>
            <tr class="table-primary">
              <th scope="col">Nilai</th>
              <th scope="col">Guru</th>
              <th scope="col">Kelas</th>
              <th scope="col">Siswa</th>
			  <th scope="col">Mapel</th>
			  <th scope="col">Nilai</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($dataInfo as $key=>$element) { ?>
            <tr>
              <td><?php print $element['id_nilai'];?></td>
              <td><?php print $element['id_guru'];?></td>
              <td><?php print $element['id_kelas'];?></td>
              <td><?php print $element['id_siswa'];?></td>
			  <td><?php print $element['id_mapel'];?></td>
			  <td><?php print $element['nilai_siswa'];?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
        
      </div>
    </div>
  </section>

