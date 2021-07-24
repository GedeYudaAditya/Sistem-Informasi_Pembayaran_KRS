 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Manajemen Kegiatan Integer</h1>
     <p class="mb-4">Silahkan atur informasi terkait kegiatan Integer, informasi yang diinputkan pada laman ini akan
         ditampilkan pada halaman Guest</p>
     <!-- Kepengurusan -->
     <div class="accordion" id="ManajemenInteger">
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#kegiatan" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="kegiatan">
                 <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan Integer</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="kegiatan" data-parent="#ManajemenInteger">
                 <div class="card-body">
                     <a href="<?= base_url() ?>integer/tambah_kegiatan"
                         class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <a href="<?= base_url() ?>integer/set_kegiatan" class="btn btn-warning btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-check"></i>
                         </span>
                         <span class="text">Sinkronasi Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableKegiatan" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Status Aktif</th>
                                     <th>Nama Kegiatan</th>
                                     <th>Logo Kegiatan</th>
                                     <th>Video Header</th>
                                     <th>File Informasi</th>
                                     <th>Tema Kegiatan</th>
                                     <th>Deskripsi Singkat</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <th>Fitur</th>
                                     <?php } ?>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($integer as $data) : ?>
                                 <tr>
                                     <td>
                                         <?php
                                                if ($data['status_integer'] == 1) {
                                                ?>
                                         <a href="#" class="btn btn-success btn-sm btn-icon-split mb-4">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-check"></i>
                                             </span>
                                             <span class="text">Aktif</span>
                                         </a>
                                         <?php
                                                } else if ($data['status_integer'] == 0) {
                                                ?>
                                         <a href="#" class="btn btn-secondary btn-sm btn-icon-split mb-4">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-check"></i>
                                             </span>
                                             <span class="text">NonAktif</span>
                                         </a>
                                         <?php
                                                }
                                                ?>
                                     </td>
                                     <td><?= $data['nama_integer']; ?></td>
                                     <td><img src="<?= base_url() ?>assets/upload/Folder_integer_website/foto/<?= $data['logo_integer']; ?>"
                                             alt="" class="lazyload"
                                             data-src="<?= base_url() ?>assets/upload/Folder_integer_website/foto/<?= $data['logo_integer']; ?>"
                                             width="150px" style="background-color: #eaeaea;"></td>
                                     <td><a href="<?= base_url() ?>assets/upload/Folder_integer_website/video/<?= $data['video_integer']; ?>"
                                             class="btn btn-primary btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-eye"></i>
                                             </span>
                                             <span class="text">Lihat</span>
                                         </a>
                                     </td>
                                     <td><a href="<?= base_url() ?>integer/download_file_informasi_integer/<?= $data['panduan_integer'] ?>/file_informasi"
                                             class="btn btn-info btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-download"></i>
                                             </span>
                                             <span class="text">Unduh</span>
                                         </a>
                                     </td>
                                     <td><?= $data['tema_integer']; ?></td>
                                     <td><?= $data['deskripsi_integer']; ?></td>
                                     <td><?= $data['create_by']; ?></td>
                                     <td><?= $data['create_at']; ?></td>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <td>
                                         <a href="<?= base_url() ?>integer/hapus_data_integer/<?= $data['id_integer']; ?>"
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
         <!-- Sponsor -->
         <?php if (!empty($active_integer)) { ?>
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#sponsor" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="sponsor">
                 <h6 class="m-0 font-weight-bold text-primary">Data Sponsor Integer</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="sponsor" data-parent="#ManajemenInteger">
                 <div class="card-body">
                     <a href="<?= base_url() ?>integer/tambah_sponsor"
                         class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableSponsor" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Nama Sponsor</th>
                                     <th>Deskripsi Sponsor</th>
                                     <th>Logo Sponsor</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($sponsor as $data) : ?>
                                 <tr>
                                     <td><?= $data['nama_sponsor_integer']; ?></td>
                                     <td><?= $data['deskripsi_sponsor_integer']; ?></td>
                                     <td style="text-align: center;"> <img
                                             src="<?= base_url() ?>assets/upload/Folder_integer_website/sponsor/<?= $data['foto_sponsor_integer']; ?>"
                                             alt="" width="50px" class="lazyload"
                                             data-src="<?= base_url() ?>assets/upload/Folder_integer_website/sponsor/<?= $data['foto_sponsor_integer']; ?>">
                                     </td>
                                     <td><?= $data['create_by']; ?></td>
                                     <td><?= $data['create_at']; ?></td>
                                     <td> <?php if ($group[0]['group_id'] == "1" || $group[0]['group_id'] == "2") { ?>
                                         <a href="<?= base_url() ?>integer/hapus_data_sponsor_integer/<?= $data['id_sponsor_integer']; ?>"
                                             class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
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
         <!-- Jadwal Kegiatan -->
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#jadwal" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="jadwal">
                 <h6 class="m-0 font-weight-bold text-primary">Jadwal Acara</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="jadwal" data-parent="#ManajemenInteger">
                 <div class="card-body">
                     <!-- Hari -->
                     <h6 class="m-0 font-weight-bold text-primary mb-4">Data Hari Pelaksanaan</h6>
                     <a href="<?= base_url() ?>integer/tambah_tanggal"
                         class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableHari" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Nama Hari</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <th>Fitur</th>
                                     <?php } ?>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($hari as $data) : ?>
                                 <tr>
                                     <td>
                                         <?php
                                                    $daftar_hari = array(
                                                        'Sunday' => 'Minggu',
                                                        'Monday' => 'Senin',
                                                        'Tuesday' => 'Selasa',
                                                        'Wednesday' => 'Rabu',
                                                        'Thursday' => 'Kamis',
                                                        'Friday' => 'Jumat',
                                                        'Saturday' => 'Sabtu'
                                                    );
                                                    $data_tanggal =  $data['nama_hari_integer'];
                                                    $hari = date('l', strtotime($data_tanggal));
                                                    $tanggal = date('d F Y', strtotime($data_tanggal));


                                                    echo $daftar_hari[$hari] . ", " . $tanggal;
                                                    ?>
                                     </td>
                                     <td><?= $data['create_by']; ?></td>
                                     <td><?= $data['create_at']; ?></td>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <td>
                                         <a href="<?= base_url() ?>integer/hapus_data_hari_integer/<?= $data['id_hari_integer']; ?>"
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
                     <hr>
                     <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan Perhari</h6>
                     <!-- Kegiatan Perhari -->
                     <a href="<?= base_url() ?>integer/tambah_kegiatan_perhari"
                         class="btn btn-primary btn-sm btn-icon-split mb-4 mt-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableJadwalHari" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Nama Hari</th>
                                     <th>Nama Kegiatan</th>
                                     <th>Waktu</th>
                                     <th>Tempat Pelaksanaan</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($detail_hari as $data) : ?>
                                 <tr>
                                     <td>
                                         <?php
                                                    $daftar_hari = array(
                                                        'Sunday' => 'Minggu',
                                                        'Monday' => 'Senin',
                                                        'Tuesday' => 'Selasa',
                                                        'Wednesday' => 'Rabu',
                                                        'Thursday' => 'Kamis',
                                                        'Friday' => 'Jumat',
                                                        'Saturday' => 'Sabtu'
                                                    );
                                                    $data_tanggal =  $data['nama_hari_integer'];
                                                    $hari = date('l', strtotime($data_tanggal));
                                                    $tanggal = date('d F Y', strtotime($data_tanggal));


                                                    echo $daftar_hari[$hari] . ", " . $tanggal;
                                                    ?>
                                     </td>
                                     <td><?= $data['nama_detail_hari_integer']; ?></td>
                                     <td><?= $data['waktu_mulai']; ?> -
                                         <?= $data['waktu_akhir']; ?> WITA</td>
                                     <td><?= $data['tempat_detail_hari_integer']; ?></td>
                                     <td><?= $data['create_by']; ?></td>
                                     <td><?= $data['create_at']; ?></td>
                                     <td> <?php if ($group[0]['group_id'] == "1" || $group[0]['group_id'] == "2") { ?>
                                         <a href="<?= base_url() ?>integer/hapus_data_detail_hari_integer/<?= $data['id_detail_hari_integer']; ?>"
                                             class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
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
         <?php } ?>
     </div>
 </div>