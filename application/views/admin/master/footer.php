<?php if ($flip == "true") { ?>
<!-- Flip Plugin -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/viewer.js"></script>
<?php } else { ?>

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; HMJ TI Undiksha <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<!-- Javascript Plugin-->
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Sweetalert plugin-->
<script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

<!-- Chart plugin -->
<script src="<?= base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>
<?php if ($active == "10" && $flip == "administrator") { ?>
<script src="<?= base_url() ?>assets/js/chart.js"></script>
<?php } ?>
<?php if ($ckeditor == "etika") { ?>
<script src="<?= base_url() ?>assets/js/ckeditor/etika.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/jquery-qrcode-0.18.0.js"></script>
<script src="<?= base_url() ?>assets/vendor/chart.js/Chart.js"></script>
<script src="<?= base_url() ?>assets/js/chartEtika.js"></script>
<?php } ?>
<script>
const baseURL = "<?php echo base_url(); ?>";
</script>
<?php if ($ckeditor == "etika_diagram") { ?>
<script src="<?= base_url() ?>assets/vendor/chart.js/Chart.js"></script>
<script src="<?= base_url() ?>assets/js/chartEtika.js"></script>
<?php } ?>

<!-- Datatable Plugin-->
<script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/js/demo/datatables-demo.js"></script>
<script src="<?= base_url() ?>assets/js/table.js"></script>

<!-- Ckeditor plugin -->
<?php if ($active == "4" || $active == "10" || $active == "5") { ?>
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
<?php if ($ckeditor == "web") { ?>
<script src="<?= base_url() ?>assets/js/ckeditor/web.js"></script>
<?php } ?>
<?php if ($ckeditor == "eors") { ?>
<script src="<?= base_url() ?>assets/js/ckeditor/eors.js"></script>
<?php } ?>
<?php if ($ckeditor == "integer") { ?>
<script src="<?= base_url() ?>assets/js/ckeditor/integer.js"></script>
<?php } ?>
<?php } ?>


<?php } ?>
</body>

</html>