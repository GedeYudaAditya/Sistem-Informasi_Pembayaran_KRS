<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <a href="#th" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="th">
            <h6 class="m-0 font-weight-bold text-primary">Form Ubah info</h6>
        </a>
        <!-- card -->
        <div class="card-body collapse" id="th">

            <!-- form Input data -->
            <form method="post" action="">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="tahun">Info</label>
                        <input type="text" class="form-control" id="info" name="info" value="<?= $info[0]['info']; ?>">
                        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="ket">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="ket" value="<?= $info[0]['ket']; ?>">
                        <?= form_error('smtr', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-lg">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                            <a class="btn btn-outline-secondary ml-2" role="button" href="#th" data-toggle="collapse" aria-expanded="true" aria-controls="tahun">Batal</a>
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
                <a class="btn btn-sm btn-primary shadow-sm" href="#th" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="tahun"><i class="fas fa-plus fa-sm"></i> Ubah info</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Info</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($info as $s) : ?>
                            <tr>
                                <th scope="row"><?= $no; ?></th>
                                <th scope="row"><?= $s['info']; ?></th>
                                <th scope="row"><?= $s['ket']; ?></th>
                                <td class="text-center">
                                    <a href="#th" class="badge badge-warning mr-1" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="tahun">
                                        <i class="fas fa-edit fa-sm"></i> edit
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