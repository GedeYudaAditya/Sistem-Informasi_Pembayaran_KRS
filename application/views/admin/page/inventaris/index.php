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
 								<th class="text-center">Status Barang</th>
 								<!-- <th>Ditambahkan Oleh</th> -->
 								<th class="text-center">Aksi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<!-- foreach -->
 							<tr>
 								<td>ATK</td> <!-- Kategori Inventaris -->
 								<td class="text-center">HMJ TI Undiksha 2021-2022</td> <!-- Nama Kepengurusan -->
 								<td class="text-center">Pensil 2B</td> <!-- Nama Barang -->
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
 													<h5 class="modal-title" id="exampleModalLongTitle">Detail Barang</h5>
 													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 														<span aria-hidden="true">&times;</span>
 													</button>
 												</div>
 												<div class="modal-body">
 													<div class="badge badge-secondary m-2 p-2">
 														<i class="fas fa-box-open"></i>
 														Ketersediaan Barang <span class="badge badge-light p-1">4/5</span>
 													</div>
 													<div>
 														<img src="https://dummyimage.com/600x400/dbdbdb/0011ff" alt="">
 													</div>
 													<p class="mt-3 px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem itaque dolores reiciendis mollitia? Reiciendis cumque itaque, dolorem magni in, sunt consequuntur quibusdam est iure voluptate voluptates impedit veniam. Distinctio, qui.</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</td>
 								<td class="text-center">

 									<!-- Silakan Backend Memberikan Pengkondisian -->
 									<!-- Kondisi Start -->
 									<span class="btn btn-secondary btn-sm btn-icon-split">
 										<span class="icon text-white-50">
 											<i class="fas fa-minus-circle"></i>
 										</span>
 										<span class="text">Dipinjam</span>
 									</span>
 									<span class="btn btn-success btn-sm btn-icon-split">
 										<span class="icon text-white-50">
 											<i class="fas fa-check-circle"></i>
 										</span>
 										<span class="text">Ada</span>
 									</span>
 									<!-- Kodisi Stop -->

 								</td>
 								<td class="text-center">
 									<!-- Silakan Backend Memberikan Pengkondisian -->
 									<!-- Kodisi Start -->
 									<a href="<?= base_url() ?>inventaris/edit_inventaris" class="btn btn-warning btn-sm btn-icon-split">
 										<span class="icon text-white-50">
 											<i class="fas fa-trash"></i>
 										</span>
 										<span class="text">Update</span>
 									</a>
 									<a href="" class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
 										<span class="icon text-white-50">
 											<i class="fas fa-trash"></i>
 										</span>
 										<span class="text">Delete</span>
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
