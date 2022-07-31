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
                <div class="col-6">
                    <div class="form-group">
                        <input type="hidden" name="userGroup" value="10">
                        <label for="user_id">User Id</label>
                        <input type="text" class="form-control <?= form_error('user_id') ? 'is-invalid' : NULL; ?>" id="user_id" name="user_id" value="<?= $users->id; ?>" readonly>
                        <div class="invalid-feedback">
                            <?= form_error('user_id'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="nim">NIM Mahasiswa</label>
                        <input type="text" class="form-control <?= form_error('nim') ? 'is-invalid' : NULL; ?>" id="nim" name="nim" maxlength="10" value="<?= $users->last_name; ?>" readonly>
                        <div class="invalid-feedback">
                            <?= form_error('nim'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : NULL; ?>" id="nama" name="nama" value="<?= $users->first_name; ?>" readonly>
                        <div class="invalid-feedback">
                            <?= form_error('nama'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-space-between">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <select class="custom-select form-control <?= form_error('prodi') ? 'is-invalid' : NULL; ?>" id="prodi" name="prodi" type="text">
                            <option value="">-- Pilih Prodi --</option> -->
                            <?php foreach ($prodis as $pr) : ?>
                                <option value="<?= $pr['id']; ?>"><?= $pr['prodi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= form_error('prodi'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg">
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <select class="custom-select form-control <?= form_error('angkatan') ? 'is-invalid' : NULL; ?>" id="angkatan" name="angkatan" type="text">
                            <option>-- Pilih Angkatan --</option> -->
                            <?php foreach ($th as $t) : ?>
                                <option value="<?= $t; ?>"><?= $t; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= form_error('angkatan'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-space-between">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="smtr">Semester</label>
                        <select class="custom-select form-control <?= form_error('smtr') ? 'is-invalid' : NULL; ?>" id="smtr" name="smtr">
                            <option value="">-- Pilih Semester --</option> -->
                            <?php foreach ($semester as $smtr) : ?>
                                <option value="<?= $smtr; ?>"><?= $smtr; ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= form_error('smtr'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label for="dosen_pa">Dosen Pembimbing Akademik</label>
                        <select class="custom-select form-control <?= form_error('dosen_pa') ? 'is-invalid' : NULL; ?>" id="dosen_pa" name="dosen_pa">
                            <option value="">-- Pilih Dosen PA --</option> -->
                            <?php foreach ($dosen as $dsn) : ?>
                                <option value="<?= $dsn['id']; ?>"><?= $dsn['nama']; ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= form_error('dosen_pa'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                        <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('krs'); ?>">Batal</a>
                    </div>
                </div>
            </div>
            <!-- akhir form input -->
        </form>
        <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
</div>