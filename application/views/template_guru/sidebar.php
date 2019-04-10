<body>
    <div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?= base_url();?>guru/index"> SMA 4 MACIPO</a>
        <img src="<?php echo base_url() ?>1.jpg" width="50px">
        </div>
        
        <ul class="nav navbar-nav navbar-right">
					<li class="dropdown dropdown-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img  src="<?php echo base_url() ?>3.jpg" class="img-circle" width="40px" height="40px>						
            <span class="username username-hide-on-mobile">DEBY D.P </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
              <a href="<?= base_url();?>guru/password"><i class="fa fa-gear">Ganti Password</i></a>
              </li>
              <li>
              <a href="<?= base_url();?>guru/index"><i class="fa fa-power-off">Log Out </i></a> 
							</li>
						</ul>
					</li>
				</ul>
        </nav>

      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li><a href="<?= base_url();?>guru/index"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?= base_url();?>guru/nilai"><i class="fa fa-plus"></i> Upload Nilai</a></li>
            <li><a href="<?= base_url();?>guru/biodata"><i class="fa fa-user"></i> Biodata Guru</a></li>
            <li><a href="<?= base_url();?>guru/jadwal"><i class="fa fa-money"></i> Melihat Jadwal </a></li>  
            <li><a href="<?= base_url();?>guru/logout"><i class="fa fa-sign-out"></i> Logout </a></li>
          </ul>
        </menu>
      </aside>
    </div>
</body>