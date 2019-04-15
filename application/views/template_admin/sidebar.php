<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			<img src="<?= base_url('assets_admin/photos') ?>/dimas.jpg" class="img-responsive" alt="">
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name">NIP :  <?= $this->session->userdata("nip"); ?></div>
			<div class="profile-usertitle-status"><span class="indicator label-success"></span><?= $this->session->userdata("nama"); ?></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="divider"></div>
	<form role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		</div>
	</form>
	<ul class="nav menu">
		<div class="sidebar-heading">
		</div>
		<li class="parent"><a href="<?= base_url('admin/index') ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
		<li><a href="<?= base_url('admin/daftarsiswaspp') ?>"><em class="fa fa-money">&nbsp;</em> Status Pembayaran Spp</a></li>
		<li><a href="<?= base_url('admin/uploadjadwal') ?>"><em class="fa fa-upload">&nbsp;</em> Upload Jadwal</a></li>
		<li><a href="<?= base_url('admin/pengumuman') ?>"><em class="fa fa-exclamation">&nbsp;</em>Pengumuman</a></li>
		<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-user-plus">&nbsp;</em> Tambah data <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
			<ul class="children collapse" id="sub-item-2">
				<li><a class="" href="<?= base_url('admin/listguru') ?>">
						<span class="fa fa-arrow-right">&nbsp;</span>Tambah Data Guru
					</a></li>
				<li><a class="" href="<?= base_url('admin/listsiswa') ?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Tambah Data Siswa
					</a></li>
				<li><a class="" href="<?= base_url('admin/listpegawai') ?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Tambah Data Pegawai
					</a></li>
			</ul>
		</li>
		<li><a href="<?= base_url('logout'); ?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
	</ul>
</div>
