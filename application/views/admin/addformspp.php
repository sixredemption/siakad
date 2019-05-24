<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="glyphicon glyphicon-home"></em>
				</a></li>
				<li class="active">Tambah Data Spp</li>
			</ol>
        </div>      
        <h1>Tambah Data Spp</h1>
    <div class="container-fluid">
    <form  action="<?php echo base_url(). 'Admin/sppAdd'; ?>" method="post" enctype="multipart/form-data">
    <!-- <input type="hidden" name="id_spp" value="id_spp" />  -->

           <div class="col-md-4">            
               <div class="form-group">
                   <label for="id_siswa">Nama</label>
                       <select class="form-control" name="id_siswa">
                           <option value="" disabled selected>pilih siswa</option>

                           <?php foreach($siswa as $sis):?>
                                       <option value="<?= $sis->id_siswa?>"><?= $sis->nama_siswa?></option>
                                   <?php  endforeach;?>
                               
                       </select>
               </div>
           </div>

           <div class="col-md-4">            
               <div class="form-group">
                   <label for="id_kelas">Kelas</label>
                       <select class="form-control" name="id_kelas">
                           <option value="" disabled selected>pilih kelas</option>

                           <?php foreach($kelas as $kel):?>
                                       <option value="<?= $kel->id_kelas?>"><?= $kel->nama_kelas?></option>
                                   <?php  endforeach;?>
                               
                       </select>
               </div>
           </div>    

           <div class="col-md-4">
               <div class="form-group">
                   <label for="id_semester">Semester</label>
                   <select class="form-control" name="id_semester" >
                       <option value="" disabled selected>pilih semester</option>
                       <option value ="1">1</option>
                       <option value ="2">2</option>
                   </select>    
               </div>
           </div>

           <div class="col-md-4">
               <div class="form-group">
                   <label for="id_bulan">Bulan</label>
                   <select class="form-control" name="id_bulan" >
                       <option value="" disabled selected>pilih semester</option>
                       <option value ="1">januari</option>
                       <option value ="2">februari</option>
                       <option value ="3">maret</option>  
                       <option value ="4">april</option>  
                       <option value ="5">mei</option>  
                       <option value ="6">mei</option>
                       <option value ="7">juli</option>
                       <option value ="8">agustus</option>
                       <option value ="9">september</option>        
                       <option value ="10">oktober</option>
                       <option value ="11">november</option>
                       <option value ="12">desember</option>

                   </select>    
               </div>
           </div>

           <div class="col-md-5">
               <div class="form-group">
                   <label for="tahun_ajaran">Tahun Ajaran</label>
                   <select class="form-control" name="id_tahun_ajaran" >
                       <option value="" disabled selected>Pilih Tahun Ajaran</option>
                       
                       <?php foreach($tahun_ajaran as $thn):?>
                                       <option value="<?= $thn->id_tahun_ajaran?>"><?= $thn->tahun_ajaran?></option>
                                   <?php  endforeach;?>
                   
                   </select>    
               
               </div>
           </div>

           <div class="col-md-3">
               <div class="form-group">
                   <label for="status">Status</label>
                   <select class="form-control" name="status" >
                       <option value="" disabled selected>Pilih Status</option>
                       <option> Lunas</option>    
                       <option>Belum Lunas</option>    
                   </select>    
               </div>
           </div>

           <div class="col-md-12">
           <button type="submit" class="btn btn-primary">Simpan</button>
           <button type="reset" class="btn btn-danger">Reset</button>
           </div>
   </form>

            
        </div>
</div>
		