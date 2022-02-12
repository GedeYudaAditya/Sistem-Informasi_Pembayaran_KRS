<!-- Begin Page Content -->

<div class="container-fluid">

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
							<!-- <option value="" selected disabled>-- Pilih Katergori Inventori --</option> -->
							<?php foreach ($kategori as $item) : ?>
								<option <?= ($diEdit[0]['idKategori'] == $item['idKategori']) ? 'selected' : '' ?> value="<?= $item['idKategori'] ?>"><?= $item['namaKategori'] ?></option>
							<?php endforeach; ?>
						</select>
						<!-- <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?> -->
					</div>
					<div class="form-group">
						<label for="nama_pengurus">Nama Kepengurusan</label>
						<select type="text" class="custom-select form-control" id="nama_pengurus" name="nama_pengurus" value="">
							<!-- <option value="" selected disabled>-- Pilih Kepengurusan --</option> -->
							<?php foreach ($kepengurusan as $itemK) : ?>
								<option <?= ($diEdit[0]['idKepengurusan'] == $itemK['id_hmj']) ? 'selected' : '' ?> value="<?= $itemK['id_hmj'] ?>"><?= $itemK['nama_hmj'] ?></option>
							<?php endforeach; ?>
						</select>
						<!-- <?= form_error('nama_pengurus', '<small class="text-danger pl-3">', '</small>'); ?> -->
					</div>
					<div class="form-group">
						<label for="nama_barang">Nama Barang</label>
						<input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang Inventaris" value="<?= $diEdit[0]['namaBarang'] ?>">
						<!-- <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?> -->
					</div>
					<div class="form-group">
						<label for="hakBarang">Hak Barang</label>
						<select type="text" class="custom-select form-control" id="hakBarang" name="hakBarang" value="">
							<option <?= ($diEdit[0]['hakBarang'] == 'Diperpinjamkan') ? 'selected' : '' ?> value="Diperpinjamkan">Diperpinjamkan</option>
							<option <?= ($diEdit[0]['hakBarang'] == 'Tidak Diperpinjamkan') ? 'selected' : '' ?> value="Tidak Diperpinjamkan">Tidak Diperpinjamkan</option>
						</select>
						<!-- <?= form_error('hakBarang', '<small class="text-danger pl-3">', '</small>'); ?> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col">
					<label for="merk">Merk Barang</label>
					<input type="text" class="form-control" id="merk" name="merk" placeholder="Merk Barang Inventaris" value="<?= $diEdit[0]['merk'] ?>">
					<!-- <?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?> -->
				</div>
				<div class="form-group col">
					<label for="tahun">Tahun Pembelian</label>
					<input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun Pembelian Barang Inventaris" value="<?= $diEdit[0]['tahunPembelian'] ?>">
					<!-- <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?> -->
				</div>
				<div class="form-group col">
					<label for="kode_barang">Kode Barang</label>
					<input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang Inventaris" disabled value="<?= $diEdit[0]['kodeBarang'] ?>">
					<!-- <?= form_error('kode_barang', '<small class="text-danger pl-3">', '</small>'); ?> -->
				</div>
				<div class="form-group col">
					<label for="keadaan">Keadaan</label>
					<select type="text" class="custom-select form-control" id="keadaan" name="keadaan" value="">
						<!-- <option value="" selected disabled>-- Pilih Keadaan Barang --</option> -->
						<option <?= ($diEdit[0]['keadaanBarang'] == 'Baik') ? 'selected' : '' ?> value="Baik">Baik</option>
						<option <?= ($diEdit[0]['keadaanBarang'] == 'Kurang Baik') ? 'selected' : '' ?> value="Kurang Baik">Kurang Baik</option>
						<option <?= ($diEdit[0]['keadaanBarang'] == 'Rusak Berat') ? 'selected' : '' ?> value="Rusak Berat">Rusak Berat</option>
					</select>
					<!-- <?= form_error('keadaan', '<small class="text-danger pl-3">', '</small>'); ?> -->
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
					<input type="number" min="0" class="form-control" id="jml_barang" name="jml_barang" placeholder="Jumlah Barang yang ditambahkan" value="<?= $diEdit[0]['banyakBarang'] ?>">
					<!-- <?= form_error('jml_barang', '<small class="text-danger pl-3">', '</small>'); ?> -->
				</div>
			</div>
			<div class="form-group">
				<label for="desk">Deskripsi</label>
				<textarea class="form-control" id="desk" name="desk" type="text"><?= $diEdit[0]['deskripsiBarang'] ?></textarea>
				<!-- <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?> -->
			</div>

			<div class="row">
				<div class="col-lg">
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="submit">Simpan</button>
						<a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('inventaris/'); ?>">Batal</a>
					</div>
				</div>
			</div>

		</form>
		<!-- akhir form input -->

	</div>
	<!-- /.card -->

</div>
<!-- /.container-fluid -->