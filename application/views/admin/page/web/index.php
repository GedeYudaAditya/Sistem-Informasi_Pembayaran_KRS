 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Manajemen Berkas HMJ TI </h1>
     <p class="mb-4">Untuk mengupload masing-masing berkas berdasarkan kategori dan kepengurusan HMJ, Pastikan bagian
         kepengurusan HMJ dan Kategori Berkas telah terisi</p>
     <!-- Kepengurusan -->
     <div class="accordion" id="ManajemenBerkas">



         <!-- Kategori Berkas -->
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#kategori_berkas" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="kategori_berkas">
                 <h6 class="m-0 font-weight-bold text-primary">
                     <?php if (!empty($namaKepengurusan)) { ?>
                     Data Kegiatan <?= $namaKepengurusan[0]['nama_hmj']; ?>
                     <?php } else { ?>
                     Oppss.. Data Tidak Ada Silahkan Pilih Kepengurusan Aktif Terlebih Dahulu
                     <?php } ?>
                 </h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse show" id="kategori_berkas" data-parent="#ManajemenBerkas">
                 <div class="card-body">
                     <a href="<?= base_url() ?>web/tambah_kategori_berkas"
                         class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableKategoriBerkas" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Nama Kegiatan</th>
                                     <th>Deskripsi</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php if (!empty($kategoriBerkas)) { ?>
                                 <?php foreach ($kategoriBerkas as $kategoriBerkas) : ?>
                                 <tr>
                                     <td><?= $kategoriBerkas['nama_kegiatan'] ?></td>
                                     <td><?= $kategoriBerkas['deskripsi_kegiatan'] ?></td>
                                     <td><?= $kategoriBerkas['create_by'] ?></td>
                                     <td><?= $kategoriBerkas['create_at'] ?></td>
                                     <td> <?php if ($group[0]['group_id'] == "1") { ?>
                                         <a href="<?= base_url() ?>web/hapus_kategori_berkas/<?= $kategoriBerkas['id_kegiatan_hmj']; ?>"
                                             class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
                                         </a>
                                         <?php } else { ?>
                                         <a href="<?= base_url() ?>web/edit_kategori_berkas/<?= $kategoriBerkas['id_kegiatan_hmj']; ?>"
                                             class="btn btn-warning btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-edit"></i>
                                             </span>
                                             <span class="text">Edit</span>
                                         </a>
                                         <?php } ?>
                                     </td>
                                 </tr>
                                 <?php endforeach; ?>
                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Detail Kategori Berkas -->
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#detail_berkas" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="detail_berkas">
                 <h6 class="m-0 font-weight-bold text-primary">
                     <?php if (!empty($namaKepengurusan)) { ?>
                     Data File Kegiatan <?= $namaKepengurusan[0]['nama_hmj']; ?>
                     <?php } else { ?>
                     Oppss.. Data Tidak Ada Silahkan Pilih Kepengurusan Aktif Terlebih Dahulu
                     <?php } ?></h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="detail_berkas" data-parent="#ManajemenBerkas">
                 <div class="card-body">
                     <a href="<?= base_url() ?>web/tambah_detail_berkas"
                         class="btn btn-primary btn-sm btn-icon-split mb-4">
                         <span class="icon text-white-50">
                             <i class="fas fa-flag"></i>
                         </span>
                         <span class="text">Tambah Data</span>
                     </a>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableDetailBerkas" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Nama Kegiatan</th>
                                     <th>Nama File Kegiatan</th>
                                     <th>Deskripsi</th>
                                     <th>Dibuat Oleh</th>
                                     <th>Dibuat Tanggal</th>
                                     <th>Informasi Berkas</th>
                                     <th>Update</th>
                                     <th>Delete</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php if (!empty($berkass)) { ?>
                                 <?php foreach ($berkass as $berkas) : ?>
                                 <?php
                                            $namaKegiatan = $this->All_model->getOnlyActiveKategoriBerkasForBerkas()
                                            ?>
                                 <tr>
                                     <td><?= $berkas['nama_kegiatan'] ?></td>
                                     <td><?= $berkas['nama_repositori'] ?></td>
                                     <td><?= $berkas['deskripsi_repositori'] ?></td>
                                     <td><?= $berkas['create_by'] ?></td>
                                     <td><?= $berkas['create_at'] ?></td>
                                     <td>
                                         <a href="<?= base_url() ?>web/flip_me/<?= $namaKepengurusan[0]['nama_hmj'] ?>/<?= $berkas['kode_repositori'] ?>/kepengurusan"
                                             target="_blank" class="btn btn-primary btn-sm  btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-eye"></i>
                                             </span>
                                             <span class="text">Lihat</span>
                                         </a>
                                         <a href="<?= base_url() ?>web/download_file/<?= $berkas['kode_repositori'] ?>/kepengurusan"
                                             class="btn btn-success btn-sm mt-2 btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-download"></i>
                                             </span>
                                             <span class="text">Unduh</span>
                                         </a>
                                     </td>
                                     <td> <a href=" <?= base_url() ?>web/edit_detail_berkas/<?= $berkas['id_detail_kegiatan'] ?>"
                                             class="btn btn-warning btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-edit"></i>
                                             </span>
                                             <span class="text">Edit</span>
                                         </a>
                                     </td>
                                     <td> <a href="<?= base_url() ?>web/hapus_detail_berkas/<?= $berkas['id_detail_kegiatan']; ?>"
                                             class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
                                         </a>
                                     </td>
                                 </tr>
                                 <?php endforeach; ?>
                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </div>