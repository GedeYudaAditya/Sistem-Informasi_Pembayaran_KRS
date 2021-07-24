<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen Pemilih ETIKA Kegiatan <span
            class="text-primary"><?= ucwords($kegiatan[0]['nama_kegiatan']) ?></span></h1>
    <p class="mb-4">Silahkan atur informasi pemilih terkait dengan Sistem E-Voting Teknik Informatika disini</p>
    <!-- Kepengurusan -->
    <div class="accordion" id="ManajemenEors">
        <?php
        if (new DateTime(date('Y-m-d H:i:s')) > new DateTime($kegiatan[0]['waktu_selesai'])) : ?>
        <div class="alert alert-danger col-12" role="alert">
            Waktu Voting Telah Usai !!
        </div>
        <?php elseif (new DateTime(date('Y-m-d H:i:s')) >= new DateTime($kegiatan[0]['waktu_mulai'])  && new DateTime(date('Y-m-d H:i:s')) <= new DateTime($kegiatan[0]['waktu_selesai'])) : ?>
        <div class="alert alert-success col-12" role="alert">
            <?php
                $tgl_selesai = new DateTime($kegiatan[0]['waktu_selesai']);
                $tgl_hari_ini = new DateTime(date('Y-m-d H:i:s'));

                $diff = $tgl_selesai->diff($tgl_hari_ini);
                echo "Voting Berakhir dalam " . $diff->d . " hari " . $diff->h . " jam " . $diff->i . " menit ";
                ?>
        </div>
        <?php else : ?>
        <div class="alert alert-secondary col-12" role="alert">
            Waktu Voting Belum Dimulai!!
        </div>
        <?php endif; ?>
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#setting" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="setting">
                <h6 class="m-0 font-weight-bold text-primary">Data Pengaturan Kegiatan</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="setting" data-parent="#ManajemenEors">
                <div class="card-body">
                    <div class="table-responsive">
                        <?php if (new DateTime(date('Y-m-d H:i:s')) <= new DateTime($kegiatan[0]['waktu_selesai'])) : ?>
                        <a href="<?= base_url() ?>etika/tambah_pemilih/<?= base64_encode(base64_encode($id_kegiatan)) ?>"
                            class="btn btn-primary btn-sm btn-icon-split mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-flag"></i>
                            </span>
                            <span class="text">Tambah Manual</span>
                        </a>
                        <?php endif; ?>
                        <a href="<?= base_url() ?>etika/unduh_excel/<?= base64_encode(base64_encode($id_kegiatan)) ?>"
                            class="btn ml-2 btn-warning btn-sm btn-icon-split mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-download"></i>
                            </span>
                            <span class="text">Download Excel</span>
                        </a>
                        <?php if ($group[0]['group_id'] == "1" && new DateTime(date('Y-m-d H:i:s')) < new DateTime($kegiatan[0]['waktu_mulai'])) { ?>
                        <a href="#" data-toggle="modal" data-target="#exampleModal"
                            class="btn ml-2 btn-info btn-sm btn-icon-split mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-upload"></i>
                            </span>
                            <span class="text">Upload by Excel</span>
                        </a>

                        <a href="<?= base_url() ?>etika/reset_all/<?= base64_encode(base64_encode($id_kegiatan)) ?>"
                            class="btn ml-2 btn-danger btn-sm btn-icon-split mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-times"></i>
                            </span>
                            <span class="text">Reset All Data</span>
                        </a>
                        <?php } ?>
                        <table class="table table-bordered" id="tableKandidat" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nim</th>
                                    <th>Nama Pemilih</th>
                                    <th>Email</th>
                                    <th>Prodi</th>
                                    <th>Semester</th>
                                    <?php if ($group[0]['group_id'] == "1") { ?>
                                    <th>Fitur</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Lakukan foreach disini untuk menampilkan isi data dari kegiatan -->
                                <?php
                                $i = 1;
                                foreach ($pemilih as $data) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $data['nim'] ?></td>
                                    <td><?= $data['nama_pemilih'] ?></td>
                                    <?php if (!empty($data['email'])) : ?>
                                    <td><?= $data['email'] ?></td>
                                    <?php else : ?>
                                    <td> <span class="text-danger">Tidak Ada Email</span></td>
                                    <?php endif; ?>
                                    <td><?= $data['prodi'] ?></td>
                                    <td><?= $data['semester'] ?></td>
                                    <?php if ($group[0]['group_id'] == "1") { ?>
                                    <td>
                                        <?php if (new DateTime(date('Y-m-d H:i:s')) <= new DateTime($kegiatan[0]['waktu_selesai'])) : ?>
                                        <a href="<?= base_url() ?>etika/ubah_pemilih/<?= base64_encode(base64_encode($data['id_kegiatan'])) ?>/<?= base64_encode(base64_encode($data['id_pemilih'])) ?>"
                                            class="btn btn-warning btn-sm btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Ubah</span>
                                        </a>
                                        <a href="<?= base_url() ?>etika/hapus_pemilih/<?= base64_encode(base64_encode($data['id_kegiatan'])) ?>/<?= base64_encode(base64_encode($data['id_pemilih'])) ?>"
                                            class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Hapus</span>
                                        </a>
                                        <?php else : ?>
                                        <a href="#" class="btn btn-warning btn-sm btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Ubah</span>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Hapus</span>
                                        </a>
                                        <?php endif; ?>
                                    </td>
                                    <?php } ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Unggah Data Peserta Dengan Excel (.xlsx)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Pastikan Format data mahasiswa dalam Excel adalah sebagai berikut</p>
                <ul>
                    <li>Kolom/Row pertama adalah Nama Mahasiswa </li>
                    <li>Kolom/Row kedua adalah Email Mahasiswa (Jika tidak ada data, kosongkan datanya. Jangan menghapus
                        Kolom/Rownya)</li>
                    <li>Kolom/Row ketiga adalah Nim Mahasiswa</li>
                    <li>Kolom/Row keempat adalah Prodi Mahasiswa (Jangan menyingkat nama prodi, huruf awal nama prodi
                        harus huruf kapital. Gunakan format penulisan
                        berikut :)
                        <ol>
                            <li>PTI ditulis Pendidikan Teknik Informatika</li>
                            <li>MI ditulis Manajemen Informatika</li>
                            <li>SI ditulis Sistem Informasi</li>
                            <li>ILKOM ditulis Ilmu Komputer</li>
                        </ol>
                    </li>
                    <li>Kolom/Row kelima adalah Semester (Gunakan angka untuk menulis semester)</li>
                </ul>
                <p>Jika sudah sesuai dengan format, silahkan unggah file excel dengan format .xlsx maksimal 10 Mb pada
                    form dibawah</p>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <input type="file" class="form-control form-control-user" name="file" required>
                        </div>
                        <div class="col mr-2">
                            <button type="submit" value="Submit" name="Submit"
                                class="btn btn-primary btn-user btn-block">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>