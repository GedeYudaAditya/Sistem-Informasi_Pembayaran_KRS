<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Deaktivasi User</h1>
	<p class="mb-4">Jika anda yakin akan menonaktifkan user tersebut, silahkan pilih "yes"</p>
	<!-- Kepengurusan -->

	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
			<h6 class="m-0 font-weight-bold text-primary">Konfirmasi Deaktivasi User</h6>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse show" id="kepengurusan">
			<div class="card-body">
				<div class="col-lg-6 col-md-8">
					<p class="mb-4">Apakah anda yakin akan menonaktifkan user dengan nama <?= ucwords($user->first_name) ?>? <br>
						Setelah dinonaktifkan, <?= ucwords($user->first_name) ?> tidak akan dapat login ke sistem SSO-Informatics hingga anda mengaktifkannya kembali</p>
					<form class="user" action="<?= base_url() ?>auth/deactivate/<?= $user->id ?>" method="post">
						<?php echo lang('deactivate_confirm_y_label', 'confirm'); ?>
						<input type="radio" name="confirm" value="yes" checked="checked" />
						<?php echo lang('deactivate_confirm_n_label', 'confirm'); ?>
						<input type="radio" name="confirm" value="no" />
						<?php echo form_hidden($csrf); ?>
						<?php echo form_hidden(['id' => $user->id]); ?>
						<button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
