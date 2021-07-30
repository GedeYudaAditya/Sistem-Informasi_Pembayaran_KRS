<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <a href="#th" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="th">
            <h6 class="m-0 font-weight-bold text-primary">Form Ubah Tahun</h6>
        </a>
        <!-- card -->
        <div class="card-body collapse" id="th">

            <!-- form Input data -->
            <form method="post" action="">
                <input type="number" hidden name="id-th" value="<?= $isi[0]['id-th'] ?>">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" maxlength="16" value="<?= $isi[0]['tahun'] ?>">
                        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="ket">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="ket" value="<?= $isi[0]['ket'] ?>">
                        <?= form_error('smtr', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-lg">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                            <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('krs/tambah_tahun'); ?>">Batal</a>
                        </div>
                    </div>
                </div>

            </form>
            <!-- akhir form input -->

        </div>
        <!-- /.card -->
    </div>
</div>