 <!-- Begin Page Content -->
 <div class="container-fluid">
 	<!-- Page Heading -->
 	<h1 class="h3 mb-2 text-gray-800">Manajemen Inventaris HMJ TI </h1>
 	<p class="mb-4">Untuk mengupload inventaris baik itu barang berupa ATK, barang lainnya, silahkan pilih tombol
 		tambah data. Untuk menghapus silahkan pilih tombol delete. Data paling terbaru ada dipaling awal</p>
 	<!-- Kepengurusan -->

 	<div class="card shadow mb-4">
 		<!-- Card Header - Accordion -->
 		<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
 			<h6 class="m-0 font-weight-bold text-primary">Data Inventaris HMJ TI</h6>
 		</a>
 		<!-- Card Content - Collapse -->
 		<div class="collapse show" id="kepengurusan">
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
 								<th>Nama Kepengurusan</th>
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
 								<td>HMJ TI Undiksha 2021-2022</td> <!-- Nama Kepengurusan -->
 								<td class="text-center">
 									<!-- Silakan Backend Memberikan Pengkondisian -->
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
 								</td>
 								<td class="text-center">
 									<!-- Button trigger modal -->
 									<button type="button" class="btn btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#modalDetailBarang">
 										<span class="icon text-white-50">
 											<i class="fas fa-info-circle"></i>
 										</span>
 										<span class="text">Detail</span>
 									</button>

 									<!-- Modal -->
 									<div class="modal fade" id="modalDetailBarang" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
 										<div class="modal-dialog modal-dialog-centered" role="document">
 											<div class="modal-content">
 												<div class="modal-header">
 													<h5 class="modal-title" id="exampleModalLongTitle">Detail Barang</h5>
 													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 														<span aria-hidden="true">&times;</span>
 													</button>
 												</div>
 												<div class="modal-body">
 													Gambar <br> deskripsi
 												</div>
 											</div>
 										</div>
 									</div>
 								</td>
 								<td class="text-center">
 									<!-- Silakan Backend Memberikan Pengkondisian -->
 									<a href="" class="btn btn-warning btn-sm btn-icon-split tombol-hapus">
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
