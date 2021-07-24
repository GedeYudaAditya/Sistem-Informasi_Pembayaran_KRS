<!--====== Footer Area Start ======-->
<footer class="footer-area footer-fixed">
    <!-- Footer Top -->
    <div class="footer-top ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Logo -->
                        <div class="navbar-brand">
                            <img class="logo" src="<?= base_url() ?>assets/img/logo/UNDIKSHA.png" alt="Logo HMJ TI"
                                style="height: 4.8rem;" />
                            <img class="logo" src="<?= base_url() ?>assets/img/logo/HMJ.png" alt="Logo HMJ TI"
                                style="height: 4.8rem;" />
                        </div>
                        <p class="mt-2 mb-3">
                            Jl. Udayana No.11, Banjar Tegal, Singaraja, Kabupaten Buleleng, Bali
                        </p>
                        <!-- Social Icons -->
                        <div class="social-icons d-flex">
                            <a class="facebook" href="https://web.facebook.com/hmj.ti.undiksha/?_rdc=1&_rdr"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="twitter" href="https://www.instagram.com/hmj_ti.undiksha/" target="_blank">
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="google-plus"
                                href="https://www.youtube.com/channel/UCjvKksTEifUWNU_rfCHubDg?app=desktop"
                                target="_blank">
                                <i class="fab fa-youtube"></i>
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a class="vine" href="mailto:hmjtiundiksha@gmail.com" target="_blank">
                                <i class="far fa-envelope"></i>
                                <i class="far fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title mb-2">Lomba</h3>
                        <ul>
                            <?php
                            $i = 2;
                            foreach ($kategori as $data) {
                                if ($body == 1) {
                            ?>
                            <li class="py-2">
                                <a class="scroll"
                                    href="<?= base_url() ?>integer/home/#<?= $i++ ?>"><?= $data['nama_kategori_lomba_integer'] ?></a>
                            </li>
                            <?php } else { ?>
                            <li class="py-2">
                                <a
                                    href="<?= base_url() ?>integer/home/#<?= $i++ ?>"><?= $data['nama_kategori_lomba_integer'] ?></a>
                            </li>
                            <?php }
                            } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title mb-2">Konten</h3>
                        <ul>
                            <li class="py-2"><a href="<?= base_url() ?>integer/home">Beranda</a></li>
                            <li class="py-2"><a href="<?= base_url() ?>integer/lomba_integer">Lomba</a></li>
                            <li class="py-2"><a href="<?= base_url() ?>integer/jadwal_integer">Jadwal</a></li>
                            <li class="py-2"><a href="<?= base_url() ?>integer/kabar_integer">Kabar Integer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title mb-2">Layanan</h3>
                        <ul>
                            <li class="py-2"><a href="<?= base_url() ?>">Landing Page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copyright Area -->
                    <div
                        class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                        <!-- Copyright Left -->
                        <div class="copyright-left">
                            &copy; Copyrights <?= date("Y"); ?> HMJ TI Undiksha. All rights reserved.
                        </div>
                        <!-- Copyright Right -->
                        <div class="copyright-right">
                            Made with <i class="fas fa-heart"></i> By
                            <a href="#" class="text-primary" data-toggle="modal" data-target="#devModal">Ganatech</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer Area End ======-->

<!--====== Modal Developer Area Start ======-->
<div class="modal fade" id="devModal" tabindex="-1" role="dialog" aria-labelledby="devModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="devModalLabel">Team Developer</h4>
            </div>
            <div class="modal-body">
                <h5>Coordinator</h5>
                <p>Irfan Walhidayah</p>
                <p>Putu Zasya Eka Satya Nugraha</p>
                <hr>
                <h5>Front End</h5>
                <p>I Nyoman Triarta</p>
                <hr>
                <h5>Back End</h5>
                <p>I Gede Riyan Ardi Darmawan</p>
                <p>Ida Bagus Made Yudha Wirawan</p>
                <hr>
                <h5>Assets and Contents</h5>
                <p>I Wayan Darmika</p>
                <p>I Gede Anggie Suardika Arpin</p>
                <p>Ni Made Mirah Pradnya Pramesti</p>
                <p>Ketut Nova Wirya Dinata</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
<!--====== Modal Developer Area End ======-->
</div>
<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="<?= base_url() ?>assets/js/jquery/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js -->
<script src="<?= base_url() ?>assets/js/bootstrap/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>

<!-- Plugins js -->
<script src="<?= base_url() ?>assets/js/plugins/plugins.min.js"></script>

<!-- Active js -->
<script src="<?= base_url() ?>assets/js/active.js"></script>
<?php if ($body == "1") { ?>
<script src="<?= base_url() ?>assets/js/intro.js"></script>
<?php } ?>
<!-- Lazyload -->
<script src="<?= base_url() ?>assets/js/plugins/lazysizes.min.js" async=""></script>
</body>

</html>