<div class="container">
    <section class="content">
    <div class="jumbotron text-center"> 
      <h3> Edit Biodata Guru </h3>
      </section> 
    </div>

    <div class="col-md-12">
        <section class="content">
        <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Biodata
		</div>  
		
				<?php if ($this->session->flashdata('success')) : ?>
					<div class = "alert alert-success" role = "alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif ; ?>

        		<div class="container">
				<div class="row mt-3">
				<div class="col-md-6">
            		<div class="card">
                	<div class="card-header">
                    <h1>Form Edit Guru</h1>
				</div>

				<form action = "<?php echo base_url("C_guru/edit/$guru->id_guru") ?>" method = "post" enctype = "multipart/form-data">


				<div class="form-group">
					<label for="nig_guru">NIG :</label>
					<input type="text" class="form-control" name="nig_guru" value="<?php echo $guru->nig_guru ?>">
				</div>

				<div class="form-group">
					<label for="nama_lengkap">Nama :</label>
					<input type="text" class="form-control" name="nama_lengkap" value="<?php echo $guru->nama_lengkap ?>">
				</div>

				<div class="form-group">
					<label for="tanggal_lahir">Tanggal Lahir :</label>
					<input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $guru->tanggal_lahir ?>">
				</div>

				<div class="form-group">
					<label for="asal_kota">Kota Asal :</label>
					<input type="text" class="form-control" name="asal_kota" value="<?php echo $guru->asal_kota ?>">
				</div>
        <!-- <div class="card-body">
        <div class="form-group-input-group">
			<label for="nis">NIP :</label>
			<input type="text" class="form-control" id="nis">
		</div>
		
        <div class="form-group">
			<label for="nama">Nama :</label>
			<input type="text" class="form-control" id="nama">
            </div>
        
            <div class="form-group">
            <label for="Kelas">Jenis Kelamin</label>
        <select class="form-control">
            <option value="">Laki-Laki</option>
            <option value="">Perempuan</option> 
        </select>
        </div>
        	  
        <div class="form-group">
			<label for="kotaasal"> Alamat:</label>
			<input type="text" class="form-control" id="kotaasal">
		</div>
        
        <div class="form-group">
            <label for="Kelas">Mengajar:</label>
        <select class="form-control">
            <option value="" disabled selected>Mata Pelajaran</option>
            <option value="">Bahasa Indonesia</option>
            <option value="">Bahasa Inggris</option>
            <option value="">Biologi</option>
            <option value="">Sejarah</option>
            <option value="">Kimia</option>
            <option value="">Geografi</option>
            <option value="">Fisika</option>
            <option value="">Ekonomi</option>
            <option value="">Matematika</option>
            <option value="">Pendidikan Kewarganegaraan</option>
            <option value="">Seni Budaya</option>
            <option value="">Prakarya</option>  
        </select>
        </div>
    
        <div class="form-group">
			<label for="nohp"> Nomer Hp:</label>
			<input type="number" class="form-control" id="kotaasal">
		</div>	 
        <div class="form-group">
			<label for="nama">Foto</label>
			<input type="file" class="form-control" id="nama">
            </div>  -->
    
         <button type="submit" class="btn btn-primary" href="<?= base_url();?>guru/biodata">Simpan</a></button>
         <button type="reset" class="btn btn-danger" href="<?= base_url();?>guru/biodata">Reset</a></button>
        <!-- </div>
        </div>	
    	</div>
</fieldset>
</form>
</body>
</section>
</div> -->
