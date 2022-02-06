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
 							<div class="h5 mb-0 font-weight-bold text-gray-800">10 Kategori</div> <!-- Jumlah Kategori Inventaris -->
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-boxes fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

 		<!-- Optional Jika ingin menambahkan -->
 		<div class="col-xl-4 col-md-6 mb-4">
 			<div class="card border-left-success shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ketersediaan Inventaris</div>
 							<div class="h5 mb-0 font-weight-bold text-gray-800">100 Barang</div> <!-- Jumlah Total Barang -->
 						</div>
 						<div class="col-auto">
 							<i class="fas fa-box-open  fa-2x text-gray-300"></i>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

 		<!-- Optional Jika ingin menambahkan -->
 		<div class="col-xl-4 col-md-6 mb-4">
 			<div class="card border-left-info shadow h-100 py-2">
 				<div class="card-body">
 					<div class="row no-gutters align-items-center">
 						<div class="col mr-2">
 							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dicuri :(</div>
 							<div class="row no-gutters align-items-center">
 								<div class="col-auto">
 									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10 Barang</div>
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
 							<tr>
 								<td>Putu Bagus Genjing</td> <!-- Kategori Inventaris -->
 								<td class="text-center">HMJ TI</td> <!-- Nama Ormawa -->
 								<td class="text-center">081888888888</td> <!-- No Wa -->
 								<td class="text-center">suardana.4@undiksha.ac.id</td> <!-- Email -->
 								<td class="text-center">
 									<!-- Button trigger modal -->
 									<button type="button" class="btn btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#modalDetailBarang">
 										<span class="icon text-white-50">
 											<i class="fas fa-info-circle"></i>
 										</span>
 										<span class="text">Detail</span>
 									</button>

 									<!-- Modal -->
 									<div class="modal fade bd-example-modal-lg" id="modalDetailBarang" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
 										<div class="modal-dialog modal-lg" role="document">
 											<div class="modal-content">
 												<div class="modal-header">
 													<h5 class="modal-title" id="exampleModalLongTitle">Inventaris yang akan Dipinjam</h5>
 													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 														<span aria-hidden="true">&times;</span>
 													</button>
 												</div>
 												<div class="modal-body">
 													<table class="table">
 														<thead>
 															<tr>
 																<th scope="col">No</th>
 																<th scope="col">Kategori Barang</th>
 																<th scope="col">Nama Barang</th>
 																<th scope="col">Jumlah barang yang dipinjam</th>
 															</tr>
 														</thead>
 														<tbody>
 															<tr>
 																<th scope="row">1</th>
 																<td>ATK</td>
 																<td>Pensil 2B</td>
 																<td>5</td>
 															</tr>
 															<tr>
 																<th scope="row">2</th>
 																<td>Sound Sistem</td>
 																<td>Sound Besar</td>
 																<td>1</td>
 															</tr>
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
 									<a href="" class="btn btn-success btn-sm btn-icon-split tombol-hapus">
 										<span class="icon text-white-50">
 											<i class="fas fa-check-circle"></i>
 										</span>
 										<span class="text">Terima</span>
 									</a>
 									<a href="" class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
 										<span class="icon text-white-50">
 											<i class="fas fa-times-circle"></i>
 										</span>
 										<span class="text">Tolak</span>
 									</a>
 									<!-- Kodisi Stop -->
 								</td>
 							</tr>
 							<!-- endforeach -->
 						</tbody>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>