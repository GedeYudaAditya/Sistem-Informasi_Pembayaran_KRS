<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->


<!-- Sweetalert -->
<script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<!-- Bootstrap js -->
<script src="<?= base_url() ?>assets/js/bootstrap/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>

<!-- Plugins js -->
<script src="<?= base_url() ?>assets/js/plugins/plugins.min.js"></script>
<!-- Input Costume -->
<script src="<?= base_url() ?>assets/js/inputCostumJs.js"></script>
<?php if ($body == 3) : ?>
<script>
const baseURL = "<?php echo base_url(); ?>";
</script>
<script src="<?= base_url() ?>assets/vendor/chart.js/Chart.js"></script>
<script src="<?= base_url() ?>assets/js/chartEtika.js"></script>
<?php endif;  ?>
<!-- Active js -->
<script src="<?= base_url() ?>assets/js/active.js"></script>

<!-- Lazyload -->
<script src="<?= base_url() ?>assets/js/plugins/lazysizes.min.js" async=""></script>
</body>


</html>