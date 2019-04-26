<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>guru/index"><img src="<?php echo base_url() ?>foto/1.png" width="40px"><span style="color:blue">SMAN 4</span> MACIPO</a>
            </div>

            <div style="color:white">
                <div class="mx-auto d-block">
                    <img class="rounded-circle mx-auto d-block" src="<?php echo base_url() ?>assets_guru/images/avatar/1.jpg" alt="Card image cap">
                    <h5 class="text-sm-center mt-2 mb-1"><?= $this->session->userdata("nama_lengkap"); ?></h5>
                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i><?= $this->session->userdata("asal_kota"); ?></div>
                </div>
            </div>


            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">Menu</h3>
                    <menu>
                        <ul class="menu-title">
                            <li><a href="<?= base_url(); ?>guru/index"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="<?= base_url(); ?>guru/nilai"><i class="fa fa-plus"></i> Upload Nilai</a></li>
                            <li><a href="<?= base_url(); ?>guru/biodata"><i class="fa fa-user"></i> Biodata Guru</a></li>
                            <li><a href="<?= base_url(); ?>guru/jadwal"><i class="fa fa-money"></i> Melihat Jadwal </a></li>
                        </ul>
                    </menu>
            </div>

            <footer class="aside-footer">
                <div class="container">
                    <div style="color:white">Ikuti juga :</div>
                    <a href="https://www.facebook.com/?ref=tn_tnmn"><i class="fa fa-facebook-square fa-2x"></i></a>
                    <a href="https://www.instagram.com/deby_pras/"><i class="fa fa-instagram fa-2x"></i></a>
                    <a href="https://twitter.com/hashtag/AutoGampang?src=ptrn"><i class="fa fa-twitter-square fa-2x"></i></a>
                    <a href="https://www.youtube.com/watch?v=JbQlX6Px1Qg"><i class="fa  fa-youtube-play fa-2x"></i></a>
                    <a href="https://github.com/sixredemption/siakad"><i class="fa  fa-github fa-2x"></i></a>
                </div>
            </footer>
    </aside>

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-6">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url() ?>3.jpg">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a href="<?= base_url(); ?>guru/password"><i class="fa fa-cog"> Ganti Password </i></a>
                            <a href="<?= base_url(); ?>guru/logout"><i class="fa fa-power-off"> Logout </i></a>
                        </div>
                    </div>
                </div>
            </div>
</body>