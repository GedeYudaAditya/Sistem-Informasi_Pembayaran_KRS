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

<script>
	// eqlipse card-text
	$(document).ready(function() {
		$('.card-text').each(function() {
			var text = $(this).text();
			if (text.length > 30) {
				$(this).text(text.substring(0, 30) + '...');
			}
		});
	});
</script>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

<!-- Sweet Alert -->
<script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>

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

<!-- Text-editor -->
<script src="<?= base_url() ?>assets/ckeditor/eors.js"></script>

<!-- Active js -->
<script src="<?= base_url() ?>assets/js/active.js"></script>
<?php if ($search == true) { ?>
	<script src="<?= base_url() ?>assets/js/search-card.js"></script>
<?php } ?>
<!-- Lazyload -->
<script src="<?= base_url() ?>assets/js/plugins/lazysizes.min.js" async=""></script>

<!-- My Js -->
<script src="<?= base_url() ?>assets/js/inventaris.js" async=""></script>
</body>

</html>