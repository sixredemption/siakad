<!-- <body>
    <div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= base_url();?>home/index">SMA 4 MACIPO</a>
      </div>
        </nav>  
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li><a href="<?= base_url();?>siswa/index"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?= base_url();?>siswa/nilai"><i class="fa fa-bookmark-o"></i> Nilai Siswa</a></li>
						<li><a href="<?= base_url();?>siswa/jadwal"><i class="fa fa-bookmark-o"></i>Jadwal Siswa</a></li>
            <li><a href="<?= base_url();?>siswa/pengumuman"><i class="fa fa-bell"></i> Pengumuman</a></li>
            <li><a href="<?= base_url();?>siswa/statusspp"><i class="fa fa-money"></i>Status Pembayaran Spp</a></li>
						<li><a href="<?= base_url();?>logout/siswa"><i class="fa fa-sign-out"></i> Logout </a></li>
          </ul>
        </menu>
      </aside>
    </div> -->

		
<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
             </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <menu>
          <<li><a href="<?= base_url();?>siswa/index"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?= base_url();?>siswa/nilai"><i class="fa fa-bookmark-o"></i> Nilai Siswa</a></li>
						<li><a href="<?= base_url();?>siswa/jadwal"><i class="fa fa-bookmark-o"></i>Jadwal Siswa</a></li>
            <li><a href="<?= base_url();?>siswa/pengumuman"><i class="fa fa-bell"></i> Pengumuman</a></li>
            <li><a href="<?= base_url();?>siswa/statusspp"><i class="fa fa-money"></i>Status Pembayaran Spp</a></li>
						<li><a href="<?= base_url();?>logout/siswa"><i class="fa fa-sign-out"></i> Logout </a></li>
          </ul>
        </menu>
    
</aside><!-- /#left-panel -->

<header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    

                        
                        
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right show">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img  src="<?php echo base_url() ?>3.jpg" class="user-avatar rounded-circle" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu show" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-88px, 0px, 0px);">
                        <li>
              <a href="<?= base_url();?>siswa/password"><i class="fa fa-gear">Ganti Password</i></a>
              </li>
              <li>
              <a href="<?= base_url();?>siswa/index"><i class="fa fa-power-off">Log Out </i></a> 
							</li>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header>
