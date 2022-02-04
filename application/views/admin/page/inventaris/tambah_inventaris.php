<!-- Begin Page Content -->
<div class="container-fluid">

	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row mt-3">
			<div class="col-md-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Data Mahasiswa <strong><?= $this->session->flashdata('flash'); ?></strong> karena data yang anda masukkan sudah ada.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-primary"><?= $title; ?></h1>

	<!-- card -->
	<div class="card shadow mb-4 py-4 px-4">

		<!-- form Input data -->
		<form method="post" action="">
			<div class="row">
				<div class="col-lg">
					<div class="form-group">
						<label for="kategori">Kategori Inventaris</label>
						<select type="text" class="custom-select form-control" id="kategori" name="kategori" value="">
							<option value="" selected disabled>-- Pilih Katergori Inventori --</option>
							<option value="">ATK</option>
							<option value="">Sound</option>
							<option value="">Pekakas</option>
						</select>
						<!-- <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?> -->
					</div>
					<div class="form-group">
						<label for="nama_pengurus">Nama Kepengurusan</label>
						<select type="text" class="custom-select form-control" id="nama_pengurus" name="nama_pengurus" value="">
							<option value="" selected disabled>-- Pilih Kepengurusan --</option>
							<option value="">HMJ TI Undiksha 2020-2021</option>
							<option value="">HMJ TI Undiksha 2021-2022</option>
							<option value="">HMJ TI Undiksha 2022-2023</option>
						</select>
						<!-- <?= form_error('nama_pengurus', '<small class="text-danger pl-3">', '</small>'); ?> -->
					</div>
					<div class="form-group">
						<label for="nama_barang">Nama Barang</label>
						<input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang Inventaris" value="">
						<!-- <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col">
					<label for="foto_barang">Foto Barang</label>
					<input type="file" accept=".jpeg, .jpg, .png" class="form-control form-control-user" id="foto_barang" name="foto_barang">
					<!-- <?= form_error('foto_barang', '<small class="text-danger pl-3">', '</small>'); ?> -->
				</div>

				<div class="form-group col">
					<label for="jml_barang">Jumlah Barang</label>
					<input type="number" min="0" class="form-control" id="jml_barang" name="jml_barang" placeholder="Jumlah Barang yang ditambahkan" value="">
					<!-- <?= form_error('jml_barang', '<small class="text-danger pl-3">', '</small>'); ?> -->
				</div>
			</div>
			<div class="form-group">
				<label for="desk">Deskripsi</label>
				<textarea class="form-control" id="desk" name="desk" type="text"></textarea>
				<!-- <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?> -->
			</div>

			<div class="row">
				<div class="col-lg">
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="submit">Simpan</button>
						<a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('inventaris/barang'); ?>">Batal</a>
					</div>
				</div>
			</div>

		</form>
		<!-- akhir form input -->

	</div>
	<!-- /.card -->

</div>
<!-- /.container-fluid -->
