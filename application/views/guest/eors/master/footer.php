<!-- ***** All jQuery Plugins ***** -->
<input type="hidden" name="nama_kegiatan" id="nama_kegiatan" value="<?= $kegiatan[0]['nama_kegiatan'] ?>">
<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="<?= base_url() ?>assets/js/jquery/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js -->
<script src="<?= base_url() ?>assets/js/bootstrap/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>

<!-- Plugins js -->
<script src="<?= base_url() ?>assets/js/plugins/plugins.min.js"></script>

<!-- Active js -->
<script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>assets/js/active.js"></script>
<script src="<?= base_url() ?>assets/js/inputCostumJs.js"></script>
<?php if ($id_chart == true) { ?>
<script>
const baseURL = "<?php echo base_url(); ?>";
</script>
<script src="<?= base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>assets/js/chart.js"></script>
<?php } ?>
<!-- Datatables -->
<script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/js/table.js"></script>

<!-- Lazyload -->
<script src="<?= base_url() ?>assets/js/plugins/lazysizes.min.js" async=""></script>
</body>

</html>