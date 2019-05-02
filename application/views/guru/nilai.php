<div class="content mt-3">
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
                    <a <button type="button" class="btn btn-primary" href="<?= base_url();?>guru/uploadnilai">Tambah</a></button>                
                </div>      
                </div>      
</div>
       