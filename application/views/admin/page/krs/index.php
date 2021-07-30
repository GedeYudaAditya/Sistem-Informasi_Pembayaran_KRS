<div class="container-fluid">
    <h1 class="h3 md-2 text-primary"><?= $title; ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">List Data :</h6>
            <div>
                <a class="btn btn-sm btn-primary shadow-sm" href="<?= base_url('krs/tambah_Mahasiswa'); ?>"><i class="fas fa-user-plus fa-sm"></i> Tambah Siswa</a>
                <a class="btn btn-sm btn-secondary shadow-sm" href="<?= base_url('krs/tambah_tahun'); ?>"><i class="fas fa-plus fa-sm"></i> Tambah Tahun</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center thead-light">
                        <tr>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswa as $s) : ?>
                            <tr>
                                <th scope="row"><?= $s['nim']; ?></th>
                                <th scope="row"><?= $s['nama']; ?></th>
                                <th scope="row"><?= $s['prodi']; ?></th>
                                <th scope="row"><?= $s['status']; ?></th>
                                <th scope="row"><?= $s['tahun']; ?></th>
                                <th scope="row"><?= $s['smtr']; ?></th>
                                <td class="text-center">
                                    <a href="<?= base_url(); ?>krs/getUbah/<?= $s['nim']; ?>/<?= $s['id-th']; ?>/<?= $s['smtr']; ?>" class="badge badge-warning mr-1">
                                        <i class="fas fa-edit fa-sm"></i> edit
                                    </a>

                                    <a href="<?= base_url('krs/hapus_smtr/' . $s['id-smtr']); ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                        <i class="far fa-trash-alt fa-sm"></i> delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>