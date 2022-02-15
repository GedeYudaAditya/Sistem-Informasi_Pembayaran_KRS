 <?php $cek = 0;
	$banyakloop = 0; ?>
 <!-- Begin Page Content -->
 <div class="container-fluid">
 	<!-- Page Heading -->
 	<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
 	<p class="mb-4">Untuk berinterkasi dengan permintaan pinjaman yang ada, silakan pilih aksi terima untuk menerima permintaan
 		dan sebalikknya tombol tolak untuk menolak permintaan yang ada. Pastikan perminataan sesuai dengan ketersediaan barang yang ada di Data Inventaris.
 		Selamat bertugas dan semangat admin ;)</p>

 	<div class="row">
 		<!-- Optional Jika ingin menambahkan -->
 		<div class="col-xl-4 col-md-6 mb-4">
 			<div class="card border-left-primary shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kategori Inventaris</div>
 							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $banyakKategori ?> Kategori</div> <!-- Jumlah Kategori Inventaris -->
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-boxes fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

 		<?php
			$bBarang = 0;
			foreach ($banyakBarang as $b) {
				$bBarang += $b['banyakBarang'];
			}
			?>
 		<!-- Optional Jika ingin menambahkan -->
 		<div class="col-xl-4 col-md-6 mb-4">
 			<div class="card border-left-success shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ketersediaan Inventaris</div>
 							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bBarang ?> Barang</div> <!-- Jumlah Total Barang -->
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-box-open  fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

 		<?php
			$bDipinjam = 0;
			foreach ($banyakDipinjam as $d) {
				$bDipinjam += $d['barangDipinjam'];
			}
			?>
 		<!-- Optional Jika ingin menambahkan -->
 		<div class="col-xl-4 col-md-6 mb-4">
 			<div class="card border-left-info shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dipinjam</div>
 							<div class="row no-gutters align-items-center">
 								<div class="col-auto">
 									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $bDipinjam ?> Barang</div>
 								</div>
 							</div>
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-people-carry fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- peminjamanInventaris -->

 	<div class="card shadow mb-4">
 		<!-- Card Header - Accordion -->
 		<a href="#peminjamanInventaris" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="peminjamanInventaris">
 			<h6 class="m-0 font-weight-bold text-primary">Perminataan Peminjaman Inventaris HMJ TI</h6>
 		</a>
 		<!-- Card Content - Collapse -->
 		<div class="collapse show" id="peminjamanInventaris">
 			<div class="card-body">
 				<div class="table-responsive">
 					<table class="table table-bordered" id="tableInformasi" width="100%" cellspacing="0">
 						<thead>
 							<tr>
 								<!-- <th>Ditambahakan Pada</th> -->
 								<th>Nama Peminjam</th>
 								<th class="text-center">Organisasi Mahasiswa</th>
 								<th class="text-center">No Wa</th>
 								<th class="text-center">Email</th>
 								<th class="text-center">Peminjaman Inventaris</th>
 								<th class="text-center">Aksi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<!-- foreach -->
 							<?php foreach ($peminjam as $p) : ?>
 								<tr>
 									<td><?= $p['nama'] ?></td> <!-- Kategori Inventaris -->
 									<td class="text-center"><?= $p['organisasi'] ?></td> <!-- Nama Ormawa -->
 									<td class="text-center"><?= $p['noTelp'] ?></td> <!-- No Wa -->
 									<td class="text-center"><?= $p['email'] ?></td> <!-- Email -->
 									<td class="text-center">
 										<!-- Button trigger modal -->
 										<button type="button" class="btn btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#modalDetailBarang<?= $p['idPeminjaman'] ?>">
 											<span class="icon text-white-50">
 												<i class="fas fa-info-circle"></i>
 											</span>
 											<span class="text">Detail</span>
 										</button>

 										<!-- Modal -->
 										<div class="modal fade bd-example-modal-lg" id="modalDetailBarang<?= $p['idPeminjaman'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
 											<div class="modal-dialog modal-lg" role="document">
 												<div class="modal-content">
 													<div class="modal-header">
 														<h5 class="modal-title" id="exampleModalLongTitle">Inventaris yang akan Dipinjam</h5>
 														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 															<span aria-hidden="true">&times;</span>
 														</button>
 													</div>
 													<div class="modal-body">
 														<div class="container" style="text-align: start !important;">
 															<ul>
 																<li style="list-style: none;"><b>Tanggal pinjam (YYYY/MM/DD) : </b>
 																	<p><?= $p['tglPinjam'] ?></p>
 																</li>
 																<li style="list-style: none;"><b>Tanggal rencana pengembalian (YYYY/MM/DD) : </b>
 																	<p><?= $p['lamaPinjam'] ?></p>
 																</li>
 																<li style="list-style: none;"><b>Total barang : </b>
 																	<p><?= $p['jumlahTotal'] ?></p>
 																</li>
 																<li style="list-style: none;">
 																	<b>Deskripsi peminjaman :</b>
 																	<p><?= $p['deskripsiPinjam'] ?></p>
 																</li>
 															</ul>
 														</div>
 														<table class="table">
 															<thead>
 																<tr>
 																	<th scope="col">Kode Barang</th>
 																	<th scope="col">Kategori Barang</th>
 																	<th scope="col">Nama Barang</th>
 																	<th scope="col">Jumlah barang yang dipinjam</th>
 																</tr>
 															</thead>
 															<tbody>
 																<?php $yangDipinjam = $this->All_model->allDataDetailPinjam($p['idPeminjaman']);
																	foreach ($yangDipinjam as $y) : ?>

 																	<?php $banyakloop++;
																		if ($y['banyakBarang'] - $y['barangDipinjam'] >= $y['banyak']) {
																			$cek++;
																		} ?>
 																	<tr>
 																		<th scope="row"><?= $y['kodeBarang'] ?></th>
 																		<td><?= $y['namaKategori'] ?></td>
 																		<td><?= $y['namaBarang'] ?></td>
 																		<td><?= $y['banyak'] ?></td>
 																	</tr>
 																<?php endforeach; ?>
 															</tbody>
 														</table>
 													</div>
 												</div>
 											</div>
 										</div>
 									</td>
 									<td class="text-center">

 										<!-- Silakan Backend Memberikan Pengkondisian -->
 										<!-- Kodisi Start -->
 										<?php if ($cek == $banyakloop) : ?>
 											<a href="<?= base_url() ?>inventaris/terima/<?= $p['idPeminjaman'] ?>" class="btn btn-success btn-sm btn-icon-split tombol-hapus">
 												<span class="icon text-white-50">
 													<i class="fas fa-check-circle"></i>
 												</span>
 												<span class="text">Terima</span>
 											</a>
 										<?php else : ?>
 											<button class="btn btn-secondary btn-sm btn-icon-split">
 												<span class="icon text-white-50">
 													<i class="fas fa-check-circle"></i>
 												</span>
 												<span class="text">Terima</span>
 											</button>
 										<?php endif ?>
 										<a href="<?= base_url() ?>inventaris/tolak/<?= $p['idPeminjaman'] ?>" class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
 											<span class="icon text-white-50">
 												<i class="fas fa-times-circle"></i>
 											</span>
 											<span class="text">Tolak</span>
 										</a>
 										<!-- Kodisi Stop -->
 									</td>
 								</tr>
 							<?php endforeach; ?>
 							<!-- endforeach -->
 						</tbody>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="card shadow mb-4">
 		<a href="#peminjamanInventaris2" class="d-block card-header py-3 bg-success" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="peminjamanInventaris2">
 			<h6 class="m-0 font-weight-bold text-white">Perminataan Pengembalian Inventaris HMJ TI</h6>
 		</a>
 		<!-- Card Content - Collapse -->
 		<div class="collapse show" id="peminjamanInventaris2">
 			<div class="card-body">
 				<div class="table-responsive">
 					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
 						<thead>
 							<tr>
 								<!-- <th>Ditambahakan Pada</th> -->
 								<th>Nama Peminjam</th>
 								<th class="text-center">Organisasi Mahasiswa</th>
 								<th class="text-center">No Wa</th>
 								<th class="text-center">Email</th>
 								<th class="text-center">Peminjaman Inventaris</th>
 								<th class="text-center">Aksi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<!-- foreach -->
 							<?php foreach ($peminjam3 as $p3) : ?>
 								<tr>
 									<td><?= $p3['nama'] ?></td> <!-- Kategori Inventaris -->
 									<td class="text-center"><?= $p3['organisasi'] ?></td> <!-- Nama Ormawa -->
 									<td class="text-center"><?= $p3['noTelp'] ?></td> <!-- No Wa -->
 									<td class="text-center"><?= $p3['email'] ?></td> <!-- Email -->
 									<td class="text-center">
 										<!-- Button trigger modal -->
 										<button type="button" class="btn btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#modalDetailBarang<?= $p3['idPeminjaman'] ?>">
 											<span class="icon text-white-50">
 												<i class="fas fa-info-circle"></i>
 											</span>
 											<span class="text">Detail</span>
 										</button>
 										<?php if ($p3['statusPinjam'] == 'Sedang Dipinjam') : ?>
 											<div class="badge badge-secondary">
 												<span class="text-white-50">
 													<i class="fas fa-check"></i>
 												</span>
 												<span class="text">Sedang Dipinjam</span>
 											</div>
 											<p style="color: mediumseagreen;">Sisi Waktu</p>
 											<p style="color: mediumseagreen;">[1d : 59h : 59m]</p>
 										<?php elseif ($p3['statusPinjam'] == 'Dikembalikan') : ?>
 											<div class="badge badge-success">
 												<span class="text-white-50">
 													<i class="fas fa-undo"></i>
 												</span>
 												<span class="text">Dikembalikan</span>
 											</div>
 										<?php elseif ($p3['status'] == 'Ditolak') : ?>
 											<div class="badge badge-danger">
 												<span class="text-white-50">
 													<i class="fas fa-times"></i>
 												</span>
 												<span class="text">Ditolak</span>
 											</div>
 										<?php else : ?>
 											<div class="badge badge-warning">
 												<span class="text-white-50">
 													<i class="fas fa-skull"></i>
 												</span>
 												<span class="text">Terlambat mengembalikan</span>
 											</div>
 											<p style="color:salmon;">Keterlambatan</p>
 											<p style="color:salmon;">[1d : 59h : 59m]</p>
 										<?php endif; ?>

 										<!-- Modal -->
 										<div class="modal fade bd-example-modal-lg" id="modalDetailBarang<?= $p3['idPeminjaman'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
 											<div class="modal-dialog modal-lg" role="document">
 												<div class="modal-content">
 													<div class="modal-header">
 														<h5 class="modal-title" id="exampleModalLongTitle">Inventaris yang akan Dipinjam</h5>
 														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 															<span aria-hidden="true">&times;</span>
 														</button>
 													</div>
 													<div class="modal-body">
 														<div class="container" style="text-align: start !important;">
 															<ul>
 																<li style="list-style: none;"><b>Tanggal pinjam (YYYY/MM/DD) : </b>
 																	<p><?= $p3['tglPinjam'] ?></p>
 																</li>
 																<li style="list-style: none;"><b>Tanggal rencana pengembalian (YYYY/MM/DD) : </b>
 																	<p><?= $p3['lamaPinjam'] ?></p>
 																</li>
 																<li style="list-style: none;"><b>Total barang : </b>
 																	<p><?= $p3['jumlahTotal'] ?></p>
 																</li>
 																<li style="list-style: none;">
 																	<b>Deskripsi peminjaman :</b>
 																	<p><?= $p3['deskripsiPinjam'] ?></p>
 																</li>
 															</ul>
 														</div>
 														<table class="table">
 															<thead>
 																<tr>
 																	<th scope="col">Kode Barang</th>
 																	<th scope="col">Kategori Barang</th>
 																	<th scope="col">Nama Barang</th>
 																	<th scope="col">Jumlah barang yang dipinjam</th>
 																</tr>
 															</thead>
 															<tbody>
 																<?php $yangDipinjam = $this->All_model->allDataDetailPinjamTerima($p3['idPeminjaman']);
																	foreach ($yangDipinjam as $y) : ?>
 																	<tr>
 																		<th scope="row"><?= $y['kodeBarang'] ?></th>
 																		<td><?= $y['namaKategori'] ?></td>
 																		<td><?= $y['namaBarang'] ?></td>
 																		<td><?= $y['banyak'] ?></td>
 																	</tr>
 																<?php endforeach; ?>
 															</tbody>
 														</table>
 													</div>
 												</div>
 											</div>
 										</div>
 									</td>
 									<td class="text-center">

 										<!-- Silakan Backend Memberikan Pengkondisian -->
 										<!-- Kodisi Start -->
 										<a href="<?= base_url() ?>inventaris/terimaKembali/<?= $p3['idPeminjaman'] ?>" class="btn btn-success btn-sm btn-icon-split tombol-hapus">
 											<span class="icon text-white-50">
 												<i class="fas fa-check-circle"></i>
 											</span>
 											<span class="text">Terima</span>
 										</a>
 										<a href="<?= base_url() ?>inventaris/tolak/<?= $p3['idPeminjaman'] ?>" class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
 											<span class="icon text-white-50">
 												<i class="fas fa-times-circle"></i>
 											</span>
 											<span class="text">Tolak</span>
 										</a>
 										<!-- Kodisi Stop -->
 									</td>
 								</tr>
 							<?php endforeach; ?>
 							<!-- endforeach -->
 						</tbody>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="card shadow mb-4">
 		<a href="#peminjamanInventaris3" class="d-block card-header py-3 bg-primary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="peminjamanInventaris2">
 			<h6 class="m-0 font-weight-bold text-white">Perminataan Peminjaman Inventaris HMJ TI Yang Diterima</h6>
 		</a>
 		<!-- Card Content - Collapse -->
 		<div class="collapse show" id="peminjamanInventaris3">
 			<div class="card-body">
 				<div class="table-responsive">
 					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
 						<thead>
 							<tr>
 								<!-- <th>Ditambahakan Pada</th> -->
 								<th>Nama Peminjam</th>
 								<th class="text-center">Organisasi Mahasiswa</th>
 								<th class="text-center">No Wa</th>
 								<th class="text-center">Email</th>
 								<th class="text-center">Peminjaman Inventaris</th>
 								<th class="text-center">Status Pinjam</th>
 							</tr>
 						</thead>
 						<tbody>
 							<!-- foreach -->
 							<?php foreach ($peminjam2 as $p2) : ?>
 								<tr>
 									<td><?= $p2['nama'] ?></td> <!-- Kategori Inventaris -->
 									<td class="text-center"><?= $p2['organisasi'] ?></td> <!-- Nama Ormawa -->
 									<td class="text-center"><?= $p2['noTelp'] ?></td> <!-- No Wa -->
 									<td class="text-center"><?= $p2['email'] ?></td> <!-- Email -->
 									<td class="text-center">
 										<!-- Button trigger modal -->
 										<button type="button" class="btn btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#modalDetailBarang<?= $p2['idPeminjaman'] ?>">
 											<span class="icon text-white-50">
 												<i class="fas fa-info-circle"></i>
 											</span>
 											<span class="text">Detail</span>
 										</button>

 										<!-- Modal -->
 										<div class="modal fade bd-example-modal-lg" id="modalDetailBarang<?= $p2['idPeminjaman'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
 											<div class="modal-dialog modal-lg" role="document">
 												<div class="modal-content">
 													<div class="modal-header">
 														<h5 class="modal-title" id="exampleModalLongTitle">Inventaris yang akan Dipinjam</h5>
 														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 															<span aria-hidden="true">&times;</span>
 														</button>
 													</div>
 													<div class="modal-body">
 														<div class="container" style="text-align: start !important;">
 															<ul>
 																<li style="list-style: none;"><b>Tanggal pinjam (YYYY/MM/DD) : </b>
 																	<p><?= $p2['tglPinjam'] ?></p>
 																</li>
 																<li style="list-style: none;"><b>Tanggal rencana pengembalian (YYYY/MM/DD) : </b>
 																	<p><?= $p2['lamaPinjam'] ?></p>
 																</li>
 																<li style="list-style: none;"><b>Total barang : </b>
 																	<p><?= $p2['jumlahTotal'] ?></p>
 																</li>
 																<li style="list-style: none;">
 																	<b>Deskripsi peminjaman :</b>
 																	<p><?= $p2['deskripsiPinjam'] ?></p>
 																</li>
 															</ul>
 														</div>
 														<table class="table">
 															<thead>
 																<tr>
 																	<th scope="col">Kode Barang</th>
 																	<th scope="col">Kategori Barang</th>
 																	<th scope="col">Nama Barang</th>
 																	<th scope="col">Jumlah barang yang dipinjam</th>
 																</tr>
 															</thead>
 															<tbody>
 																<?php $yangDipinjam = $this->All_model->allDataDetailPinjamTerima($p2['idPeminjaman']);
																	foreach ($yangDipinjam as $y) : ?>
 																	<tr>
 																		<th scope="row"><?= $y['kodeBarang'] ?></th>
 																		<td><?= $y['namaKategori'] ?></td>
 																		<td><?= $y['namaBarang'] ?></td>
 																		<td><?= $y['banyak'] ?></td>
 																	</tr>
 																<?php endforeach; ?>
 															</tbody>
 														</table>
 													</div>
 												</div>
 											</div>
 										</div>
 									</td>
 									<td class="text-center">
 										<?php if ($p2['statusPinjam'] != null) : ?>
 											<div class="btn btn-<?= ($p2['statusPinjam'] == 'Dikembalikan') ? 'success' : 'secondary' ?> btn-sm btn-icon-split">
 												<span class="icon text-white-50">
 													<i class="fas fa-<?= ($p2['statusPinjam'] == 'Dikembalikan') ? 'check-circle' : 'hourglass' ?>"></i>
 												</span>
 												<span class="text"><?= $p2['statusPinjam'] ?></span>
 											</div>
 										<?php else : ?>
 											<div class="btn btn-<?= ($p2['status'] == 'Ditolak') ? 'danger' : 'secondary' ?> btn-sm btn-icon-split">
 												<span class="icon text-white-50">
 													<i class="fas fa-times-circle"></i>
 												</span>
 												<span class="text"><?= $p2['status'] ?></span>
 											</div>
 										<?php endif ?>
 									</td>
 								</tr>
 							<?php endforeach; ?>
 							<!-- endforeach -->
 						</tbody>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>



 <?php if ($this->session->flashdata('sukses')) : ?>
 	<script>
 		setTimeout(function() {
 			Swal.fire(
 				'Selamat'
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