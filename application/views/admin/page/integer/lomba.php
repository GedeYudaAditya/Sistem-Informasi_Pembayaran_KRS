 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Manajemen Lomba Integer</h1>
     <p class="mb-4">Untuk mengupload masing-masing link lomba, silahkan membuat form lomba dengan bantuan Google Docs.
     </p>
     <!-- Kepengurusan -->
     <div class="accordion" id="ManajemenLomba">
         <!-- Jadwal Kegiatan -->
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#jadwal" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="jadwal">
                 <h6 class="m-0 font-weight-bold text-primary">Lomba Integer</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="jadwal" data-parent="#ManajemenLomba">
                 <div class="card-body">
                     <!-- Kategori Lomba -->
                     <h6 class="m-0 font-weight-bold text-primary mb-4">Data Kategori Lomba</h6>
                     <a href="<?= base_url() ?>integer/tambah_kategori_lomba"
                         class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableKategori" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Icon Kategori</th>
                                     <th>Nama Kategori Lomba</th>
                                     <th>Deskripsi Kategori</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <th>Fitur</th>
                                     <?php } ?>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($kategori_lomba as $data) : ?>
                                 <tr>
                                     <td style="text-align: center;"> <img
                                             src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_kategori/<?= $data['icon_kategori_lomba_integer']; ?>"
                                             alt="" width="50px" class="lazyload"
                                             data-src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_kategori/<?= $data['icon_kategori_lomba_integer']; ?>">
                                     </td>
                                     <td><?= $data['nama_kategori_lomba_integer']; ?></td>
                                     <td><?= $data['deskripsi_kategori_lomba_integer']; ?></td>
                                     <td><?= $data['create_by']; ?></td>
                                     <td><?= $data['create_at']; ?></td>
                                     <?php if ($group[0]['group_id'] == "1") { ?>
                                     <td>
                                         <a href="<?= base_url() ?>integer/hapus_data_kategori_lomba_integer/<?= $data['id_kategori_lomba_integer']; ?>"
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
                     <!-- Lomba -->
                     <hr>
                     <h6 class="m-0 font-weight-bold text-primary">Data Lomba</h6>
                     <a href="<?= base_url() ?>integer/tambah_lomba"
                         class="btn btn-primary btn-sm btn-icon-split mb-4 mt-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableLomba" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Nama Kategori Lomba</th>
                                     <th>Icon Lomba</th>
                                     <th>Nama Lomba</th>
                                     <th>Deskripsi Lomba</th>
                                     <th>Tgl Pendaftaran</th>
                                     <th>Link Pendaftaran</th>
                                     <th>Pengumpulan Proposal</th>
                                     <th>Tgl Pengumpulan</th>
                                     <th>Link Pengumpulan</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($lomba as $data) : ?>
                                 <tr>
                                     <td><?= $data['nama_kategori_lomba_integer']; ?></td>
                                     <td><img src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_lomba/<?= $data['icon_lomba_integer']; ?>"
                                             alt="" width="50px" class="lazyload"
                                             data-src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_lomba/<?= $data['icon_lomba_integer']; ?>">
                                     </td>
                                     <td><?= $data['nama_lomba_integer']; ?></td>
                                     <td><?= $data['deskripsi_lomba_integer']; ?></td>
                                     <td><?= date('d-m-Y', strtotime($data['waktu_mulai_pendaftaran'])) ?> -
                                         <?= date('d-m-Y', strtotime($data['waktu_akhir_pendaftaran'])) ?></td>
                                     <td><a href="<?= base_url() ?><?= $data['pendaftaran_lomba_integer']; ?>"
                                             class="btn btn-primary btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-eye"></i>
                                             </span>
                                             <span class="text">Link</span>
                                         </a></td>
                                     <td> <?php if ($data['pengumpulan_proposal'] == 1) { ?>
                                         <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-check"></i>
                                             </span>
                                             <span class="text">Perlu</span>
                                         </a>
                                         <?php } else { ?>
                                         <a href="#" class="btn btn-secondary btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-times"></i>
                                             </span>
                                             <span class="text">Tidak</span>
                                         </a>
                                         <?php } ?>
                                     </td>
                                     <?php if ($data['pengumpulan_proposal'] == 1) { ?>
                                     <td><?= date('d-m-Y', strtotime($data['waktu_awal_pengumpulan'])) ?> -
                                         <?= date('d-m-Y', strtotime($data['waktu_akhir_pengumpulan'])) ?></td>
                                     <td><a href="<?= base_url() ?><?= $data['pengumpulan_lomba_integer']; ?>"
                                             class="btn btn-primary btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-eye"></i>
                                             </span>
                                             <span class="text">Link</span>
                                         </a></td>
                                     <?php } else { ?>
                                     <td>
                                         <div class="p mb-0  text-gray-500">
                                             <i>Tidak Ada</i>
                                         </div>
                                     </td>
                                     <td>
                                         <div class="p mb-0  text-gray-500">
                                             <i>Tidak Ada</i>
                                         </div>
                                     </td>
                                     <?php } ?>
                                     <td><?= $data['create_by']; ?></td>
                                     <td><?= $data['create_at']; ?></td>
                                     <td> <?php if ($group[0]['group_id'] == "1" || $group[0]['group_id'] == "2") { ?>
                                         <a href="<?= base_url() ?>integer/edit_lomba/<?= $data['id_lomba_integer']; ?>"
                                             class="btn btn-warning btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-edit"></i>
                                             </span>
                                             <span class="text">Edit</span>
                                         </a>
                                         <a href="<?= base_url() ?>integer/hapus_data_lomba_integer/<?= $data['id_lomba_integer']; ?>"
                                             class="btn btn-danger mt-2 btn-sm btn-icon-split tombol-hapus">
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
             <a href="#peserta" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="peserta">
                 <h6 class="m-0 font-weight-bold text-primary">Data Berita Integer</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="peserta" data-parent="#ManajemenLomba">
                 <div class="card-body">
                     <!-- Hari -->
                     <a href="<?= base_url() ?>integer/tambah_informasi"
                         class="btn btn-primary btn-sm btn-icon-split mb-4 mt-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableInformasi" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Upload Pada</th>
                                     <th>Kategori</th>
                                     <th>Judul</th>
                                     <th>Tampilan Informasi</th>
                                     <th>File Informasi</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($berita as $data) : ?>
                                 <tr>
                                     <td><?= $data['create_at'] ?></td>
                                     <?php if ($data['kategori_berita_integer'] == 1) { ?>
                                     <td>Berita</td>
                                     <?php } else { ?>
                                     <td>Pengumuman</td>
                                     <?php } ?>
                                     <td><?= $data['nama_berita_integer'] ?></td>
                                     <td>
                                         <a href="<?= base_url() ?>integer/detail_kabar_integer/<?= $data['id_berita_integer'] ?>"
                                             class="btn btn-primary btn-sm btn-icon-split" target="_blank">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-eye"></i>
                                             </span>
                                             <span class="text">Link</span>
                                         </a>
                                     </td>
                                     <td>
                                         <?php if ($data['file_berita_integer'] == null) { ?>
                                         <div class="p mb-0  text-gray-500">
                                             <i>Tidak Terdapat File</i>
                                         </div>
                                         <?php } else { ?>
                                         <a href="<?= base_url() ?>web/flip_me/integer/<?= $data['file_berita_integer'] ?>/integer"
                                             target="_blank" class="btn btn-primary btn-sm  btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-eye"></i>
                                             </span>
                                             <span class="text">Lihat</span>
                                         </a><br>
                                         <a href="<?= base_url() ?>integer/download_file_informasi_integer/<?= $data['file_berita_integer'] ?>/pakekpengaman"
                                             class="btn btn-success btn-sm mt-2 btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-download"></i>
                                             </span>
                                             <span class="text">Unduh</span>
                                         </a>
                                         <?php } ?>
                                     </td>
                                     <td><?= $data['create_by'] ?></td>
                                     <td>
                                         <a href="<?= base_url() ?>integer/hapus_data_informasi/<?= $data['id_berita_integer'] ?>"
                                             class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
                                         </a>
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