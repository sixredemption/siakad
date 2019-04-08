<body>
    <div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?= base_url();?>guru/index"> SMA 4 MACIPO</a>
        <img src="<?php echo base_url() ?>1.jpg" width="50px">
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