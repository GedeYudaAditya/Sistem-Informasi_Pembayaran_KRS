 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">List Mahasiswa Sudah Bayar Iuran HMJ</h1>
     <p class="mb-4">Berikut merupakan beberapa daftar mahasiswa yang sudah membayar iuran HMJ</p>
     <!-- Kepengurusan -->
     <!-- This is the insert flash message -->
     <div class="accordion" id="ManajemenWebsite">
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#mahasiswa" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="mahasiswa">
                 <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse show" id="mahasiswa">
                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableListMahasiswa" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>NIM</th>
                                     <th>Nama Mahasiswa</th>
                                     <th>Semester</th>
                                     <th>Prodi</th>
                                     <!-- <th>Bukti</th> -->
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $this->load->helper('Krs_helper');
                                    ?>
                                 <?php foreach ($mahasiswa as $data) : ?>
                                     <tr>
                                         <td><?= $data->nim ?></td>
                                         <td><?= $data->nama_mhs ?></td>
                                         <td><?= getSemesterFromAngkatan($data->angkatan) ?></td>
                                         <td><?= $data->prodi ?></td>
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
