<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>
<div class="container-fluid">
    <?php if ($this->session->flashdata('sukses')) : ?>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('sukses'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('suksesth')) : ?>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Tahun <strong>berhasil</strong> <?= $this->session->flashdata('sukses'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <h1 class="h3 md-2 text-primary"><?= $title; ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <?php if ($infos == true && $info[0]['info'] != "Data update kosong") : ?>
                <h6 class="m-0 font-weight-bold text-primary">Data ini di update terakhir pada tanggal <?= $info[0]['info'] ?> tepatnya pukul <?= $info[0]['ket'] ?></h6>
            <?php else : ?>
                <h6 class="m-0 font-weight-bold text-primary"><?= $info[0]['info'] ?>. <?= $info[0]['ket'] ?>.</h6>
            <?php endif; ?>
        </div>
    </div>
    <div class="card shadow mb-4">
        <form action="<?= base_url('krs/printCSV'); ?>" method="POST">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Data :</h6>
                <div>
                    <a class="btn btn-sm btn-primary shadow-sm" href="<?= base_url('krs/tambah_Mahasiswa'); ?>"><i class="fas fa-user-plus fa-sm"></i> Tambah Siswa</a>
                    <a class="btn btn-sm btn-secondary shadow-sm" href="<?= base_url('krs/tambah_tahun'); ?>"><i class="fas fa-plus fa-sm"></i> Tambah Tahun</a>

                    <button type="submit" name="export" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-file fa-sm"></i> Cetak CSV</button>
                    <!-- <button type="submit" name="import" class="btn btn-sm btn-outline-success shadow-sm"><i class="fas fa-upload fa-sm"></i> Upload CSV</button> -->
                    <button type="button" class="btn btn-outline-success shadow-sm btn-sm" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-upload fa-sm"></i> Upload CSV
                    </button>

                </div>
            </div>
        </form>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload File CSV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('krs/importCSV'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <h6>Perhatian!</h6>
                    <ul>
                        <li>File yang dapat di upload adalah file yang ber-extensi .csv</li>
                        <li>Data dalam file harus berurut sesuai berikut ini : </li>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center thead-light">
                                <tr>
                                    <td scope="col">NIM</td>
                                    <td scope="col">Nama</td>
                                    <td scope="col">Prodi</td>
                                    <td scope="col">Semester</td>
                                    <td scope="col">Status</td>
                                    <td scope="col">Tahun</td>
                                </tr>
                            </thead>
                        </table>
                        <li>Pada bagian Prodi data di tulis sesuai aturan yaitu <strong>PTI</strong> untuk Pendidikan Teknik Informatika, <strong>SI</strong> untuk Sistem Informasi, <strong>MI</strong> untuk Managemen Informatika, dan <strong>ilkom</strong> untuk Ilmu Komputer</li>
                    </ul>
                    <h6>Upload :</h6>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="data">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <hr>
                    <h6 style="color: red;">Tidak mengikuti aturan di atas dapat menyebabkan error upload atau kesalahan inputan data ke sistem...</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="input" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>