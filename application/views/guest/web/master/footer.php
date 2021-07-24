<!--====== Footer Area Start ======-->
<footer class="section inner-footer bg-gray ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6">
                <!-- Footer Items -->
                <div class="footer-items text-center">
                    <!-- Logo -->
                    <a class="navbar-brand" href="#">
                        <img class="logo" src="<?= base_url() ?>assets/img/logo/NAV.png" alt="">
                    </a>
                    <p class="mt-2 mb-3">Seluruh konten dibuat dan diunggah oleh Himpunan Mahasiswa Jurusan
                        Teknik Informatika Undiksha.</p>
                    <!-- Copyright Area -->
                    <div class="copyright-area border-0 pt-3">
                        Copyrights &copy; <?= date("Y"); ?> HMJ TI Undiksha. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer Area End ======-->
</div>


<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="<?= base_url() ?>assets/js/jquery/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js -->
<script src="<?= base_url() ?>assets/js/bootstrap/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>
<!-- Datatable -->
<script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/js/demo/datatables-demo.js"></script>
<script src="<?= base_url() ?>assets/js/table.js"></script>
<!-- Plugins js -->
<script src="<?= base_url() ?>assets/js/plugins/plugins.min.js"></script>

<!-- Active js -->
<script src="<?= base_url() ?>assets/js/active.js"></script>
<?php if ($search == true) { ?>
<script src="<?= base_url() ?>assets/js/search-card.js"></script>
<?php } ?>
<!-- Lazyload -->
<script src="<?= base_url() ?>assets/js/plugins/lazysizes.min.js" async=""></script>
</body>

</html>