<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary"><?= $title; ?></h1>

    <!-- card -->
    <div class="card shadow mb-4 py-4 px-4">

        <!-- form Input data -->
        <form method="post" action="">
            <div class="row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="nim">NIM Mahasiswa</label>
                        <input type="text" class="form-control" id="nim" name="nim" maxlength="16" value="<?= set_value('nim'); ?>">
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" maxlength="16" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="status">Prodi</label>
                        <select class="custom-select form-control" id="status" name="status" type="text">
                            <option value="">-- Pilih Status --</option> -->
                            <option value="Lunas">Lunas</option>
                            <option value="Belum Bayar">Belum Bayar</option>
                        </select>
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group mt-3">
                        <label for="prodi_id">Prodi</label>
                        <select class="custom-select form-control" id="prodi_id" name="prodi_id" type="text">
                            <option value="">-- Pilih Prodi --</option> -->
                            <?php foreach ($prodi as $pr) : ?>
                                <option value="<?= $pr['id']; ?>"><?= $pr['prodi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('prodi_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" maxlength="16" value="<?= set_value('tahun'); ?>">
                        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="smtr">Semester</label>
                        <select class="custom-select form-control" id="smtr" name="smtr" type="text">
                            <option value="">-- Pilih Semester --</option> -->
                            <?php foreach ($prodi as $pr) : ?>
                                <option value="<?= $pr['id']; ?>"><?= $pr['prodi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('smtr', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('siswa'); ?>">Batal</a>
                    </div>
                </div>
            </div>

        </form>
        <!-- akhir form input -->

    </div>
    <!-- /.card -->

</div>
<!-- /.container-fluid -->