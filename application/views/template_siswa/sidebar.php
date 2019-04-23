<body>
    <div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
        <a class="navbar-brand" href="<?=base_url('admin/index')?>"><span style="color:blue">SMAN 4</span> MACIPO</a>
        <img src="<?php echo base_url() ?>1.png" width="50px">
        </div>
        
        <ul class="nav navbar-nav navbar-right">
					<li class="dropdown dropdown-user">
						<a href="<?= base_url();?>siswa/home" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img  src="<?php echo base_url() ?>3.jpg" class="img-circle" width="40px" height="40px>						
            <span class="username username-hide-on-mobile">DHANDY </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
              <a href="<?= base_url();?>siswa/password"><i class="fa fa-gear">Ganti Password</i></a>
              </li>
              <li>
              <a href="<?= base_url();?>template_home/index"><i class="fa fa-power-off">Log Out </i></a> 
							</li>
						</ul>
					</li>
				</ul>
      </nav>

<!-- Left Panel -->

		<aside class="sidebar">		
        <menu> 
						<ul class="menu-content">

            <li><a href="<?= base_url();?>siswa/index"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?= base_url();?>siswa/nilai"><i class="fa fa-plus"></i> Nilai Siswa</a></li>
						<li><a href="<?= base_url();?>siswa/jadwal"><i class="fa fa-bookmark-o"></i>Jadwal Siswa</a></li>
            <li><a href="<?= base_url();?>siswa/pengumuman"><i class="fa fa-bell"></i> Pengumuman</a></li>
            <li><a href="<?= base_url();?>siswa/statusspp"><i class="fa fa-money"></i>Status Pembayaran Spp</a></li>
						<li><a href="<?= base_url();?>logout/siswa"><i class="fa fa-sign-out"></i> Logout </a></li>
          </ul>
      </menu>
    
		</aside>
</body>					
<!-- /#left-panel -->

                    <!-- <div class="language-select dropdown" id="language-select">
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

        </header> -->
