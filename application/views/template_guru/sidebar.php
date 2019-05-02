<body>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>guru/index"><img src="<?php echo base_url() ?>foto/1.png" width="40px"><span style="color:blue">SMAN 4</span> MACIPO</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">Menu</h3>
                            <li class="active"><a href="<?= base_url(); ?>guru/index"><i class="menu-icon ti-home"></i>  Home</a></li>
                            <li class="active"><a href="<?= base_url(); ?>guru/nilai"><i class="menu-icon ti-plus"></i>  Upload Nilai</a></li>
                            <li class="active"><a href="<?= base_url(); ?>guru/biodata"><i class="menu-icon ti-user"></i>  Biodata Guru</a></li>
                            <li class="active"><a href="<?= base_url(); ?>guru/jadwal"><i class="menu-icon ti-money"></i>  Melihat Jadwal </a></li>
                            <li class="active"><a href="<?= base_url(); ?>Home"><i class="menu-icon ti-power-off"></i> Logout </a></li>
                        </ul>
            </div>

            <!-- <footer class="aside-footer">
                <div class="container">
                    <div style="color:white">Ikuti juga :</div>
                    <a href="https://www.facebook.com/?ref=tn_tnmn"><i class="fa fa-facebook-square fa-2x"></i></a>
                    <a href="https://www.instagram.com/deby_pras/"><i class="fa fa-instagram fa-2x"></i></a>
                    <a href="https://twitter.com/hashtag/AutoGampang?src=ptrn"><i class="fa fa-twitter-square fa-2x"></i></a>
                    <a href="https://www.youtube.com/watch?v=JbQlX6Px1Qg"><i class="fa  fa-youtube-play fa-2x"></i></a>
                    <a href="https://github.com/sixredemption/siakad"><i class="fa  fa-github fa-2x"></i></a>
                </div>
            </footer> -->
    </aside>

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-6">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    

                       
                    

                <div class="col-sm-6">
                    <div class="user-area dropdown float-right">
                        
                    </div>
                </div>
            </div>
            </header>

            <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Menu</h1>
                    </div>
                </div>
            </div>
          <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
            </div>

</body>