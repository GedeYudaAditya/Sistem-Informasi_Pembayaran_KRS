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
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>Gagal</strong> <?= $this->session->flashdata('sukses'); ?>
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

    <!-- <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <?php if ($infos == true && $info[0]['info'] != "Data update kosong") : ?>
                <h6 class="m-0 font-weight-bold text-primary">Bukti Pembayaranmu terakhir kali diperbaharui pada <?= $info[0]['info'] ?> tepatnya pukul <?= $info[0]['ket'] ?></h6>
            <?php else : ?>
                <h6 class="m-0 font-weight-bold text-primary"><?= $info[0]['info'] ?>. <?= $info[0]['ket'] ?>.</h6>
            <?php endif; ?>
        </div>

    </div> -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Antrian Permintaan Bukti Dosen :</h6>


        </div>

        <div class="card-body">
            <?php if ($bukti == NULL) : ?>
                <p class="text-center ">Belum Ada Permintaan Pengunggahan Bukti Dari Dosen PA!</p>
            <?php else : ?>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center thead-light">
                            <tr>
                                <th scope="col">Dosen PA</th>
                                <th scope="col">TA - Semester</th>
                                <th scope="col">Expired</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bukti as $b) : ?>
                                <tr>
                                    <th scope="row">
                                        <!-- <embed src=" //base_url('assets/upload/Folder_krs/' . $bukti//['file_path']) ?>" width="100%" height="100%" type="application/pdf" /> -->
                                        <?= $b['first_name'] ?>
                                    </th>
                                    <th scope="row"><?= $b['tahun']; ?> - <?= $b['semester']; ?></th>
                                    <td scope="row" class="text-center">
                                        <?= $b['expire_date'] ?>
                                    </td>
                                    <td scope="row" class="text-center">
                                        <!-- check if expired now -->
                                        <?php
                                        $date = date('Y-m-d');
                                        $expired = $b['expire_date'];
                                        ?>
                                        <?php if ($date > $expired) : ?>
                                            <span class="badge badge-danger">Date Expired</span>
                                        <?php else : ?>
                                            <a href="<?= base_url('krs/upload_bukti/' . $b['id_form']); ?>" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-upload fa-sm"></i></i>Upload Bukti Pembayaran</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>
<!-- Modal -->
<!--
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
                        <li>Pada bagian Prodi data di tulis sesuai aturan yaitu <strong>PTI</strong> untuk Pendidikan Teknik Informatika, <strong>SI</strong> untuk Sistem Informasi, <strong>MI</strong> untuk Managemen Informatika, dan <strong>ILKOM</strong> untuk Ilmu Komputer</li>
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
</div> -->