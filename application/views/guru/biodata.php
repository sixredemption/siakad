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
                        <td><?= $this->session->userdata("nama_lengkap"); ?></td>
                    </tr>

                    <tr>
                        <td><b>Tempat, Tanggal Lahir</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("asal_kota"); ?>, <?= $this->session->userdata("tanggal_lahir"); ?></td>
                    </tr>

                    <tr>
                        <td><b>Kota Asal</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("asal_kota"); ?></td>
                    </tr>

                    <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("jenis_kelamin"); ?></td>
                    </tr>

                    <tr>
                        <td><b>Alamat</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("alamat"); ?></td>
                    </tr>

                    <tr>
                        <td><b>Mengajar</b></td>
                        <td>:</td>
                        <td>Null</td>
                    </tr>

                    <tr>
                        <td><b>No Telfon</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("no_telp"); ?></td>
                    </tr>
                </table>
                <a <button type="button" class="btn btn-primary" href="<?= base_url(); ?>guru/editbiodata">Edit</a></button>
                </fieldset>
                </form>
                </body>
    </section>
</div>