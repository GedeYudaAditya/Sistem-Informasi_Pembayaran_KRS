<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <a href="#th" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="th">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Tahun</h6>
        </a>
        <!-- card -->
        <div class="card-body collapse" id="th">

            <!-- form Input data -->
            <form method="post" action="">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" maxlength="16" value="<?= set_value('tahun'); ?>">
                        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="ket">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="ket" value="<?= set_value('ket'); ?>">
                        <?= form_error('smtr', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-lg">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                            <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('siswa'); ?>">Batal</a>
                        </div>
                    </div>
                </div>

            </form>
            <!-- akhir form input -->

        </div>
        <!-- /.card -->
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">List Data :</h6>
            <div>
                <a class="btn btn-sm btn-primary shadow-sm" href="#th" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="tahun"><i class="fas fa-plus fa-sm"></i> Tambah Tahun</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($siswa as $s) : ?>
                            <tr>
                                <th scope="row"><?= $no; ?></th>
                                <th scope="row"><?= $s['tahun']; ?></th>
                                <th scope="row"><?= $s['ket']; ?></th>
                                <td class="text-center">
                                    <a href="#editModal<?= $s['no']; ?>" class="badge badge-warning mr-1" data-toggle="modal">
                                        <i class="fas fa-edit fa-sm"></i> edit
                                    </a>

                                    <a href="<?= base_url('krs/hapus_thn/' . $s['id-th']); ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                        <i class="far fa-trash-alt fa-sm"></i> delete
                                    </a>
                                </td>
                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->