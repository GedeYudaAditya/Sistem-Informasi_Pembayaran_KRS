<section id="welcome" class="section welcome-area bg-overlay d-flex align-items-center">
	<div class="container">
		<div class="row align-items-center overflow-hidden">
			<!-- Welcome Intro Start -->
			<div class="col-12 col-md-7 col-lg-6">
				<div class="welcome-intro">
					<h1 class="text-white">
						Sistem Informasi Inventaris <br> HMJ TI Undiksha
					</h1>
				</div>
			</div>
			<div class="col-12 col-md-5 col-lg-6">
				<!-- Welcome Thumb -->
				<div class="welcome-thumb mx-auto" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
					<img src="<?= base_url() ?>assets/img/maskot/welcome.png" data-src="<?= base_url() ?>assets/img/maskot/welcome.png" class="h-100 mw-auto lazyload" style="max-width: unset;" alt="Maskot TI" />
				</div>
			</div>
		</div>
	</div>
	<!-- Shape Bottom -->
	<div class="shape-bottom">
		<svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
			<title>sApp Shape</title>
			<desc>Created with Sketch</desc>
			<defs></defs>
			<g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				<g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
					<path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="sApp-v1.0"></path>
				</g>
			</g>
		</svg>
	</div>
</section>

<?php if ($this->session->flashdata('sukses')) : ?>
	<script>
		setTimeout(function() {
			Swal.fire(
				'Berhasil'
				'<?= $this->session->flashdata('sukses'); ?>',
				'success'
			)
		}, 100);
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('gagal')) : ?>
	<script>
		setTimeout(function() {
			Swal.fire(
				'Maaf',
				'<?= $this->session->flashdata('gagal'); ?>',
				'warning',
			)
		}, 100);
	</script>
<?php endif; ?>

<?php
$bBarang = 0;
foreach ($banyakBarang as $b) {
	$bBarang += $b['banyakBarang'];
}
?>

<section class="container" id="inventaris">
	<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-lg shadow-sm">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url() ?>inventaris/home">Peralatan dan Mesin</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>inventaris/home">Furniture</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>inventaris/home">Bendera dan Kain</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>inventaris/home">Hiasan dan Lain Lain</a>
					</li>
				</ul>
			</div>
			<form class="d-flex">
				<input class="form-search-inventaris me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn-search-inventaris" type="submit">
					<i class="fas fa-search"></i>
				</button>
			</form>
		</div>
	</nav> -->
	<?php
	$no = 0;
	$baik = 0;
	$sedang = 0;
	$rusak = 0;

	foreach ($barang as $b) {
		if ($b['keadaanBarang'] == 'Baik') {
			$baik += $b['banyakBarang'];
		} else if ($b['keadaanBarang'] == 'Kurang Baik') {
			$sedang += $b['banyakBarang'];
		} else {
			$rusak += $b['banyakBarang'];
		}
	}

	$brB = $baik;
	$baik = ($baik / $bBarang) * 100;
	$brS = $sedang;
	$sedang = ($sedang / $bBarang) * 100;
	$brR = $rusak;
	$rusak = ($rusak / $bBarang) * 100;
	?>
	<div class="row mt-3">
		<div class="col-xl-4 col-sm-4 col-12 mb-3">
			<div class="card">
				<div class="card-body">
					<div class="dash-widget-header">
						<span class="dash-widget-icon bg-7">
							<i class="fas fa-check"></i>
						</span>
						<div class="dash-count">
							<div class="dash-title">Kondisi Baik</div>
							<div class="dash-counts">
								<p><?= $brB ?> Unit</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-sm-4 col-12 mb-3">
			<div class="card">
				<div class="card-body">
					<div class="dash-widget-header">
						<span class="dash-widget-icon bg-5">
							<i class="fas fa-heart"></i>
						</span>
						<div class="dash-count">
							<div class="dash-title">Kondisi Sedang</div>
							<div class="dash-counts">
								<p><?= $brS ?> Unit</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-sm-4 col-12 mb-3">
			<div class="card">
				<div class="card-body">
					<div class="dash-widget-header">
						<span class="dash-widget-icon bg-8">
							<i class="fas fa-skull"></i>
						</span>
						<div class="dash-count">
							<div class="dash-title">Kondisi Rusak</div>
							<div class="dash-counts">
								<p><?= $brR ?> Unit</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
			<h5 class="text-center mb-2">Presentase Barang</h5>
			<!-- <div class="text-center mb-2">
				<span class="badge badge-success">
					<p class="text-center text-white">Baik</p>
				</span>
				<span class="badge badge-warning">
					<p class="text-center text-white">Sedang</p>
				</span>
				<span class="badge badge-danger">
					<p class="text-center text-white">Rusak</p>
				</span>
			</div> -->
			<div class="progress">
				<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="<?= $baik ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $baik ?>%"> <?= round($baik, 2) ?>% </div>
				<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="<?= $sedang ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $sedang ?>%"> <?= round($sedang, 2) ?>% </div>
				<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="<?= $rusak ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $rusak ?>%"> <?= round($rusak, 2) ?>% </div>
			</div>
		</div>
	</div>

	<form class="row justify-content-center mt-3">
		<input class="form-search-inventaris col-9" type="search" placeholder="Search" aria-label="Search">
		<div class="col-2">
			<button class="btn-search-inventaris" type="submit" style="float: right;">
				<i class="fas fa-search"></i>
			</button>
		</div>
	</form>

	<form action="<?= base_url() ?>inventaris/pinjam" method="post">
		<main class="row my-3 justify-content-center flex-column-reverse flex-lg-row">
			<?php if ($this->session->flashdata('gagal')) : ?>
				<div class="col-md-12 text-center" style="width: 23rem;">
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong><?= $this->session->flashdata('gagal'); ?></strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			<?php endif; ?>
			<div class="col-lg-9">
				<div class="card-columns">
					<?php
					$no = 0;
					$baik = 0;
					$sedang = 0;
					$rusak = 0;
					foreach ($barang as $item) : ?>
						<?php
						if ($item['keadaanBarang'] == 'Baik') {
							$baik += $item['banyakBarang'];
						} else if ($item['keadaanBarang'] == 'Kurang Baik') {
							$sedang += $item['banyakBarang'];
						} else {
							$rusak += $item['banyakBarang'];
						}
						?>

						<div class="card card-barang">
							<img src="<?= base_url() . "assets/upload/Folder_inventaris/" . $item['gambar'] ?>" class="card-img-top" alt="Card Image">
							<div class="card-body" style="height: 150px;">
								<h5 class="card-title text-nowrap overflow-hidden"><?= $item['namaBarang'] ?> </h5>
								<p>
									<?php if ($item['banyakBarang'] - $item['barangDipinjam'] != 0) : ?>
										<span class="badge badge-<?php if ($item['hakBarang'] == 'Diperpinjamkan') {
																		echo 'success';
																	} else {
																		echo 'danger';
																	} ?>"><?= $item['hakBarang'] ?></span>
									<?php else : ?>
										<span class="badge badge-warning">Habis Dipinjam</span>
									<?php endif; ?>
								</p>
								<p class="card-text"><?= $item['deskripsiBarang'] ?>
								</p>
								<!-- <a href="#" class="btn-pinjam-inventaris">
									<i class="fas fa-search"></i> Detail
								</a> -->
							</div>
							<div class="card-footer">
								<div class="row justify-content-around justify-content-lg-center">
									<button type="button" class="btn btn-pinjam-inventaris btn-sm btn-icon-split" data-toggle="modal" data-target="#modalDetailBarang<?= $no ?>">
										<span class="text-white-50">
											<i class="fas fa-info-circle"></i>
										</span>
										<!-- <span class="text">Detail</span> -->
									</button>

									<?php if (!isset($_SESSION['Inv_Login'])) : ?>
										<button <?= ($item['hakBarang'] == 'Diperpinjamkan' && $item['banyakBarang'] - $item['barangDipinjam'] != 0) ? '' : 'disabled' ?> type="button" class="col-6 offset-md-1 <?= ($item['hakBarang'] == 'Diperpinjamkan' && $item['banyakBarang'] - $item['barangDipinjam'] != 0) ? 'btn' : 'btnd' ?> p-2 tambah-btn" data-toggle="modal" data-target="#modalLogin">+</button>
									<?php else : ?>
										<label class="col-6 offset-md-1 <?= ($item['hakBarang'] == 'Diperpinjamkan' && $item['banyakBarang'] - $item['barangDipinjam'] != 0) ? 'btn' : 'btnd' ?> p-2 tambah-btn" id="check<?= $no ?>" for="defaultCheck<?= $no ?>">
											<input hidden <?= ($item['hakBarang'] == 'Diperpinjamkan' && $item['banyakBarang'] - $item['barangDipinjam'] != 0) ? '' : 'disabled' ?> onclick="myClick()" class="col-2 input" type="checkbox" name="pilih[]" value="<?= $item['kodeBarang'] ?>" id="defaultCheck<?= $no ?>">
											<span id="ubah<?= $no ?>" class="text ms-2" style="padding: 0px !important;">+</span>
										</label>
									<?php endif; ?>
								</div>
							</div>
						</div>

						<!-- Modal -->
						<div class="glassModal modal fade bd-example-modal-lg" id="modalDetailBarang<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class=" modal-content text-center">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Detail Barang</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="badge badge-secondary m-2 p-2">
											<i class="fas fa-box-open"></i>
											Ketersediaan Barang <span class="badge badge-light p-1"><?= $item['banyakBarang'] - $item['barangDipinjam'] ?>/<?= $item['banyakBarang'] ?></span>
										</div>
										<div>
											<img src="<?= base_url() . "assets/upload/Folder_inventaris/" . $item['gambar'] ?>" alt="Gambar Rusak atau Hilang">
										</div>
										<h3><?= $item['namaBarang'] ?></h3>
										<div>Kode Barang : <?= $item['kodeBarang'] ?> | Merk : <?= $item['merk'] ?> | Tahun Pembelian : <?= $item['tahunPembelian'] ?></div>
										<div>Kategori <?= $item['namaKategori'] ?></div>
										<div>
											<?php if ($item['banyakBarang'] - $item['barangDipinjam'] != 0) : ?>
												<?php if ($item['hakBarang'] == 'Diperpinjamkan') : ?>
													<b style="color: green;">Barang <?= $item['hakBarang'] ?></b>
												<?php else : ?>
													<b style="color: red;">Barang <?= $item['hakBarang'] ?></b>
												<?php endif; ?>
											<?php else : ?>
												<b style="color: orange;">Barang Telah Habis Di Pinjam</b>
											<?php endif; ?>
										</div>
										<p class="mt-3 px-5"><?= $item['deskripsiBarang'] ?></p>
									</div>
								</div>
							</div>
						</div>
					<?php
						$no++;
					endforeach; ?>

				</div>
			</div>
			<div class="col-lg-3 my-3">
				<!-- Slide Kategori Barang -->
				<div class="container-fluid bg-light py-3 mb-3">
					<h3>Kategori Barang</h3>
					<hr>
					<!-- Check Box Category -->

					<?php foreach ($kategori as $item) : ?>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault<?= $item['idKategori'] ?>">
							<label class="form-check-label" for="flexCheckDefault<?= $item['idKategori'] ?>">
								<?= $item['namaKategori'] ?>
							</label>
						</div>
					<?php endforeach; ?>

				</div>

				<div class="pilihan text-center">
					<?php if (!isset($_SESSION['Inv_Login'])) : ?>
						<button type="button" data-toggle="modal" data-target="#modalLogin" name="submit" class="btn p-2">Lanjut ke form peminjaman <i class="fa fa-paper-plane"></i></button>
					<?php else : ?>
						<button type="submit" name="submit" class="btn p-2">Lanjut ke form peminjaman <i class="fa fa-paper-plane"></i></button>
					<?php endif; ?>
				</div>
				<!-- <div class="mb-5">
				<div class="card p-3">
					<div class="card-body">
						<h3 class="card-title">Garis Besar</h3>
						<hr>
						<div class="row mb-2">
							<p class="col-12 text-center"><b>Keadaan Barang</b></p>
							<p class="card-text col-4 text-center" style="border:1px solid green; border-radius:25px; color: green;">Baik : <?= $brB ?></p>
							<p class="card-text col-4 text-center" style="border:1px solid orange; border-radius:25px; color: orange;">Sedang : <?= $brS ?></p>
							<p class="card-text col-4 text-center" style="border:1px solid red; border-radius:25px; color: red;">Rusak : <?= $brR ?></p>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="<?= $baik ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $baik ?>%"> <?= round($baik, 2) ?>% </div>
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="<?= $sedang ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $sedang ?>%"> <?= round($sedang, 2) ?>% </div>
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="<?= $rusak ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $rusak ?>%"> <?= round($rusak, 2) ?>% </div>
						</div>
						<hr>
						<p class="card-text" style="color: blue;">Banyak Barang Seluruhnya : <b><?= $bBarang ?> Unit</b></p>
					</div>
				</div>
			</div> -->
			</div>
		</main>
	</form>

	<!-- Modal -->
	<div class="glassModal modal fade bd-example-modal-lg" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class=" modal-content text-center">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body welcome-area bg-overlay text-white" style="height: fit-content !important;">
					<div class="container">
						<h3 class="text-center text-white">Login Untuk Meminjam</h3>
						<form action="" method="POST">

							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" name="email" class="form-control form-search-inventaris" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" name="password" class="form-control form-search-inventaris" id="exampleInputPassword1">
							</div>

							<div class="text-center">
								<button type="submit" name="submit" class="btn" style="background: linear-gradient(-47deg, darkgreen 0%, lightgreen 100%);">
									<i class="fas fa-user"></i> Login
								</button>
								<p class="text-white">Anda tidak memiliki akun? <a class="text-success" href="<?= base_url() ?>inventaris/registration">buat di sini!</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php if (isset($_SESSION['Inv_Login'])) : ?>
	<script>
		var element = document.getElementById('check');
		var allinput = document.getElementsByClassName('input');

		function myClick() {
			for (var i = 0; i < allinput.length; i++) {
				if (allinput[i].checked) {
					document.getElementById("check" + i).classList.add('tambah-btn-checked');
					document.getElementById("check" + i).classList.remove('tambah-btn');
					document.getElementById("ubah" + i).innerHTML = "-";
				} else {
					document.getElementById("check" + i).classList.add('tambah-btn');
					document.getElementById("check" + i).classList.remove('tambah-btn-checked');
					document.getElementById("ubah" + i).innerHTML = "+";
				}
			}
		}


		// function listener() {
		// }
		// setInterval(listener, 1000);
	</script>
<?php endif; ?>