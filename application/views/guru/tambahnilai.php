<div class="container">
<section class="content">
<div class="jumbotron text-center"> 
      <h3> Nilai Siswa Jurusan IPA</h3>
      </section> 
</div>

<div class="col-md-12">
<section class="content">
       <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Nilai IPA
            </div>

            <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIG</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                    </tr>
                    <tr>
                    <td width="100">1</td>
                    <td width="100">13442</td>
                    <td>Deby</td>
                        <td width="150">
                        <input type="int" onkeyup="updateNilai("13442")" id="nilai13442" value="80" class="form-control">
                        </td>
                       </tr> 
                    </tr>
                </thead>
            </table>            
            <div claas="col-sm-1">
            <button type="button" class="btn btn-danger"><a href="<?= base_url();?>guru/tambahnilai">Simpan</a></button>
            <button type="button" class="btn btn-primary"><a href="<?= base_url();?>guru/isinilai">Kembali</a></button>
            </div>
    </section>
</div>

