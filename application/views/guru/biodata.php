 <div class="container">
 <section class="content">
    <div class="jumbotron text-center"> 
      <h3> Biodata Guru </h3>
      </section> 
    </div>

    <div class="col-md-12">
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-heading">
                <i class="fa fa-external-link-square"></i> Biodata
            </div>
            
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td rowspan="15" width="250px">
                            <img src="<?php echo base_url('foto/pengumuman/default.jpg') ?>" width="300px" height="300px" />
                        </td>
                    </tr>

                    <tr>
                        <td><b>NIG</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("nig_guru"); ?></td>
                    </tr>

                    <tr>
                        <td><b>Nama</b></td>
                        <td>:</td>
                        <td>Coba Tebak</td>
                    </tr>
                    
                    <tr>
                        <td><b>Tempat, Tanggal Lahir</b></td>
                        <td>:</td>
                        <td>Pringgabaya, Lombok Timur, 30 September 1999</td>
                    </tr>
                    
                    <tr>
                        <td><b>Kota Asal</b></td>
                        <td>:</td>
                        <td>Purbalingga</td>
                    </tr>
                    
                    <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td>:</td>
                        <td>Laki - Laki</td>
                    </tr>
                    
                    <tr>
                        <td><b>Alamat</b></td>
                        <td>:</td>
                        <td>Jl. Bentar Mikir</td>
                    </tr>
                    
                    <tr>
                        <td><b>Mengajar</b></td>
                        <td>:</td>
                        <td>Ipa</td>
                    </tr>
                    
                    <tr>
                        <td><b>No Telfon</b></td>
                        <td>:</td>
                        <td>085367469857</td>
                    </tr>
                </table>
    <a <button type="button" class="btn btn-primary" href="<?= base_url();?>guru/editbiodata">Edit</a></button>
</fieldset>
</form>
</body>
</section>
</div> 