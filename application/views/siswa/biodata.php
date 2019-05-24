<div class="container">
    <section class="content">
        <div class="jumbotron text-center">
            <h3> Biodata Siswa </h3>
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
                            <img src="<?php echo base_url('foto/siswa/default.jpg') ?>" width="200px" height="300px" />
                        </td>
                    </tr>

                    <!-- <div class="panel-body">
	<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%"> -->
                    <tr>
                        <td><b>NIS</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("nisn"); ?><?= $this->session->userdata("id_siswa"); ?></td>
                    </tr>

                    <tr>
                        <td><b>Nama</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("nama_siswa"); ?></td>
                    </tr>

                    <tr>
                        <td><b>Tempat, Tanggal Lahir</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("kota"); ?> , <?= $this->session->userdata("tanggal_lahir"); ?></td>
                    </tr>

                    <tr>
                        <td><b>Kota Asal</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("kota"); ?></td>
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
                        <td><b>No Telfon</b></td>
                        <td>:</td>
                        <td><?= $this->session->userdata("no_telp"); ?></td>
                    </tr>
                </table>


                </form>
                </body>
    </section>
</div>