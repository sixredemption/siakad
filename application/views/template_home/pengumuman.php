<body data-spy="scroll" data-target="#navbar-example">

    <div id="preloader"></div>

    <header>
        <!-- header-area start -->
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <!-- Navigation -->
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="<?= base_url() ?>">
                                    <h1>SMAN 4 MACIPO</h1>
                                    <!-- Uncomment below if you prefer to use an image logo -->
                                    <!-- <img src="img/logo.png" alt="" title=""> -->
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active">
                                        <a class="page-scroll" href="<?= base_url() ?>">Home</a>
                                    </li>

                                    <li>
                                        <a class="page-scroll" href="<?= base_url() ?>#services">Tentang Sekolah</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url() ?>#team">Prestasi</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url() ?>#portfolio">Ekstrakurikuler</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url() ?>#blog">Pengumuman</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url() ?>#contact">Contact</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url('login') ?>">Login</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar-collapse -->
                        </nav>
                        <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
    </header>
    <!-- header end -->
    <div class="blog-page area-padding" style="margin-top:5%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="page-head-blog">
                        <div class="single-blog-page">
                            <!-- search option start -->
                            <form action="#">
                                <div class="search-option">
                                    <input type="text" placeholder="Search...">
                                    <button class="button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->
                        </div>
                        <div class="single-blog-page">
                            <!-- recent start -->
                            <div class="left-blog">
                                <h4>recent post</h4>
                                <div class="recent-post">
                                    <!-- start single post -->
                                    <?php foreach ($thumbnail as $row) { ?>
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="#">
                                                    <img src="<?= base_url('assets_home/img/blog/' . $row->foto . ''); ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <p><a href="<?= $row->id ?>"><?= $row->judul ?></a><br>
                                                </p>
                                            </div>
                                        </div>
                                    <?php   } ?>
                                    <!-- End single post -->
                                </div>
                            </div>
                            <!-- recent end -->
                        </div>
                    </div>
                </div>
                <!-- End left sidebar -->
                <!-- Start single blog -->
                <?php foreach ($pengumuman as $row) { ?>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- single-blog start -->
                                <article class="blog-post-wrapper">
                                    <div class="post-thumbnail">
                                        <img src="<?= base_url('assets_home/img/blog/' . $row->foto . ''); ?>" alt="" />
                                    </div>
                                    <div class="post-information">
                                        <h2><?= $row->judul ?></h2>
                                        <div class="entry-meta">
                                            <span class="author-meta"><i class="fa fa-user"></i> Ditulis oleh : <a href="<?= base_url() ?>">Admin</a></span>
                                            <span><i class="fa fa-calendar"></i><?= hari_indo($row->tanggal); ?></span>

                                        </div>
                                        <div class="entry-content">
                                            <?= $row->keterangan ?>
                                        </div>
                                    </div>
                                </article>
                                <div class="clear"></div>
                                <!-- single-blog end -->
                            </div>
                        </div>
                    </div>
                <?php   } ?>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
    <div class="clearfix"></div>