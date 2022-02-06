 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
     <p class="mb-4">Untuk mengupload inventaris baik itu barang berupa ATK, barang lainnya, silahkan pilih tombol
         tambah data. Untuk menghapus silahkan pilih tombol delete. Data paling terbaru ada dipaling awal</p>

     <div class="row">

         <!-- Optional Jika ingin menambahkan -->
         <div class="col-xl-4 col-md-6 mb-4">
             <div class="card border-left-primary shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kategori Inventaris</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800">10 Kategori</div> <!-- Jumlah Kategori Inventaris -->
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-boxes fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Optional Jika ingin menambahkan -->
         <div class="col-xl-4 col-md-6 mb-4">
             <div class="card border-left-success shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ketersediaan Inventaris</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800">100 Barang</div> <!-- Jumlah Total Barang -->
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-box-open  fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Optional Jika ingin menambahkan -->
         <div class="col-xl-4 col-md-6 mb-4">
             <div class="card border-left-info shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dicuri :(</div>
                             <div class="row no-gutters align-items-center">
                                 <div class="col-auto">
                                     <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10 Barang</div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-people-carry fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- inventaris -->

     <div class="card shadow mb-4">
         <!-- Card Header - Accordion -->
         <a href="#inventaris" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="inventaris">
             <h6 class="m-0 font-weight-bold text-primary">Data Kepengurusan Inventaris HMJ TI</h6>
         </a>
         <!-- Card Content - Collapse -->
         <div class="collapse show" id="inventaris">
             <div class="card-body">
                 <a href="<?= base_url() ?>inventaris/tambah_kepengurusan" class="btn btn-primary btn-sm btn-icon-split mb-4">
                     <span class="icon text-white-50">
                         <i class="fas fa-flag"></i>
                     </span>
                     <span class="text">Tambah Data</span>
                 </a>
                 <div class="table-responsive">
                     <table class="table table-bordered" id="tableInformasi" width="100%" cellspacing="0">
                         <thead>
                             <tr>
                                 <!-- <th>Ditambahakan Pada</th> -->
                                 <th>Nama Kepengurusan</th>
                                 <th class="text-center">Deskripsi</th>
                                 <!-- <th>Ditambahkan Oleh</th> -->
                                 <th class="text-center">Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <!-- foreach -->
                             <?php
                                foreach ($kepengurusan as $item) :
                                ?>
                                 <tr>
                                     <td><?= $item['namaKepengurusan'] ?></td> <!-- Kategori Inventaris -->
                                     <td class="text-center"><?= $item['deskripsi'] ?></td> <!-- Nama Kepengurusan -->
                                     <td class="text-center">
                                         <!-- Silakan Backend Memberikan Pengkondisian -->
                                         <!-- Kodisi Start -->
                                         <a href="<?= base_url() ?>inventaris/edit_kepengurusan" class="btn btn-warning btn-sm btn-icon-split">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-edit"></i>
                                             </span>
                                             <span class="text">Update</span>
                                         </a>
                                         <a href="" class="btn btn-danger btn-sm btn-icon-split tombol-hapus">
                                             <span class="icon text-white-50">
                                                 <i class="fas fa-trash"></i>
                                             </span>
                                             <span class="text">Delete</span>
                                         </a>
                                         <!-- Kodisi Stop -->
                                     </td>
                                 </tr>
                             <?php
                                endforeach;
                                ?>
                             <!-- endforeach -->
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>