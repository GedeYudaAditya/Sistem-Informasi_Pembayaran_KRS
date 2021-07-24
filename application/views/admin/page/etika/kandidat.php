<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen Kandidat ETIKA Kegiatan <span
            class="text-primary"><?= ucwords($kegiatan[0]['nama_kegiatan']) ?></span>
    </h1>
    <p class="mb-4">Silahkan atur informasi kandidat terkait dengan Sistem E-Voting Teknik Informatika disini</p>
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
                        <?php if ($group[0]['group_id'] == "1" && new DateTime(date('Y-m-d H:i:s')) <= new DateTime($kegiatan[0]['waktu_mulai'])) { ?>
                        <a href="<?= base_url() ?>etika/tambah_kandidat/<?= base64_encode(base64_encode($id_kegiatan)) ?>"
                            class="btn btn-primary btn-sm btn-icon-split mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-flag"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a>
                        <?php } ?>
                        <table class="table table-bordered" id="tableKandidat" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Urut</th>
                                    <th>Foto</th>
                                    <th>Nama Ketua</th>
                                    <th>Nama Wakil</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <?php if ($group[0]['group_id'] == "1") { ?>
                                    <th>Fitur</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Lakukan foreach disini untuk menampilkan isi data dari kegiatan -->
                                <?php
                                $i = 1;
                                foreach ($kandidat as $data) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $data['no_urut'] ?></td>
                                    <td><img src="<?= base_url() ?>assets/upload/Folder_etika/<?= $data['foto'] ?>"
                                            alt="Foto Kandidat" class="lazyload"
                                            data-src="<?= base_url() ?>assets/upload/Folder_etika/<?= $data['foto'] ?>"
                                            width="175px">
                                    </td>
                                    <td><?= $data['nama_ketua'] ?></td>
                                    <td><?= $data['nama_wakil'] ?></td>
                                    <td><?= $data['visi'] ?></td>
                                    <td><?= $data['misi'] ?></td>
                                    <?php if ($group[0]['group_id'] == "1" && new DateTime(date('Y-m-d H:i:s')) <= new DateTime($kegiatan[0]['waktu_selesai'])) { ?>
                                    <td>
                                        <a href="<?= base_url() ?>etika/ubah_kandidat/<?= base64_encode(base64_encode($data['id_kegiatan'])) ?>/<?= base64_encode(base64_encode($data['id_kandidat'])) ?>"
                                            class="btn btn-warning btn-sm btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Ubah</span>
                                        </a>
                                        <a href="<?= base_url() ?>etika/hapus_kandidat/<?= base64_encode(base64_encode($data['id_kegiatan'])) ?>/<?= base64_encode(base64_encode($data['id_kandidat'])) ?>"
                                            class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
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