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
                        <label for="nama_kepengurusan">Nama kepengurusan</label>
                        <input type="text" class="form-control" id="nama_kepengurusan" name="nama_kepengurusan" placeholder="Nama Kategori" value="">
                        <!-- <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>'); ?> -->
                    </div>
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