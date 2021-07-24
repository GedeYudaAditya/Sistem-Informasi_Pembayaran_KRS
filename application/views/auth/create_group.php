<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Tambah Level User</h1>
	<p class="mb-4">Untuk menambahkan level user baru, silahkan isi form tambah level user berikut</p>
	<!-- Kepengurusan -->

	<div id="infoMessage"><?php echo $message; ?></div>

	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
			<h6 class="m-0 font-weight-bold text-primary">Form Tambah Level User</h6>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse show" id="kepengurusan">
			<div class="card-body">
				<div class="col-lg-6 col-md-8">
					<form class="user" action="<?= base_url() ?>auth/create_group" method="post">
						<div class="form-group">
							<input type="text" class="form-control form-control-user" id="group_name" aria-describedby="emailHelp" placeholder="Masukkan Nama Level User" name="group_name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form-control-user" id="description" aria-describedby="emailHelp" placeholder="Masukkan Deskripsi Level User" name="description">
						</div>
						<button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
