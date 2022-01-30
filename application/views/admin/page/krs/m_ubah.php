<?php
$options = array('one', 'two', 'three');

$output = '';
for ($i = 0; $i < count($options); $i++) {
    $output .= '<option '
        . ($_GET['sel'] == $options[$i] ? 'selected="selected"' : '') . '>'
        . $options[$i]
        . '</option>';
}
?>
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
        <form method="post" action="<?= base_url(); ?>krs/ubahData/<?= $datas[0]['nim'] ?>/<?= $datas2[0]['id-th'] ?>/<?= $datas2[0]['smtr'] ?>">
            <input type="number" hidden name="id-smtr" value="<?= $datas2[0]['id-smtr'] ?>">
            <div class="row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="nim">NIM Mahasiswa</label>
                        <input disabled type="text" class="form-control" id="nim" name="nim" maxlength="10" value="<?= $datas[0]['nim'] ?>">
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $datas[0]['nama'] ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="custom-select form-control" id="status" name="status" type="text" value="<?= $datas2[0]['status'] ?>">
                            <?php
                            if ($datas2[0]['status'] == "Lunas") {
                                $S1 = 'selected="selected"';
                                $S2 = '';
                            } else {
                                $S1 = '';
                                $S2 = 'selected="selected"';
                            }
                            ?>
                            <option value="">-- Pilih Status --</option> -->
                            <option <?= $S1 ?> value="Lunas">Lunas</option>
                            <option <?= $S2 ?> value="Belum Bayar">Belum Bayar</option>
                        </select>
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group mt-3">
                        <label for="prodi">Prodi</label>
                        <select class="custom-select form-control" id="prodi" name="prodi" type="text" value="<?= $datas[0]['prodi'] ?>">
                            <option value="">-- Pilih Prodi --</option> -->
                            <?php foreach ($prodis as $pr) : ?>
                                <?php if ($datas[0]['prodi'] == $pr['id']) : ?>
                                    <option <?= 'selected="selected"' ?> value="<?= $pr['id']; ?>"><?= $pr['prodi']; ?></option>
                                <?php else : ?>
                                    <option value="<?= $pr['id']; ?>"><?= $pr['prodi']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('prodi_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <select class="custom-select form-control" id="tahun" name="tahun" type="text" value="<?= $datas2[0]['tahun'] ?>">
                            <option value="">-- Pilih Tahun --</option> -->
                            <?php foreach ($th as $t) : ?>
                                <?php if ($datas2[0]['id-th'] == $t['id-th']) : ?>
                                    <option <?= 'selected="selected"' ?> value="<?= $t['id-th']; ?>"><?= $t['tahun']; ?></option>
                                <?php else : ?>
                                    <option value="<?= $t['id-th']; ?>"><?= $t['tahun']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="smtr">Semester</label>
                        <select class="custom-select form-control" id="smtr" name="smtr" type="text" value="<?= $datas2[0]['smtr'] ?>">
                            <?php
                            if ($datas2[0]['smtr'] == "Ganjil") {
                                $d1 = 'selected="selected"';
                                $d2 = '';
                            } else {
                                $d1 = '';
                                $d2 = 'selected="selected"';
                            }
                            ?>
                            <option value="">-- Pilih Semester --</option> -->
                            <option <?= $d1 ?> value="Ganjil">Ganjil</option>
                            <option <?= $d2 ?> value="Genap">Genap</option>
                        </select>
                        <?= form_error('smtr', '<small class="text-danger pl-3">', '</small>'); ?>
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

        </form>
        <!-- akhir form input -->

    </div>
    <!-- /.card -->

</div>
<!-- /.container-fluid -->