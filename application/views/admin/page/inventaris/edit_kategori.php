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
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" value="<?= $diEdit[0]['namaKategori'] ?>">
                        <!-- <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>'); ?> -->
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="desk">Deskripsi</label>
                <textarea class="form-control" id="desk" name="desk" type="text"><?= $diEdit[0]['deskripsi'] ?></textarea>
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