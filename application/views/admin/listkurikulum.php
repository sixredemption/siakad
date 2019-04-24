<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Kurikulum</li>
			</ol><br>
		</div>
    
		<div class= container>
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Kurikulum</h1>
            
                <div class="col-md-12">
				<div class="panel panel-primary ">
					<div class="panel-heading">
						Daftar Kelas		
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					 <div class="panel-body timeline-container">
						
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><font face ="Calibri"> NO </font></th>
                                <th><font face ="Calibri"> id_jurusan </font></th>
                                <th><font face ="Calibri"> nama_kelas </font></th>
                                <th><font face ="Calibri"> menu </font></th>
                            </tr>
                            <tbody>
                                        <?php  $nomor =1; ?>
                                        <?php 
                                        foreach($kelas  as $ruang):
                                        ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><p><?=  $ruang->id_jurusan?></p></td>
                                    <td><p><?=  $ruang->nama_kelas?></p></td>
                                    
                                    
                                    <td>
                                    <?php echo anchor('Admin/siswaEdit/'.$ruang->id_kelas,'Edit'); ?>
                                    <?php echo anchor('Admin/siswaDelete/'.$ruang->id_kelas,'Hapus'); ?>
                                    </td>
                                </tr>
                                <?php $nomor++; ?>
                                <?php endforeach; ?>
                            </tbody>	
                     </table>
					</div>								
                </div> 
                
                <div class="panel panel-primary ">
					<div class="panel-heading">
						Daftar Jurusan		
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					 <div class="panel-body timeline-container">
						
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><font face ="Calibri"> NO </font></th>
                                <th><font face ="Calibri"> nama_jurusan </font></th>
                                <th><font face ="Calibri"> menu </font></th>
                            </tr>
                            <tbody>
                                        <?php  $nomor =1; ?>
                                        <?php 
                                        foreach($jurusan  as $jur):
                                        ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><p><?=  $jur->nama_jurusan?></p></td>
                                    
                                    
                                    <td>
                                    <?php echo anchor('Admin/jurusanEdit/'.$jur->id_jurusan,'Edit'); ?>
                                    <?php echo anchor('Admin/jurusanDelete/'.$jur->id_jurusan,'Hapus'); ?>
                                    </td>
                                </tr>
                                <?php $nomor++; ?>
                                <?php endforeach; ?>
                            </tbody>	
                     </table>
					</div>								
                </div> 
                
                <div class="panel panel-primary ">
					<div class="panel-heading">
						Daftar Mapel		
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					 <div class="panel-body timeline-container">
						
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><font face ="Calibri"> NO </font></th>
                                <th><font face ="Calibri"> nama_mapel </font></th>
                                <th><font face ="Calibri"> menu </font></th>
                            </tr>
                            <tbody>
                                        <?php  $nomor =1; ?>
                                        <?php 
                                        foreach($mapel  as $mpl):
                                        ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><p><?=  $mpl->nama_mapel?></p></td>
                                    
                                    
                                    <td>
                                    <?php echo anchor('Admin/mapelEdit/'.$mpl->id_mapel,'Edit'); ?>
                                    <?php echo anchor('Admin/mapelDelete/'.$mpl->id_mapel,'Hapus'); ?>
                                    </td>
                                </tr>
                                <?php $nomor++; ?>
                                <?php endforeach; ?>
                            </tbody>	
                     </table>
					</div>								
                </div> 
                
                <div class="panel panel-primary ">
					<div class="panel-heading">
						Daftar Tahun Ajaran		
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					 <div class="panel-body timeline-container">
						
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><font face ="Calibri"> NO </font></th>
                                <th><font face ="Calibri"> tahun_ajaran </font></th>
                                <th><font face ="Calibri"> menu </font></th>
                            </tr>
                            <tbody>
                                        <?php  $nomor =1; ?>
                                        <?php 
                                        foreach($tahun_ajaran  as $tahun):
                                        ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><p><?=  $tahun->tahun_ajaran?></p></td>
                                    
                                    
                                    <td>
                                    <?php echo anchor('Admin/tahunEdit/'.$tahun->id_tahun_ajaran,'Edit'); ?>
                                    <?php echo anchor('Admin/tahunDelete/'.$tahun->id_tahun_ajaran,'Hapus'); ?>
                                    </td>
                                </tr>
                                <?php $nomor++; ?>
                                <?php endforeach; ?>
                            </tbody>	
                     </table>
					</div>								
				</div> 

			
            
            
			</div>
		</div>
</div>
	
        
       