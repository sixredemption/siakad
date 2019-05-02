<!-- TERBENGKALAI -->
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
                        <th>Mapel</th>
                        <th>Nilai</th>
                    </tr>
                    <tr>
                    <td width="100">1</td>
                    <td width="100">13442</td>
                    <td>Deby</td>
                    <td>IPA</td>
                        <td width="150">
                        <input type="int" onkeyup="updateNilai("13442")" id="nilai13442" value="80" class="form-control">
                        </td>
                       </tr> 
                    </tr>
                </thead>
            </table>            
            <div claas="col-sm-1">
            <a <button type="button" class="btn btn-primary" href="<?= base_url();?>guru/tambahnilai">Simpan</a></button>
            <a <button type="button" class="btn btn-danger" href="<?= base_url();?>guru/isinilai">Kembali</a></button>
            </div>
    </section>
</div>

