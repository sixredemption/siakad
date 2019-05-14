<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
			<li class="active">Edit Guru</li>
		</ol>
	</div>
	<?php if ($this->session->flashdata('success')) : ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php endif; ?>
		<h1>Edit Guru</h1>
	<div class="container-fluid">
		<div class="panel-button-tab-left">				
			<form method="post"  action="<?php  echo base_url(). 'admin/listguru'; ?>">
				<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>List Guru</button>
			</form>
		</div><br>
		<form action="<?php echo base_url("Admin/guruEdit/$guru->id_guru") ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id_guru" value="<?php echo $guru->id_guru ?>" />
						<div class="col-md-8">
							<div class="form-group">
								<label for="nig">NIG :</label>
								<input type="text" class="form-control" name="nig_guru" value="<?php echo $guru->nig_guru ?>">
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label for="nama">Nama :</label>
								<input type="text" class="form-control" name="nama_lengkap" value="<?php echo $guru->nama_lengkap ?>">
							</div>
						</div>
						
						<div class="col-md-5">
							<div class="form-group">
								<label for="tanggal_lahir">Tanggal lahir:</label>
								<input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $guru->tanggal_lahir ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="asal_kota"> Kota Asal:</label>
								<input type="text" class="form-control" name="asal_kota" value="<?php echo $guru->asal_kota ?>">
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label for="alamat">Alamat anda:</label>
								<textarea type="text" class="form-control" name="alamat" value="" rows="10"><?php echo $guru->alamat ?></textarea>
							</div>
						</div>	

						<div class="col-md-5">
							<div class="form-group">
								<label for="no_telp"> Nomer Hp:</label>
								<input type="number" class="form-control" name="no_telp" value="<?php echo $guru->no_telp ?>">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin:</label>
								<input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($guru->jenis_kelamin == 'Laki-laki') {
																				echo 'checked';
																			} ?>>Laki-Laki
								<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($guru->jenis_kelamin == 'Perempuan') {
																				echo 'checked';
																			} ?>>Perempuann
							</div>
						</div>	
						<div class= col-md-8>
							<div class="form-group">
								<label for="password">password:</label>
								<input type="password" class="form-control" name="password" value="<?php echo $guru->password ?>">
							</div>
						</div>	
					<div class="col-md-12">																
							<div class="form-group">
								<label for="foto">Photo</label>
								<input class="form-control-file" type="file" name="foto" />
								<input class="form-control-file" type="hidden" name="old_image" value="<?php echo $guru->foto ?>" />
								<img src="<?php echo base_url('foto/guru/' . $guru->foto) ?>" width="64" />
							</div>
                	</div>   
					<div class=col-md-12>      
                		<button type="submit" class="btn btn-primary"  >Simpan</button>
                		<button type="reset" class="btn btn-danger">Reset</button>
               		</div>
         </form>
        </div>     
  </div>      

