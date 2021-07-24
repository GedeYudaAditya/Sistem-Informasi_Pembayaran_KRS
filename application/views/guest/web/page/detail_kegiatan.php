<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area bg-overlay d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Breamcrumb Content -->
				<div class="breadcrumb-content d-flex flex-column align-items-center
					text-center">
					<h2 class="text-white text-capitalize">Berkas <?= $kategoriBerkas[0]['nama_kegiatan'] ?></h2>
					<ol class="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= base_url() ?>web/home">Beranda</a></li>
							<li class="breadcrumb-item"><a href="<?= base_url() ?>web/repositori">Repositori</a></li>
							<li class="breadcrumb-item active"><a href="<?= base_url() ?>web/kegiatan/<?= $kepengurusan[0]['id_hmj'] ?>"><?= $kepengurusan[0]['nama_hmj'] ?></a></li>
							<li class="breadcrumb-item"><?= $kategoriBerkas[0]['nama_kegiatan'] ?></li>
						</ol>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***** Breadcrumb Area End ***** -->

<!--====== Contact Area Start ======-->
<section id="contact" class="review-area bg-gray ptb_100">
	<div class="container">

		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-12">

				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Repositori <?= $kategoriBerkas[0]['nama_kegiatan'] ?></h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered mt-3" id="tableRepo">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Deskripsi</th>
										<th>Aksi</th>
										<th>Pengunggah</th>
										<th>Dibuat Tanggal</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									foreach ($berkass as $berkas) : ?>
										<tr>
											<td><?= $i++ ?></td>
											<td><?= $berkas['nama_repositori']; ?></td>
											<td><?= $berkas['deskripsi_repositori']; ?></td>
											<td>
												<a href="<?= base_url() ?>web/flip_me/<?= $kepengurusan[0]['nama_hmj'] ?>/<?= $berkas['kode_repositori'] ?>/kepengurusan" target="_blank" class="btn btn-primary btn-sm btn-lihat btn-icon-split">
													<span class="icon text-white-50">
														<i class="fas fa-eye"></i>
													</span>
													<span class="text text-lihat">Lihat</span>
												</a> <br>
												<a href="<?= base_url() ?>web/download_file/<?= $berkas['kode_repositori'] ?>/kepengurusan" class="btn btn-success btn-sm mt-2 btn-lihat btn-icon-split">
													<span class="icon text-white-50">
														<i class="fas fa-download"></i>
													</span>
													<span class="text text-lihat">Unduh</span>
												</a>
											</td>
											<td><?= $berkas['create_by']; ?></td>
											<td><?= $berkas['create_at']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</section>
<!--====== Contact Area End ======-->
