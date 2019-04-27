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
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    <?php
                                    if (!$this->session->userdata('username') && $this->session->userdata('nig_guru') && $this->session->userdata('nisn_siswa')) : ?>
                                        <li>
                                            <a class="page-scroll" href="<?= base_url()  ?>">Home</a>
                                        </li>
                                    <?php endif; ?>
                                    <li>
                                        <a class="page-scroll" href="#services">Tentang Sekolah</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#team">Prestasi</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#portfolio">Ekstrakurikuler</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#blog">Pengumuman</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                    <?php
                                    if ($this->session->userdata('username')) : ?>
                                        <li>
                                            <a class="page-scroll" href="<?= base_url('admin')  ?>">[ Profile Admin ]</a>
                                        </li>
                                    <?php elseif ($this->session->userdata('nig_guru')) : ?>
                                        <li>
                                            <a class="page-scroll" href="<?= base_url('guru') ?>">[ Halaman Guru ]</a>
                                        </li>
                                    <?php elseif ($this->session->userdata('nisn')) : ?>
                                        <li>
                                            <a class="page-scroll" href="<?= base_url('siswa') ?>">[ Profile Siswa ]</a>
                                        </li>
                                    <?php else : ?>
                                        <li>
                                            <a class="page-scroll" href="<?= base_url('login') ?>">Login</a>
                                        </li>
                                    <?php endif; ?>
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