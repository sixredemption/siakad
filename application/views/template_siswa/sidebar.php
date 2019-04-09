<body>
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
            <li><a href="<?= base_url();?>home/index"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?= base_url();?>home/nilai"><i class="fa fa-bookmark-o"></i> Nilai Siswa</a></li>
						<li><a href="<?= base_url();?>home/jadwal"><i class="fa fa-bookmark-o"></i>Jadwal Siswa</a></li>
            <li><a href="<?= base_url();?>home/pengumuman"><i class="fa fa-bell"></i> Pengumuman</a></li>
            <li><a href="<?= base_url();?>home/statusspp"><i class="fa fa-money"></i>Status Pembayaran Spp</a></li>
						<li><a href="<?= base_url();?>logout/siswa"><i class="fa fa-sign-out"></i> Logout </a></li>
          </ul>
        </menu>
      </aside>
     
    </div>
