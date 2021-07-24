 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Manajemen Informasi HMJ TI </h1>
     <p class="mb-4">Untuk mengupload informasi baik itu pengumuman, berita, dan karya tulis, silahkan pilih tombol
         tambah data. Untuk menghapus silahkan pilih tombol delete. Data paling terbaru ada dipaling awal</p>
     <!-- Kepengurusan -->

     <div class="card shadow mb-4">
         <!-- Card Header - Accordion -->
         <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
             aria-expanded="true" aria-controls="kepengurusan">
             <h6 class="m-0 font-weight-bold text-primary">Data Informasi Website</h6>
         </a>
         <!-- Card Content - Collapse -->
         <div class="collapse show" id="kepengurusan">
             <div class="card-body">
                 <a href="<?= base_url() ?>web/tambah_data_informasi"
                     class="btn btn-primary btn-sm btn-icon-split mb-4">
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
                                 <th>Kategori Informasi</th>
                                 <th>Nama Kepengurusan</th>
                                 <th>Tampilan Informasi</th>
                                 <th>File Informasi</th>
                                 <th>Dibuat Oleh</th>
                                 <th>Fitur</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php foreach ($informasi as $data) : ?>
                             <tr>
                                 <td><?= $data['create_at'] ?> Wita</td>
                                 <td><?= $data['kategori_informasi'] ?></td>
                                 <td><?= $data['nama_kepengurusan'] ?></td>
                                 <td>
                                     <?php if($data['kategori_informasi'] == "Karya Tulis" || $data['kategori_informasi'] == "Berita"): ?>
                                     <a href="<?= base_url() ?>web/detail_berita/<?= $data['id_informasi']; ?>"
                                         class="btn btn-primary btn-sm btn-icon-split">
                                         <span class="icon text-white-50">
                                             <i class="fas fa-eye"></i>
                                         </span>
                                         <span class="text">Lihat</span>
                                     </a>
                                     <?php else: ?>
                                     <a href="<?= base_url() ?>web/detail_pengumuman/<?= $data['id_informasi']; ?>"
                                         class="btn btn-primary btn-sm btn-icon-split">
                                         <span class="icon text-white-50">
                                             <i class="fas fa-eye"></i>
                                         </span>
                                         <span class="text">Lihat</span>
                                     </a>
                                     <?php endif; ?>
                                 </td>
                                 <td>
                                     <?php if ($data['file_informasi'] == null) { ?>
                                     <div class="p mb-0  text-gray-500">
                                         <i>Tidak Terdapat File</i>
                                     </div>
                                     <?php } else { ?>
                                     <a href="<?= base_url() ?>web/flip_me/berkas/<?= $data['file_informasi'] ?>/informasi"
                                         target="_blank" class="btn btn-primary btn-sm  btn-icon-split">
                                         <span class="icon text-white-50">
                                             <i class="fas fa-eye"></i>
                                         </span>
                                         <span class="text">Lihat</span>
                                     </a>
                                     <a href="<?= base_url() ?>web/download_file/<?= $data['file_informasi'] ?>/informasi"
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
                                     <a href="<?= base_url() ?>web/hapus_data_informasi/<?= $data['id_informasi']; ?>"
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