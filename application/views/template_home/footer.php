<!-- Start contact Area -->
<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-mobile"></i>
                            <p>
                                Telepon: (0321) 14045<br>
                                <span>Senin - Jum'at (07.00 - 12.00)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-envelope-o"></i>
                            <p>
                                Email: sman4macipo@yandex.com<br>
                                <span>Web: www.sman4macipo.sch.id</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                Alamat: Jl. Kita Berbeda<br>
                                <span>ID 14045, Pemalang,Jawa Tengah</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start  contact -->
                <div class="col-md-8 col-md-offset-2 col-sm-6 col-xs-12">
                    <div class="form contact-form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="email@gmail.com" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Pesan" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim</button></div>
                        </form>
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <div class="footer-logo">
                                <h2><span>SMAN 4</span> MACIPO</h2>
                            </div>

                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                            <div class="footer-icons">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>information</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                            </p>
                            <div class="footer-contacts">
                                <p><span>Tel:</span> (0321) 14045</p>
                                <p><span>Email:</span> sman4macipo@yandex.</p>
                                <p><span>Jam Kerja:</span> 07.00 - 15.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright text-center">
                        <p>
                            2010 - <?= date('Y'); ?> &copy; Copyright <strong>SMAN 4 MACIPO</strong>. All Rights Reserved
                        </p>
                    </div>
                    <div class="credits">
                        <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        Re-distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="<?= base_url('assets_home/') ?>lib/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets_home/') ?>lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets_home/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets_home/') ?>lib/venobox/venobox.min.js"></script>
<script src="<?= base_url('assets_home/') ?>lib/knob/jquery.knob.js"></script>
<script src="<?= base_url('assets_home/') ?>lib/wow/wow.min.js"></script>
<script src="<?= base_url('assets_home/') ?>lib/parallax/parallax.js"></script>
<script src="<?= base_url('assets_home/') ?>lib/easing/easing.min.js"></script>
<script src="<?= base_url('assets_home/') ?>lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="<?= base_url('assets_home/') ?>lib/appear/jquery.appear.js"></script>
<script src="<?= base_url('assets_home/') ?>lib/isotope/isotope.pkgd.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="<?= base_url('assets_home/') ?>contactform/contactform.js"></script>

<script src="<?= base_url('assets_home/') ?>js/main.js"></script>
</body>

</html>