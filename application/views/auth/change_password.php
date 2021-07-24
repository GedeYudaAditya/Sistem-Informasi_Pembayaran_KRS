<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Ubah Password User</h1>
	<p class="mb-4">Untuk mengubah password user, silahkan isi form ubah password user berikut</p>
	<!-- Kepengurusan -->

	<div id="infoMessage"><?php echo $message; ?></div>

	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
			<h6 class="m-0 font-weight-bold text-primary">Form Ubah Password User</h6>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse show" id="kepengurusan">
			<div class="card-body">
				<div class="col-lg-6 col-md-8">
					<form class="user" action="<?= base_url() ?>auth/change_password" method="post">
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="old" aria-describedby="emailHelp" placeholder="Masukkan Password Anda" name="old">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="new" aria-describedby="emailHelp" placeholder="Masukkan Password Baru Anda (Minimal 8 karakter)" name="new">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="new" aria-describedby="emailHelp" placeholder="Konfirmasi Password Baru Anda" name="new_confirm">
						</div>
						<?php echo form_input($user_id); ?>
						<button type="submit" class="btn btn-primary btn-user btn-block">Simpan Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
