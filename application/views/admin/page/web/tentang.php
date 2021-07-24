<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tentang HMJ TI</h1>
    <p class="mb-4">Berikut informasi terkait HMJ TI, segala informasi di bawah akan digunakan pada Website HMJ TI. Anda
        dapat mengubahnya dengan menekan tombol Ubah</p>
    <!-- Kepengurusan -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#datakepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="datakepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Data Kepengurusan HMJ</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="datakepengurusan">
            <div class="card-body">
                <a href="<?= base_url() ?>web/tambah_data_kepengurusan"
                    class="btn btn-primary btn-sm btn-icon-split mb-4">
                    <span class="icon text-white-50">
                        <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                </a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableKepengurusan" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Kepengurusan</th>
                                <th>Deskripsi</th>
                                <th>Dibuat Oleh</th>
                                <th>Dibuat Tanggal</th>
                                <?php if ($group[0]['group_id'] == "1") { ?>
                                <th>Fitur</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kepengurusan as $data) : ?>
                            <tr>
                                <?php
                                    if ($data['status_pakai'] == 1) {
                                    ?><td style="color: green;"><?php
                                                            } else { ?>
                                <td style="color: red;"><?php
                                                            }
                                                                ?>
                                    <?= $data['nama_hmj'] ?>
                                </td>
                                <td><?= $data['deskripsi_hmj'] ?></td>
                                <td><?= $data['create_by'] ?></td>
                                <td><?= $data['create_at'] ?></td>
                                <?php if ($group[0]['group_id'] == "1") { ?>
                                <td>
                                    <a href="<?= base_url() ?>web/hapus_data_kepengurusan/<?= $data['id_hmj']; ?>"
                                        class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </a>

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
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Umum Kepengurusan</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Layanan Tersedia:</div>
                    <a class="dropdown-item" href="<?= base_url() ?>web/edit_info" id="tombol-info">Sinkronasi Data</a>
                    <a href="#kepengurusan" class="dropdown-item" id="card-header-option" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="kepengurusan">
                        Atur Tampilan
                    </a>
                </div>
            </div>
        </div>
        <!-- Card Header - Accordion -->

        <!-- Card Content - Collapse -->
        <div class="collapse show" id="kepengurusan">
            <div class="card-body row justify-content-center text-center">
                <div class="col-lg-6 col-md-8">
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama
                                            Kepengurusan</div>
                                        <?php if (!empty($select_kepengurusan)) { ?>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $select_kepengurusan[0]['nama_hmj'] ?></div>
                                        <?php } else { ?>
                                        <div class="p mb-0  text-gray-500">
                                            <i>Data Masih Kosong</i>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Deskripsi
                                            Singkat HMJ</div>
                                        <?php if (!empty($select_kepengurusan)) { ?>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $select_kepengurusan[0]['deskripsi_hmj'] ?> </div>
                                        <?php } else { ?>
                                        <div class="p mb-0  text-gray-500">
                                            <i>Data Masih Kosong</i>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Foto
                                            Ketua HMJ</div>
                                        <div class="img-responsive">
                                            <?php if (!empty($select_kepengurusan)) { ?>
                                            <img class="lazyload"
                                                data-src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['ketua_foto'] ?>"
                                                src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['ketua_foto'] ?>"
                                                alt="" width="400px">
                                            <?php } else { ?>
                                            <div class="p mb-0  text-gray-500">
                                                <i>Data Masih Kosong</i>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama
                                            Ketua HMJ</div>
                                        <?php if (!empty($select_kepengurusan)) { ?>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $select_kepengurusan[0]['ketua_hmj'] ?></div>
                                        <?php } else { ?>
                                        <div class="p mb-0  text-gray-500">
                                            <i>Data Masih Kosong</i>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Foto
                                            Wakil Ketua HMJ</div>
                                        <div class="img-responsive">
                                            <?php if (!empty($select_kepengurusan)) { ?>
                                            <img class="lazyload"
                                                data-src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['wakil_foto'] ?>"
                                                src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['wakil_foto'] ?>"
                                                alt="" width="400px">

                                            <?php } else { ?>
                                            <div class="p mb-0  text-gray-500">
                                                <i>Data Masih Kosong</i>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama
                                            Wakil Ketua HMJ</div>
                                        <?php if (!empty($select_kepengurusan)) { ?>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $select_kepengurusan[0]['wakil_hmj'] ?></div>

                                        <?php } else { ?>
                                        <div class="p mb-0  text-gray-500">
                                            <i>Data Masih Kosong</i>
                                        </div>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Visi HMJ
                                            TI</div>
                                        <?php if (!empty($select_kepengurusan)) { ?>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $select_kepengurusan[0]['visi_hmj'] ?></div>

                                        <?php } else { ?>
                                        <div class="p mb-0  text-gray-500">
                                            <i>Data Masih Kosong</i>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Misi
                                        </div>
                                        <?php if (!empty($select_kepengurusan)) { ?>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $select_kepengurusan[0]['misi_hmj'] ?>
                                        </div>

                                        <?php } else { ?>
                                        <div class="p mb-0  text-gray-500">
                                            <i>Data Masih Kosong</i>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Struktur
                                            Organisasi Landscape (Desktop Version)</div>
                                        <div class="img-responsive">
                                            <?php if (!empty($select_kepengurusan)) { ?>

                                            <img class="lazyload"
                                                data-src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['landscape_struktur_hmj'] ?>"
                                                src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['landscape_struktur_hmj'] ?>"
                                                alt="" width="400px">
                                            <?php } else { ?>
                                            <div class="p mb-0  text-gray-500">
                                                <i>Data Masih Kosong</i>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Struktur
                                            Organisasi Vertikal (Mobile Version)</div>
                                        <div class="img-responsive">
                                            <?php if (!empty($select_kepengurusan)) { ?>
                                            <img data-src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['vertikal_struktur_hmj'] ?>"
                                                class="lazyload"
                                                src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $select_kepengurusan[0]['vertikal_struktur_hmj'] ?>"
                                                alt="" width="400px">
                                            <?php } else { ?>
                                            <div class="p mb-0  text-gray-500">
                                                <i>Data Masih Kosong</i>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bagian kedua -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Bidang HMJ TI</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Layanan Tersedia:</div>
                    <a id="tombol-bidang" class="dropdown-item" href="<?= base_url() ?>web/tambah_bidang">Tambah
                        Bidang</a>
                    <a href="#bidang" class="dropdown-item" id="card-header-option" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="bidang">
                        Atur Tampilan
                    </a>
                </div>
            </div>
        </div>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="bidang">
            <div class="card-body row justify-content-center text-center">
                <div class="col-lg-6 col-md-8">
                    <!-- Akan berulang -->
                    <?php foreach ($bidang as $data) : ?>
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <!-- Bagian icon -->
                            <div class="dropdown no-arrow" style="text-align: left;">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas pl-2 fa-edit text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Layanan Tersedia:</div>
                                    <?php if ($group[0]['group_id'] == "1") { ?>
                                    <a class="dropdown-item"
                                        href="<?= base_url() ?>web/edit_bidang/<?= $data['id_detail_hmj'] ?>"
                                        id="tombol-info">Edit Data</a>
                                    <a class="dropdown-item tombol-hapus"
                                        href="<?= base_url() ?>web/hapus_bidang/<?= $data['id_detail_hmj'] ?>"
                                        id="tombol-info">Hapus Data</a>
                                    <?php } else { ?>
                                    <a class="dropdown-item"
                                        href="<?= base_url() ?>web/edit_bidang/<?= $data['id_detail_hmj'] ?>"
                                        id="tombol-info">Edit Data</a>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Isinya -->

                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="img-responsive pb-3">
                                            <img class="lazyload"
                                                data-src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $data['ketua_foto'] ?>"
                                                src="<?= base_url() ?>assets/upload/Folder_<?= $select_kepengurusan[0]['nama_hmj'] ?>/<?= $data['ketua_foto'] ?>"
                                                alt="" width="400px">
                                        </div>
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <?= $data['nama_bidang'] ?></div>
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                            <?= $data['ketua_nama'] ?></div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $data['deskripsi_bidang'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>