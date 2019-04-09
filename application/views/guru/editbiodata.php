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

        <div class="container">
		<div class="row mt-3">
			<div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Form Edit Guru</h1>
                </div>
        
                <div class="card-body">
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
            </div> 
    
        <a <button type="submit" class="btn btn-primary" href="<?= base_url();?>guru/biodata">Simpan</a></button>
        <a <button type="reset" class="btn btn-danger" href="<?= base_url();?>guru/biodata">Reset</a></button>
        </div>
        </div>	
    	</div>
</fieldset>
</form>
</body>
</section>
</div>