<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?php echo base_url() ?>foto/1.png" width="40px"><span style="color:blue">SMAN 4</span> MACIPO</a>

            </div>

            <!-- <div style="color:white">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" src="<?php echo base_url() ?>assets_siswa/images/leo.jpg" width="40px" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">Siswa</h5>
                <div class="location text-sm-center"><i class="fa fa-map-marker"></i> Malang, Indonesia</div>
            </div>
		</div> -->

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <menu>
                        <ul class="menu-title">
                            <li><a href="<?= base_url(); ?>siswa/index"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="<?= base_url(); ?>siswa/biodata"><i class="fa fa-user"></i> Biodata siswa</a></li>
                            <li><a href="<?= base_url(); ?>siswa/nilai"><i class="fa fa-plus"></i> Nilai Siswa</a></li>
                            <li><a href="<?= base_url(); ?>siswa/jadwal"><i class="fa fa-bookmark-o"></i> Jadwal Siswa</a></li>
                            <li><a href="<?= base_url(); ?>siswa/pengumuman"><i class="fa fa-bell"></i> Pengumuman</a></li>
                            <li><a href="<?= base_url(); ?>siswa/statusspp"><i class="fa fa-money"></i> Status Pembayaran Spp</a></li>
                        </ul>
                    </menu>
            </div>
    </aside>
        <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
        <a class="navbar-brand" href="<?=base_url();?>siswa/index"><img src="<?php echo base_url() ?>foto/1.png" width="40px"><span style="color:whitegi">SMAN 4</span> MACIPO</a>
        </div>
            
        <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
				<li>
                    <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                 
        <h3 class="menu-title">MENU</h3><!-- /.menu-title -->            
            
          
		  	<li><a href="<?= base_url();?>siswa/index"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= base_url();?>siswa/biodata"><i class="fa fa-user"></i> Biodata siswa</a></li>
            <li><a href="<?= base_url();?>siswa/nilai"><i class="fa fa-book"></i> Nilai Siswa</a></li>
			<li><a href="<?= base_url();?>siswa/jadwal"><i class="fa fa-bookmark-o"></i> Jadwal Siswa</a></li>
            <li><a href="<?= base_url();?>siswa/pengumuman"><i class="fa fa-bell"></i> Pengumuman</a></li>
            <li><a href="<?= base_url();?>siswa/statusspp"><i class="fa fa-money"></i> Status Pembayaran Spp</a></li>
          
        
		</div>
	</aside>
</header>

		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
			<div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                          
                            <li class="active">Home</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
