<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen Kegiatan ETIKA</h1>
    <p class="mb-4">Silahkan atur informasi terkait dengan Sistem E-Voting Teknik Informatika disini</p>
    <!-- Kepengurusan -->
    <div class="accordion" id="ManajemenEors">

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
                        <?php if ($group[0]['group_id'] == "1") { ?>
                        <a href="<?= base_url() ?>etika/tambah_kegiatan"
                            class="btn btn-primary btn-sm btn-icon-split mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-flag"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a>
                        <?php } ?>
                        <table class="table table-bordered" id="tableSponsor" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Status Aktif</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Deskripsi</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    <th>Setelan</th>
                                    <th>Mode Voting</th>
                                    <th>Dibuat Pada</th>
                                    <th>Dibuat Oleh</th>
                                    <?php if ($group[0]['group_id'] == "1") { ?>
                                    <th>Fitur</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Lakukan foreach disini untuk menampilkan isi data dari kegiatan -->
                                <?php
                                $i = 1;
                                foreach ($kegiatan as $data) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td>
                                        <?php if (new DateTime(date('Y-m-d H:i:s')) >= new DateTime($data['waktu_mulai'])  && new DateTime(date('Y-m-d H:i:s')) <= new DateTime($data['waktu_selesai'])) { ?>
                                        <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Aktif</span>
                                        </a>
                                        <?php } else if (new DateTime(date('Y-m-d H:i:s')) < new DateTime($data['waktu_mulai'])) { ?>
                                        <a href="#" class="btn btn-secondary btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Nonaktif</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="#" class="btn btn-info btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-flag"></i>
                                            </span>
                                            <span class="text">Berakhir</span>
                                        </a>
                                        <?php } ?>
                                    </td>
                                    <td><?= $data['nama_kegiatan'] ?></td>
                                    <td><?= $data['deskripsi'] ?></td>
                                    <td><?= $data['waktu_mulai'] ?></td>
                                    <td><?= $data['waktu_selesai'] ?></td>
                                    <td><a href="<?= base_url() ?>etika/administrator/<?= base64_encode(base64_encode($data['id_kegiatan'])) ?>"
                                            class="btn btn-primary btn-sm btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-eye"></i>
                                            </span>
                                            <span class="text">Admin</span>
                                        </a>
                                    </td>
                                    <td>
                                        <?php if ($data['mode'] == "0") {
                                                echo "Voting Otomatis";
                                            } else if ($data['mode'] == "2") {
                                                echo "Voting Semi Otomatis";
                                            } else {
                                                echo "Voting Manual";
                                            } ?>
                                    </td>
                                    <td><?= $data['created_date'] ?></td>
                                    <td><?= $data['created_by'] ?></td>
                                    <?php if ($group[0]['group_id'] == "1") { ?>
                                    <td>
                                        <a href="<?= base_url() ?>etika/ubah_kegiatan/<?= base64_encode(base64_encode($data['id_kegiatan'])) ?>"
                                            class="btn btn-warning btn-sm btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Ubah</span>
                                        </a>
                                        <a href="<?= base_url() ?>etika/hapus_kegiatan/<?= base64_encode(base64_encode($data['id_kegiatan'])) ?>"
                                            class="btn btn-danger btn-sm mt-2 btn-icon-split tombol-hapus">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Hapus</span>
                                        </a>
                                        <?php } ?>
                                    </td>
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