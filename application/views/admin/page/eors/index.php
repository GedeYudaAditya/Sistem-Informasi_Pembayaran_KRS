<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen Kegiatan EORS</h1>
    <p class="mb-4">Silahkan atur informasi terkait open recruitment pada halaman ini</p>
    <!-- Kepengurusan -->
    <div class="accordion" id="ManajemenEors">
        <?php if ($group[0]['group_id'] == "1") { ?>
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#setting" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="setting">
                <h6 class="m-0 font-weight-bold text-primary">Data Pengaturan Kegiatan</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse" id="setting" data-parent="#ManajemenEors">
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="<?= base_url() ?>eors/tambah_kegiatan"
                            class="btn btn-primary btn-sm btn-icon-split mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-flag"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a>
                        <table class="table table-bordered" id="tableSponsor" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Status Aktif</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Data Pribadi</th>
                                    <th>Data Pendidikan</th>
                                    <th>Wawancara</th>
                                    <th>File</th>
                                    <th>Penilaian</th>
                                    <th>Hasil Akhir</th>
                                    <th>Pengumuman</th>
                                    <th>Fitur</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $x = 1;
                                    foreach ($kegiatan as $data) : ?>
                                <tr>
                                    <td><?= $x++ ?></td>
                                    <td>
                                        <?php if ($data['aktivasi'] == 1) { ?>
                                        <a href="<?= base_url() ?>eors/nonaktivasi/<?= $data['id_kegiatan'] ?>"
                                            class="btn btn-success btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Aktif</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="<?= base_url() ?>eors/aktivasi/<?= $data['id_kegiatan'] ?>"
                                            class="btn btn-secondary btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Nonaktif</span>
                                        </a>
                                        <?php } ?>
                                    </td>
                                    <td><?= $data['nama_kegiatan'] ?></td>
                                    <td>
                                        <?php if ($data['informasi_pribadi'] == 1) { ?>
                                        <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-cog"></i>
                                            </span>
                                            <span class="text">Sertakan</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="#" class="btn btn-secondary btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-cog"></i>
                                            </span>
                                            <span class="text">Tidak</span>
                                        </a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($data['informasi_pendidikan'] == 1) { ?>
                                        <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-cog"></i>
                                            </span>
                                            <span class="text">Sertakan</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="#" class="btn btn-secondary btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-cog"></i>
                                            </span>
                                            <span class="text">Tidak</span>
                                        </a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($data['wawancara'] == 1) { ?>
                                        <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-cog"></i>
                                            </span>
                                            <span class="text">Sertakan</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="#" class="btn btn-secondary btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-cog"></i>
                                            </span>
                                            <span class="text">Tidak</span>
                                        </a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($data['upload_file'] == 1) { ?>
                                        <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-cog"></i>
                                            </span>
                                            <span class="text">Sertakan</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="#" class="btn btn-secondary btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-cog"></i>
                                            </span>
                                            <span class="text">Tidak</span>
                                        </a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($data['penilaian'] == 1) { ?>
                                        <a href="<?= base_url() ?>eors/nonaktif_penilaian/<?= $data['id_kegiatan'] ?>"
                                            class="btn btn-success btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Aktif</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="<?= base_url() ?>eors/aktif_penilaian/<?= $data['id_kegiatan'] ?>"
                                            class="btn btn-secondary btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Nonaktif</span>
                                        </a>
                                        <?php } ?>
                                    </td>
                                    <td>

                                        <?php if ($data['hasil_akhir'] == 1) { ?>
                                        <a href="<?= base_url() ?>eors/nonaktif_hasil/<?= $data['id_kegiatan'] ?>"
                                            class="btn btn-success btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Aktif</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="<?= base_url() ?>eors/aktif_hasil/<?= $data['id_kegiatan'] ?>"
                                            class="btn btn-secondary btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Nonaktif</span>
                                        </a>
                                        <?php } ?>

                                    </td>
                                    <td>

                                        <?php if ($data['pengumuman'] == 1) { ?>
                                        <a href="<?= base_url() ?>eors/nonaktif_pengumuman/<?= $data['id_kegiatan'] ?>"
                                            class="btn btn-success btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Aktif</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="<?= base_url() ?>eors/aktif_pengumuman/<?= $data['id_kegiatan'] ?>"
                                            class="btn btn-secondary btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Nonaktif</span>
                                        </a>
                                        <?php } ?>

                                    </td>
                                    <td>
                                        <a href="<?= base_url() ?>eors/hapus_kegiatan/<?= $data['id_kegiatan'] ?>"
                                            class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Delete</span>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#kegiatan" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="kegiatan">
                <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan Open Recruitment</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse" id="kegiatan" data-parent="#ManajemenEors">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableKegiatan" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Deskripsi</th>
                                    <th>Persyaratan</th>
                                    <th>Tgl Mulai</th>
                                    <th>Tgl Akhir</th>
                                    <th>Target Pendaftar</th>
                                    <th>Jumlah Pendaftar</th>
                                    <th>Manajemen Kegiatan</th>
                                    <th>Dibuat Oleh</th>
                                    <th>Dibuat Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($kegiatan as $data) :
                                ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $data['nama_kegiatan'] ?></td>
                                    <td><?= $data['deskripsi']  ?></td>
                                    <td><?= $data['persyaratan']  ?></td>
                                    <td><?= $data['tgl_mulai']  ?></td>
                                    <td><?= $data['tgl_akhir']  ?></td>
                                    <td><?= $data['target_pendaftar']  ?></td>
                                    <td><?= $data['jumlah_pendaftar']  ?></td>
                                    <td> <a href="<?= base_url() ?>eors/administrator/<?= $data['nama_kegiatan'] ?>"
                                            class="btn btn-primary btn-sm btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-globe"></i>
                                            </span>
                                            <span class="text">Administrator</span>
                                        </a>
                                    </td>
                                    <td><?= $data['create_by']  ?></td>
                                    <td><?= $data['create_at']  ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>