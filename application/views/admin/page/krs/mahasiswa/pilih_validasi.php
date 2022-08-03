<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Cek Status Validasi Pembayaran KRS</h1>
    <!-- <form id="contact-form" method="POST" action="">
        <p class="mb-4">Silakan masukkan informasi berikut untuk mengecek status validasi pembayaran KRS mahasiswa</p>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <select name="tahun" id="tahun" class="form-control" required>
                        <option value="" disabled selected hidden>Tahun KRS</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="semester" id="semester" class="form-control" required>
                        <option value="" disabled selected hidden>Semester</option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <a class="btn btn-primary w-40 mt-3" name="submit" type="submit" id="submit" href="">
                Cari Mahasiswa</a>
                </a>
            </div>
        </div>
    </form> -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Status Validasi Bukti :</h6>
        </div>

        <div class="card-body">
            <?php if ($bukti === NULL) : ?>
                <p class="text-center ">Belum Ada Bukti Yang Pernah Di Unggah!</p>
            <?php else : ?>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center thead-light">
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">TA-Semester</th>
                                <th scope="col">Dosen PA</th>
                                <th scope="col">valid</th>
                                <th scope="col">File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bukti as $b) : ?>
                                <tr>
                                    <th scope="row">
                                        <!-- <embed src=" //base_url('assets/upload/Folder_krs/' . $bukti//['file_path']) ?>" width="100%" height="100%" type="application/pdf" /> -->
                                        <?= $b['mahasiswa'] ?>
                                    </th>
                                    <th scope="row">
                                        <!-- <embed src=" //base_url('assets/upload/Folder_krs/' . $bukti//['file_path']) ?>" width="100%" height="100%" type="application/pdf" /> -->
                                        <?= $b['nim'] ?>
                                    </th>
                                    <th scope="row"><?= $b['tahun']; ?> - <?= $b['semester']; ?></th>
                                    <td scope="row" class="text-center">
                                        <?= $b['dosen'] ?>
                                    </td>
                                    <td scope="row" class="text-center">
                                        <!-- check validasi bukti -->
                                        <?php if ($b['valid'] == 0) : ?>
                                            <span class="badge badge-danger"><i class="fa fa-times-circle"></i></span>
                                        <?php else : ?>
                                            <span class="badge badge-success"><i class="fa fa-check-circle"></i></span>
                                        <?php endif; ?>
                                    </td>
                                    <th scope="row" class="text-center">
                                        <!-- <embed src=" //base_url('assets/upload/Folder_krs/' . $bukti//['file_path']) ?>" width="100%" height="100%" type="application/pdf" /> -->
                                        <a href="<?= base_url('assets/upload/Folder_krs/' . $b['file_path']) ?>" target="blank"><img src="<?= base_url('assets/img/icon/file-icon/pdf-24.png'); ?>" alt=""></a>
                                    </th>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>