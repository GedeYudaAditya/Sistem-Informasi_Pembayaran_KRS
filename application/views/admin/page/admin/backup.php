 <!-- Begin Page Content -->
 <div class="container-fluid">
 	<!-- Page Heading -->
 	<h1 class="h3 mb-2 text-gray-800">Backup Database Website</h1>
 	<p class="mb-4">Untuk menjaga keamanan database website, anda dapat melakukan backup terhadap database yang ada</p>
 	<!-- Kepengurusan -->
 	<!-- This is the insert flash message -->
 	<div class="card shadow mb-4">
 		<!-- Card Header - Accordion -->
 		<a href="#landing" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="landing">
 			<h6 class="m-0 font-weight-bold text-primary">Konfirmasi Backup Database</h6>
 		</a>
 		<!-- Card Content - Collapse -->
 		<div class="collapse show" id="landing">
 			<div class="card-body">
 				<p>Untuk dapat melakukan backup database, silahkan klik tombol dibawah ini. Setelah itu akan muncul konfirmasi untuk mendownload database yang digunakan. File yang dihasilkan dalam format *.txt, silahkan convert ke *.sql jika ingin melakukan import database baru ke sistem.</p>
 				<div class="col-lg-12 row justify-content-center pt-4 pb-4">
 					<div class="col-lg-6">
 						<a href="<?= base_url() ?>admin/proses_backup"><button type="submit" class="btn btn-primary btn-user btn-block">Backup Sekarang</button></a>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
