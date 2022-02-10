 <!-- Begin Page Content -->
 <div class="container-fluid">
 	<!-- Page Heading -->
 	<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
 	<p class="mb-4">Untuk mengupload inventaris baik itu barang berupa ATK, barang lainnya, silahkan pilih tombol
 		tambah data. Untuk menghapus silahkan pilih tombol delete. Data paling terbaru ada dipaling awal</p>

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
 							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dicuri :(</div>
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

 	<?php if ($this->session->flashdata('sukses')) : ?>
 		<div class="row mt-3">
 			<div class="col-md-12 text-center">
 				<div class="alert alert-success alert-dismissible fade show" role="alert">
 					Data <strong><?= $this->session->flashdata('sukses'); ?></strong>
 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 						<span aria-hidden="true">&times;</span>
 					</button>
 				</div>
 			</div>
 		</div>
 	<?php endif; ?>

 	<?php if ($this->session->flashdata('gagal')) : ?>
 		<div class="row mt-3">
 			<div class="col-md-12 text-center">
 				<div class="alert alert-danger alert-dismissible fade show" role="alert">
 					Data <strong><?= $this->session->flashdata('gagal'); ?></strong>
 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 						<span aria-hidden="true">&times;</span>
 					</button>
 				</div>
 			</div>
 		</div>
 	<?php endif; ?>
 	<!-- inventaris -->

 	<div class="card shadow mb-4">
 		<!-- Card Header - Accordion -->
 		<a href="#inventaris" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="inventaris">
 			<h6 class="m-0 font-weight-bold text-primary">Data Inventaris HMJ TI</h6>
 		</a>
 		<!-- Card Content - Collapse -->
 		<div class="collapse show" id="inventaris">
 			<div class="card-body">
 				<a href="<?= base_url() ?>inventaris/tambah_inventaris" class="btn btn-primary btn-sm btn-icon-split mb-4">
 					<span class="icon text-white-50">
 						<i class="fas fa-flag"></i>
 					</span>
 					<span class="text">Tambah Data</span>
 				</a>
 				<div class="table-responsive">
 					<table class="table table-bordered" id="tableInformasi" width="100%" cellspacing="0">
 						<thead>
 							<tr>
 								<!-- <th>Ditambahakan Pada</th> -->
 								<th>Kategori Inventaris</th>
 								<th class="text-center">Nama Kepengurusan</th>
 								<th class="text-center">Nama Barang</th>
 								<th class="text-center">Detail Barang</th>
 								<th class="text-center">Keadaan</th>
 								<th class="text-center">Status Barang</th>
 								<!-- <th>Ditambahkan Oleh</th> -->
 								<th class="text-center">Aksi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<!-- foreach -->
 							<?php
								$no = 0;
								foreach ($barang as $item) :
								?>
 								<tr>
 									<td><?= $item['namaKategori'] ?></td> <!-- Kategori Inventaris -->
 									<td class="text-center"><?= $item['nama_hmj'] ?></td> <!-- Nama Kepengurusan -->
 									<td class="text-center"><?= $item['namaBarang'] ?></td> <!-- Nama Barang -->
 									<td class="text-center">
 										<!-- Button trigger modal -->
 										<button type="button" class="btn btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#modalDetailBarang<?= $no ?>">
 											<span class="icon text-white-50">
 												<i class="fas fa-info-circle"></i>
 											</span>
 											<span class="text">Detail</span>
 										</button>

 										<!-- Modal -->
 										<div class="modal fade bd-example-modal-lg" id="modalDetailBarang<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
 											<div class="modal-dialog modal-lg" role="document">
 												<div class="modal-content">
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
 															<img src="https://dummyimage.com/600x400/dbdbdb/0011ff" alt="">
 														</div>
 														<h3><?= $item['namaBarang'] ?></h3>
 														<div>Kode Barang : <?= $item['kodeBarang'] ?> | Merk : <?= $item['merk'] ?> | Tahun Pembelian : <?= $item['tahunPembelian'] ?></div>
 														<div>Kategori <?= $item['namaKategori'] ?></div>
 														<div>
 															<?php if ($item['hakBarang'] == 'Diperpinjamkan') : ?>
 																<b style="color: green;">Barang <?= $item['hakBarang'] ?></b>
 															<?php else : ?>
 																<b style="color: red;">Barang <?= $item['hakBarang'] ?></b>
 															<?php endif; ?>
 														</div>
 														<p class="mt-3 px-5"><?= $item['deskripsiBarang'] ?></p>
 													</div>
 												</div>
 											</div>
 										</div>
 									</td>
 									<td class="text-center">
 										<?php if ($item['keadaanBarang'] == 'Baik') : ?>
 											<span class="btn btn-success btn-sm btn-icon-split">
 												<span class="icon text-white-50">
 													<i class="fas fa-check-circle"></i>
 												</span>
 												<span class="text">Baik</span>
 											</span>
 										<?php elseif ($item['keadaanBarang'] == 'Kurang Baik') : ?>
 											<span class="btn btn-warning btn-sm btn-icon-split">
 												<span class="icon text-white-50">
 													<i class="fa fa-exclamation-circle"></i>
 												</span>
 												<span class="text">Kurang Baik</span>
 											</span>
 										<?php elseif ($item['keadaanBarang'] == 'Rusak Berat') : ?>
 											<span class="btn btn-danger btn-sm btn-icon-split">
 												<span class="icon text-white-50">
 													<i class="fas fa-skull"></i>
 												</span>
 												<span class="text">Rusak Berat</span>
 											</span>
 										<?php endif; ?>
 									</td>
 									<td class="text-center">

 										<!-- Silakan Backend Memberikan Pengkondisian -->
 										<!-- Kondisi Start -->
 										<?php if ($item['barangDipinjam'] > 0) : ?>
 											<span class="btn btn-secondary btn-sm btn-icon-split">
 												<span class="icon text-white-50">
 													<i class="fas fa-minus-circle"></i>
 												</span>
 												<span class="text"><?= $item['barangDipinjam'] ?> Dipinjam</span>
 											</span>
 										<?php endif; ?>
 										<?php if ($item['banyakBarang'] > 0 && $item['banyakBarang'] - $item['barangDipinjam'] > 0) : ?>
 											<span class="btn btn-success btn-sm btn-icon-split">
 												<span class="icon text-white-50">
 													<i class="fas fa-check-circle"></i>
 												</span>
 												<span class="text">Ada (<?= $item['banyakBarang'] - $item['barangDipinjam'] ?>)</span>
 											</span>
 										<?php endif; ?>
 										<!-- Kodisi Stop -->

 									</td>
 									<td class="text-center">
 										<!-- Silakan Backend Memberikan Pengkondisian -->
 										<!-- Kodisi Start -->
 										<a href="<?= base_url() ?>inventaris/edit_inventaris/<?= $item['kodeBarang'] ?>" class="btn btn-warning btn-sm btn-icon-split">
 											<span class="icon text-white-50">
 												<i class="fas fa-edit"></i>
 											</span>
 											<span class="text">Update</span>
 										</a>
 										<a href="<?= base_url() ?>inventaris/del_inventaris/<?= $item['kodeBarang'] ?>" class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
 											<span class="icon text-white-50">
 												<i class="fas fa-trash"></i>
 											</span>
 											<span class="text">Delete</span>
 										</a>
 										<!-- Kodisi Stop -->
 									</td>
 								</tr>
 							<?php
									$no++;
								endforeach;
								?>
 							<!-- endforeach -->
 						</tbody>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="card shadow mb-4">
 		<a href="#kategori" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kategori">
 			<h6 class="m-0 font-weight-bold text-primary">Data Kategori Barang HMJ TI</h6>
 		</a>
 		<div class="collapse show" id="kategori">
 			<div class="card-body">
 				<a href="<?= base_url() ?>inventaris/tambah_kategori" class="btn btn-primary btn-sm btn-icon-split mb-4">
 					<span class="icon text-white-50">
 						<i class="fas fa-list-alt"></i>
 					</span>
 					<span class="text">Tambah Kategori</span>
 				</a>
 				<div class="table-responsive">
 					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
 						<thead>
 							<tr>
 								<!-- <th>Ditambahakan Pada</th> -->
 								<th>Nama Kategori Inventaris</th>
 								<th class="text-center">Deskripsi</th>
 								<th class="text-center">Aksi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<!-- foreach -->
 							<?php
								foreach ($kategori as $itemK) :
								?>
 								<tr>
 									<td><?= $itemK['namaKategori'] ?></td> <!-- Kategori Inventaris -->
 									<td class="text-center"><?= $itemK['deskripsi'] ?></td> <!-- Nama Kepengurusan -->
 									<td class="text-center">
 										<!-- Silakan Backend Memberikan Pengkondisian -->
 										<!-- Kodisi Start -->
 										<a href="<?= base_url() ?>inventaris/edit_kategori/<?= $itemK['idKategori'] ?>" class="btn btn-warning btn-sm btn-icon-split">
 											<span class="icon text-white-50">
 												<i class="fas fa-edit"></i>
 											</span>
 											<span class="text">Update</span>
 										</a>
 										<a href="<?= base_url() ?>inventaris/del_kategori/<?= $itemK['idKategori'] ?>" class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
 											<span class="icon text-white-50">
 												<i class="fas fa-trash"></i>
 											</span>
 											<span class="text">Delete</span>
 										</a>
 										<!-- Kodisi Stop -->
 									</td>
 								</tr>
 							<?php
								endforeach;
								?>
 							<!-- endforeach -->
 						</tbody>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>