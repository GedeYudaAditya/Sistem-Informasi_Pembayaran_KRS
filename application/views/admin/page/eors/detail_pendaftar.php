<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Pendaftar <span class="
            text-primary"><?= ucfirst($pendaftar[0]['nim']) ?></span></h1>
    <p class="mb-4">Berikut informasi terkait pendaftar dengan nama <?= ucfirst($pendaftar[0]['nama_lengkap']) ?></p>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Umum Pendaftar</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Layanan Tersedia:</div>
                    <?php if ($kegiatan[0]['wawancara'] == 1) { ?>
                    <?php if ($kegiatan[0]['penilaian'] == 1) { ?>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalInput"
                        id="tombol-info">Tambah Penilaian</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalNilaiSementara"
                        id="tombol-info">Nilai Sementara</a>
                    <?php } ?>
                    <?php } ?>
                    <?php if ($kegiatan[0]['hasil_akhir'] == 1 && $kegiatan[0]['penilaian'] == 0) { ?>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalNilaiAkhir"
                        id="tombol-info">Nilai Akhir</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalInputHasilAkhir"
                        id="tombol-info">Tambah Keputusan</a>
                    <?php } ?>
                    <a href="#info_umum" class="dropdown-item" id="card-header-option" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="info_umum">
                        Atur Tampilan
                    </a>
                </div>
            </div>
        </div>
        <!-- Card Header - Accordion -->

        <!-- Card Content - Collapse -->
        <div class="collapse show" id="info_umum">
            <div class="card-body row justify-content-center text-center">
                <div class="col-lg-6 col-md-8">
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nim</div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $pendaftar[0]['nim'] ?></div>
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
                                            Lengkap</div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= ucfirst($pendaftar[0]['nama_lengkap']) ?></div>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Program
                                            Studi</div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?php if ($pendaftar[0]['prodi'] == "05") { ?>
                                            Pendidikan Teknik Informatika
                                            <?php } else if ($pendaftar[0]['prodi'] == "02") { ?>
                                            Manajemen Informatika
                                            <?php } else if ($pendaftar[0]['prodi'] == "09") { ?>
                                            Sistem Informasi
                                            <?php } else if ($pendaftar[0]['prodi'] == "10") { ?>
                                            Ilmu Komputer
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Angkatan
                                        </div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $pendaftar[0]['angkatan'] ?></div>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jenis
                                            Kelamin</div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $pendaftar[0]['jenis_kelamin'] ?></div>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Agama
                                        </div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $pendaftar[0]['agama'] ?></div>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Alamat
                                            Asal</div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $pendaftar[0]['alamat_asal'] ?></div>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Alamat
                                            Sekarang
                                        </div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $pendaftar[0]['alamat_sekarang'] ?></div>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kontak
                                        </div>

                                        <div class="p mb-0 font-weight-bold text-gray-800"><i
                                                class="fas fa-envelope"></i>
                                            <?= $pendaftar[0]['email'] ?></div>

                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <i class="fab fa-whatsapp"></i> <?= $pendaftar[0]['wa'] ?>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pilihan
                                        </div>

                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <i class="fas fa-check-square"></i>
                                            <?= $pendaftar[0]['pilihan_wajib'] ?>
                                        </div>
                                        <?php if (!empty($pendaftar[0]['pilihan_opsional'])) { ?>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <i class="fas fa-check-square"></i>
                                            <?= $pendaftar[0]['pilihan_opsional'] ?>
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
    <!-- Informasi Pribadi Pendaftar -->
    <?php if ($kegiatan[0]['informasi_pribadi'] == 1) { ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Pribadi Pendaftar</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Layanan Tersedia:</div>
                    <a href="#info_pribadi" class="dropdown-item" id="card-header-option" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="info_pribadi">
                        Atur Tampilan
                    </a>
                </div>
            </div>
        </div>
        <div class="collapse " id="info_pribadi">
            <div class="card-body row justify-content-center text-center">
                <div class="col-lg-6 col-md-8">
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Riwayat
                                            Kesehatan</div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $pendaftar[0]['riwayat_kesehatan'] ?>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Hobi
                                        </div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $pendaftar[0]['hobi'] ?>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Motto
                                            Hidup
                                        </div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $pendaftar[0]['motto'] ?>
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
    <?php } ?>
    <?php if ($kegiatan[0]['informasi_pendidikan'] == 1) { ?>
    <!-- Informasi Pribadi Pendaftar -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Pendidikan Pendaftar</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Layanan Tersedia:</div>
                    <a href="#pendidikan" class="dropdown-item" id="card-header-option" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="pendidikan">
                        Atur Tampilan
                    </a>
                </div>
            </div>
        </div>
        <div class="collapse " id="pendidikan">
            <div class="card-body row justify-content-center text-center">
                <div class="col-lg-6 col-md-8">
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">IPK
                                            Terakhir</div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <?= $pendaftar[0]['ipk'] ?>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Pendidikan Sekolah Dasar
                                        </div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <i class="fas fa-school"></i> <?= $pendaftar[0]['sd'] ?>
                                        </div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <i class="fas fa-calendar-alt"></i> <?= $pendaftar[0]['thn_sd'] ?>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Pendidikan Sekolah Menengah Pertama
                                        </div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <i class="fas fa-school"></i> <?= $pendaftar[0]['smp'] ?>
                                        </div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <i class="fas fa-calendar-alt"></i> <?= $pendaftar[0]['thn_smp'] ?>
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
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Pendidikan Sekolah Menengah Atas
                                        </div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <i class="fas fa-school"></i> <?= $pendaftar[0]['sma'] ?>
                                        </div>
                                        <div class="p mb-0 font-weight-bold text-gray-800">
                                            <i class="fas fa-calendar-alt"></i> <?= $pendaftar[0]['thn_sma'] ?>
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
    <?php } ?>
    <?php if ($kegiatan[0]['upload_file'] == 1) { ?>
    <!-- Informasi File Pendaftar -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Informasi File Pendaftar</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Layanan Tersedia:</div>
                    <a href="#file" class="dropdown-item" id="card-header-option" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="file">
                        Atur Tampilan
                    </a>
                </div>
            </div>
        </div>
        <div class="collapse " id="file">
            <div class="card-body row justify-content-center text-center">
                <div class="col-lg-6 col-md-8">
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Foto
                                            Pendaftar</div>
                                        <div class="img-responsive">
                                            <img src="<?= base_url() ?>assets/upload/Folder_<?= $kegiatan[0]['nama_kegiatan'] ?>/<?= $pendaftar[0]['file_foto'] ?>"
                                                width="100px" class="lazyload"
                                                data-src="<?= base_url() ?>assets/upload/Folder_<?= $kegiatan[0]['nama_kegiatan'] ?>/<?= $pendaftar[0]['file_foto'] ?>"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kondisikan disini agar ketika dia file pdf maka akan menampilkan flip me, ketika tidak maka akan mendownload -->
                    <?php if ($pendaftar[0]['file_dokumen'] != null) { ?>
                    <div class="col-lg-12 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dokumen
                                            Pendaftar</div>
                                        <?php
                                                $ekstensi_file = explode(".", $pendaftar[0]['file_dokumen']);
                                                if ($ekstensi_file[1] == "pdf") :
                                                ?>
                                        <a href="<?= base_url() ?>web/flip_me/<?= $kegiatan[0]['nama_kegiatan'] ?>/<?= $pendaftar[0]['file_dokumen'] ?>/eors"
                                            class="btn btn-primary btn-sm mt-2 btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-eye"></i>
                                            </span>
                                            <span class="text">Lihat File</span>
                                        </a>
                                        <?php else : ?>
                                        <a href="<?= base_url() ?>assets/upload/Folder_<?= $kegiatan[0]['nama_kegiatan'] ?>/<?= $pendaftar[0]['file_dokumen'] ?>"
                                            class="btn btn-primary btn-sm mt-2 btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-eye"></i>
                                            </span>
                                            <span class="text">Download File</span>
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php if ($kegiatan[0]['penilaian'] == 1) { ?>
<!-- Form Tambah Data -->
<div class="modal fade" id="modalInput" tabindex="-1" aria-labelledby="modalInput" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInput">Tambah Nilai <span
                        style="color: blue;"><?= $pendaftar[0]['nim'] ?></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if ($penilaian == 0) { ?>
                <form class="user" action="<?= base_url() ?>eors/proses_penilaian" method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-lg-12 mb-3">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Penilaian Personalia</div>
                                <input type="number" class="form-control form-control-user" id="penilaian_1"
                                    placeholder="Masukkan Nilai Kategori Pertama" name="penilaian_1" min="0" max="10"
                                    step="0.1" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 mb-3">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Penilaian Manajemen</div>
                                <input type="number" class="form-control form-control-user" id="penilaian_2"
                                    placeholder="Masukkan Nilai Kategori Kedua" name="penilaian_2" min="0" max="10"
                                    step="0.1" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 mb-3">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Penilaian Problem Solving</div>
                                <input type="number" class="form-control form-control-user" id="penilaian_3"
                                    placeholder="Masukkan Nilai Kategori Ketiga" name="penilaian_3" min="0" max="10"
                                    step="0.1" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 mb-3">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Penilaian Kelengkapan Berkas</div>
                                <input type="number" class="form-control form-control-user" id="penilaian_4"
                                    placeholder="Masukkan Nilai Kategori Keempat" name="penilaian_4" min="0" max="10"
                                    step="0.1" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="user" name="user" value="<?= $pendaftar[0]['id_informasi'] ?>">
                    <input type="hidden" id="kegiatan" name="kegiatan" value="<?= $kegiatan[0]['nama_kegiatan'] ?>">
                    <input type="hidden" id="create_by" name="create_by"
                        value="<?= ucfirst($group[0]['first_name']); ?>">
                    <div class="form-group">
                        <div class="col-lg-12 mb-3">
                            <div class="col mr-2">
                                <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php } else { ?>
                <div class="p mb-0 text-gray-500 text-center">
                    <i>Oopss ... Anda Sudah Memberikan Penilaian Pada User Ini <br>
                        Jika Bukan Anda Silahkan Hubungi Administrator Website</i>
                </div>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalNilaiSementara" tabindex="-1" aria-labelledby="modalInput" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="modalNilaiSementara">Nilai Sementara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Penilai</th>
                                <th>Nilai Personalia</th>
                                <th>Nilai Manajemen</th>
                                <th>Nilai Problem Solving</th>
                                <th>Nilai Kelengkapan Berkas</th>
                                <th>Total</th>
                                <th>Keterangan</th>
                                <th>Diinput Pada</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_nilai as $data) { ?>
                            <tr>
                                <td><?= $data['create_by'] ?></td>
                                <td><?= $data['nilai_1'] ?></td>
                                <td><?= $data['nilai_2'] ?></td>
                                <td><?= $data['nilai_3'] ?></td>
                                <td><?= $data['nilai_4'] ?></td>
                                <td><?= $data['total'] ?></td>
                                <td><?= $data['keterangan'] ?></td>
                                <td><?= $data['create_at'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if ($kegiatan[0]['hasil_akhir'] == 1) { ?>
<!-- Form Tambah Data -->
<div class="modal fade" id="modalInputHasilAkhir" tabindex="-1" aria-labelledby="modalInput" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInputHasilAkhir">Form Tambah Keputusan Akhir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user" action="<?= base_url() ?>eors/proses_hasil_akhir" method="POST"
                    enctype="multipart/form-data">
                    <?php if ($pendaftar[0]['ket_lulus'] == 1) { ?>
                    <div class="form-group">
                        <div class="col-lg-12 mb-3">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Keputusan Akhir</div>
                                <select name="keputusan" id="keputusan" class="form-control form-control-select"
                                    required disabled>
                                    <option value="">Masukkan Keputusan Akhir</option>
                                    <?php foreach ($jabatan as $data) : ?>
                                    <?php if ($data['nama_pilihan'] == $pendaftar[0]['diterima_di']) { ?>
                                    <option value="<?= $data['nama_pilihan'] ?>" selected>
                                        <?= $data['nama_pilihan'] ?></option>
                                    <?php } else { ?>
                                    <option value="<?= $data['nama_pilihan'] ?>">
                                        <?= $data['nama_pilihan'] ?></option>
                                    <?php } ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 mb-3">
                            <div class="col mr-2">
                                <button type="" disabled class="btn btn-secondary btn-user btn-block">Tambah
                                    Data</button>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="form-group">
                        <div class="col-lg-12 mb-3">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Keputusan Akhir</div>
                                <select name="keputusan" id="keputusan" class="form-control form-control-select"
                                    required>
                                    <option value="">Masukkan Keputusan Akhir</option>
                                    <?php foreach ($jabatan as $data) : ?>
                                    <option value="<?= $data['nama_pilihan'] ?>">
                                        <?= $data['nama_pilihan'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="user" name="user" value="<?= $pendaftar[0]['id_informasi'] ?>">
                    <input type="hidden" id="kegiatan" name="kegiatan" value="<?= $kegiatan[0]['nama_kegiatan'] ?>">
                    <div class="form-group">
                        <div class="col-lg-12 mb-3">
                            <div class="col mr-2">
                                <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalNilaiAkhir" tabindex="-1" aria-labelledby="modalInput" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="modalNilaiAkhir">Nilai Akhir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Penilai</th>
                                <th>Nilai Personalia</th>
                                <th>Nilai Manajemen</th>
                                <th>Nilai Problem Solving</th>
                                <th>Nilai Kelengkapan Berkas</th>
                                <th>Total</th>
                                <th>Keterangan</th>
                                <th>Diinput Pada</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_nilai as $data) { ?>
                            <tr>
                                <td><?= $data['create_by'] ?></td>
                                <td><?= $data['nilai_1'] ?></td>
                                <td><?= $data['nilai_2'] ?></td>
                                <td><?= $data['nilai_3'] ?></td>
                                <td><?= $data['nilai_4'] ?></td>
                                <td><?= $data['total'] ?></td>
                                <td><?= $data['keterangan'] ?></td>
                                <td><?= $data['create_at'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="row col-12">
                        <h6 class="m-0 mr-3 font-weight-bold text-primary">Keputusan Akhir :</h6>
                        <?php if ($pendaftar[0]['ket_lulus'] == 1) { ?>
                        <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Diterima di <?= $pendaftar[0]['diterima_di'] ?></span>
                        </a>
                        <?php } else { ?>
                        <a href="#" class="btn btn-secondary btn-sm btn-icon-split mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-times"></i>
                            </span>
                            <span class="text">Tidak Diterima </span>
                        </a>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>