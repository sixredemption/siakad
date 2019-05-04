<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
	</div>
	<!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3 ">
				<div class="panel panel-blue panel-widget">
					<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<em class="glyphicon glyphicon-user glyphicon-l"></em>
					</div>	
					<div class="col-sm-9 col-lg-7 widget-right">
						<?php
						$this->db->from('siswa');
						$this->db->where('id_kelas', 1);
						$q = $this->db->count_all_results();
						echo '<div class="large">' . $q . '</div>';
						?>
						<div class="text-muted">Siswa Ipa</div>
					</div>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-lg-3 ">
				<div class="panel panel-red  border-right">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-user glyphicon-l"></em>
						</div>	
						<div class="col-sm-9 col-lg-7 widget-right">
							<?php
							$this->db->from('siswa');
							$this->db->where('id_kelas', 10);
							$q = $this->db->count_all_results();
							echo '<div class="large">' . $q . '</div>';
							?>
						<div class="text-muted">Siswa Ips</div>
				</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3 ">
				<div class="panel panel-orange  border-right">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-user glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
						<?php
						$data = $this->db->count_all('guru');
						echo '
						<div class="large">' . $data . '</div>';
						?>
						<div class="text-muted">Guru</div>
				</div>	
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3 ">
				<div class="panel panel-teal  ">
					<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<em class="glyphicon glyphicon-user glyphicon-l "></em>
					</div>	
					<div class="col-sm-9 col-lg-7 widget-right">
						<?php
						$data = $this->db->count_all('admin');
						echo '
						<div class="large">' . $data . '</div>';
						?>
						<div class="text-muted">Administrator</div>
					</div>
				</div>
				</div>
			</div>
			<!--/.row-->
	
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary ">
				<div class="panel-heading">
					Pengumuman
					<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
				</div>
				<div class="panel-body timeline-container">

					<table class="table table-striped">
						<tbody>
							<?php
							foreach ($pengumuman  as $umum) :
								?>
								<tr>
									<td>
										<p><?= $umum->tanggal ?></p>
									</td>
									<td>
										<p><?= $umum->judul ?></p>
									</td>

									<td>
										<p><?= $umum->keterangan ?></p>
									</td>
									<td>
										<?php echo anchor('Admin/pengumumanEdit/' . $umum->id_pengumuman, 'Edit'); ?>
										<?php echo anchor('Admin/pengumumanDelete/' . $umum->id_pengumuman, 'Hapus'); ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>

			</div>

		</div>
	</div>
</div>
<!--/.col-->