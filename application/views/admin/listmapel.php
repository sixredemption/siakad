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
					<form method="post"  action="<?php  echo base_url(). 'admin/addmapel'; ?>">
						<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Mapel</button>
					</form>
				</div><br>
                <div class="col-md-12">
                <div class="panel panel-primary ">
					<div class="panel-heading">
						Daftar Mapel		
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					 <div class="panel-body timeline-container">
						
                     <table data-toggle="table"  data-url="<?base_url('assets_admin')?>/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th><font face ="Calibri"> No</font></th>
                                <th><font face ="Calibri"> Nama Mapel </font></th>
                                <th><font face ="Calibri"> Menu </font></th>
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
                                    <?php echo anchor('Admin/mapelEdit/'.$mpl->id_mapel,'<span class="glyphicon glyphicon-pencil"></span>'); ?>
                                    <?php echo anchor('Admin/mapelDelete/'.$mpl->id_mapel,'<span class="glyphicon glyphicon-trash"></span>'); ?>
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
        </div>
</div>