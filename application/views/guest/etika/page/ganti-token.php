 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Begin Page Content -->
     <div class="container-fluid">
         <!-- Page Heading -->
         <h1 class="h3 mb-2 text-gray-800">Ganti Token</h1>
         <p class="mb-4">Untuk mengamankan Token Anda, silahkan lakukan pergantian Token</p>
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="kepengurusan">
                 <h6 class="m-0 font-weight-bold text-primary">Form Ganti Token</h6>
             </a>
             <div class="collapse show" id="kepengurusan">
                 <div class="card-body">
                     <div class="col-lg-12 row col-md-8 text-center justify-content-center">
                         <div class="card col-lg-6 border-left-primary shadow h-100 py-2">
                             <div class="card-body">
                                 <form class="user" action="auth/change_password" method="post">
                                     <div class="form-group">
                                         <h5><?= $pemilih[0]['username'] ?></h5>
                                         <div id="qrcode" class="mb-3 mt-3"></div>
                                         <h4><?= $pemilih[0]['token'] ?></h4>
                                         <p>Valid Until : <?= $pemilih[0]['token_valid_until'] ?> WITA</p>
                                     </div>
                                     <button type="button" data-toggle="modal" data-target="#ganti-token"
                                         class="btn btn-primary btn-user btn-block">Request
                                         Token Baru</button>
                                     <button type="button" class="btn btn-info btn-user btn-block" data-toggle="modal"
                                         data-target="#send-email">Kirim Token Ke
                                         Email</button>
                                 </form>
                                 <script type="text/javascript">
                                 $(document).ready(function() {
                                     //your code here
                                     $('#qrcode').qrcode({
                                         text: "<?= $pemilih[0]['token'] ?>"
                                     });
                                 });
                                 </script>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!--====== Modal Request Token Area Start ======-->
 <div class="modal fade" id="ganti-token" tabindex="-1" role="dialog" aria-labelledby="tokenModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="tokenModalLabel">Verifikasi Ganti Token</h4>
             </div>
             <div class="modal-body">
                 <form action="" method="POST">
                     <div class="form-group">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Prodi Mahasiswa</div>

                             <select name="prodi" id="prodi" required class="form-control form-control-select">
                                 <option value="">Pilih Prodi</option>
                                 <option value="Sistem Informasi">Sistem Informasi</option>
                                 <option value="Manajemen Informatika">Manajemen Informatika</option>
                                 <option value="Pendidikan Teknik Informatika">Pendidikan Teknik Informatika</option>
                                 <option value="Ilmu Komputer">Ilmu Komputer</option>
                             </select>
                         </div>
                         <div class="col mr-2 mt-4">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Semester</div>

                             <input type="number" class="form-control form-control-user" id="semester"
                                 aria-describedby="semester" min="1" max="16" placeholder="Masukkan Semester Anda"
                                 name="semester" required value="<?= set_value('semester') ?>">
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary" name="submit" value="Submit">Request
                             Token</button>
                     </div>
                 </form>
             </div>

         </div>
     </div>
 </div>
 <!--====== Modal Request Token Area End ======-->


 <!--====== Modal Send Email Area Start ======-->
 <div class="modal fade" id="send-email" tabindex="-1" role="dialog" aria-labelledby="emailModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="emailModalLabel">Kirim Salinan Token</h4>
             </div>
             <div class="modal-body">
                 <form action="" method="POST">
                     <div class="form-group">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Email</div>
                             <input type="email" class="form-control form-control-user" id="email"
                                 aria-describedby="email" placeholder="Masukkan email Anda" name="email" required
                                 value="<?= set_value('email') ?>">
                         </div>
                         <div class="col mr-2 mt-4">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Konfirmasi Email</div>
                             <input type="email" class="form-control form-control-user" id="konf-email"
                                 aria-describedby="konf-email" placeholder="Masukkan email Anda" name="konf-email"
                                 required value="<?= set_value('konf-email') ?>">
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary" name="submit-email" value="Submit-email">Kirim
                             Salinan Token</button>
                     </div>
                 </form>
             </div>

         </div>
     </div>
 </div>
 <!--====== Modal Send Email Area End ======-->