<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Kurikulum</li>
			</ol><br>
		</div>

		<div class= container-fluid>
        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Kurikulum</h1>
                <div class="panel-button-tab-left">
				
				</div><br>
                <div class="col-md-12">
				<div class="panel panel-primary ">
					<div class="panel-heading">
						Daftar Kelas
					</div>
					 <div class="panel-body timeline-container">
					 <form method="post"  action="<?php  echo base_url(). 'admin/addkelas'; ?>">
						<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Kelas</button>
					</form>			
                     <table data-toggle="table"  data-url="<?base_url('assets_admin')?>/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th><font face ="Calibri"> No </font></th>
                                <th><font face ="Calibri"> Jurusan </font></th>
                                <th><font face ="Calibri"> Nama Kelas </font></th>
                                <th><font face ="Calibri"> Menu </font></th>
                            </tr>
                            <tbody>
                            <?php
									$this->db->select('nama_jurusan, nama_kelas, id_kelas');
									// SELECT 
									$q = $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan')->get('kelas');
									$nomor = 1;
									foreach ($q->result_array() as $ruang) : ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><p><?=  $ruang['nama_jurusan']?></p></td>
                                    <td><p><?=  $ruang['nama_kelas']?></p></td>
                                    
                                    
                                    <td>
                                    <?php echo anchor('Admin/kelasEdit/'.$ruang['id_kelas'],'<button class="btn btn-primary margin" type="button"><span class="fa fa-pencil"></span> </button>'); ?>
                                    <?php echo anchor('Admin/kelasDelete/'.$ruang['id_kelas'],'<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
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
	
        
       