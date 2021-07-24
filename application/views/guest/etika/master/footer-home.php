   <!--====== Footer Area Start ======-->
   <footer class="footer-area footer-fixed">
       <!-- Footer Top -->
       <div class="footer-top ptb_100">
           <div class="container">
               <div class="row">
                   <div class="col-12 col-sm-6 col-lg-3">
                       <!-- Footer Items -->
                       <div class="footer-items">
                           <!-- Logo -->
                           <div class="navbar-brand">
                               <img class="logo" src="<?= base_url() ?>assets/img/logo/UNDIKSHA.png" alt="Logo HMJ TI"
                                   style="height: 4.8rem;" />
                               <img class="logo" src="<?= base_url() ?>assets/img/logo/HMJ.png" alt="Logo HMJ TI"
                                   style="height: 4.8rem;" />
                           </div>
                           <p class="mt-2 mb-3">
                               Jl. Udayana No.11, Banjar Tegal, Singaraja, Kabupaten Buleleng, Bali
                           </p>
                           <!-- Social Icons -->
                           <div class="social-icons d-flex">
                               <a class="facebook"
                                   href="<?= base_url() ?>https://web.facebook.com/hmj.ti.undiksha/?_rdc=1&_rdr"
                                   target="_blank">
                                   <i class="fab fa-facebook-f"></i>
                                   <i class="fab fa-facebook-f"></i>
                               </a>
                               <a class="twitter" href="<?= base_url() ?>https://www.instagram.com/hmj_ti.undiksha/"
                                   target="_blank">
                                   <i class="fab fa-instagram"></i>
                                   <i class="fab fa-instagram"></i>
                               </a>
                               <a class="google-plus"
                                   href="<?= base_url() ?>https://www.youtube.com/channel/UCjvKksTEifUWNU_rfCHubDg?app=desktop"
                                   target="_blank">
                                   <i class="fab fa-youtube"></i>
                                   <i class="fab fa-youtube"></i>
                               </a>
                               <a class="vine" href="<?= base_url() ?>mailto:hmjtiundiksha@gmail.com" target="_blank">
                                   <i class="far fa-envelope"></i>
                                   <i class="far fa-envelope"></i>
                               </a>
                           </div>
                       </div>
                   </div>
                   <div class="col-12 col-sm-6 col-lg-3">
                       <!-- Footer Items -->
                       <div class="footer-items">
                           <!-- Footer Title -->
                           <h3 class="footer-title mb-2">Pages</h3>
                           <ul>
                               <li class="py-2"><a class="scroll" href="<?= base_url() ?>#features">Keunggulan
                                       ETIKA</a></li>
                               <li class="py-2"><a class="scroll" href="<?= base_url() ?>#ketentuan">Ketentuan dan
                                       Syarat</a></li>
                               <li class="py-2"><a class="scroll" href="<?= base_url() ?>#alur">Alur Kegiatan</a>
                               </li>
                               <li class="py-2"><a class="scroll" href="<?= base_url() ?>#pricing">Jadwal
                                       Kegiatan</a></li>
                               <li class="py-2"><a class="scroll" href="<?= base_url() ?>#contact">Hubungi Kami</a>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-12 col-sm-6 col-lg-3">
                       <!-- Footer Items -->
                       <div class="footer-items">
                           <!-- Footer Title -->
                           <h3 class="footer-title mb-2">Konten</h3>
                           <ul>
                               <li class="py-2"><a href="<?= base_url() ?>web/home">Beranda</a></li>
                               <li class="py-2"><a href="<?= base_url() ?>web/pengumuman">Daftar Kegiatan</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-12 col-sm-6 col-lg-3">
                       <!-- Footer Items -->
                       <div class="footer-items">
                           <!-- Footer Title -->
                           <h3 class="footer-title mb-2">Layanan</h3>
                           <ul>
                               <li class="py-2"><a href="<?= base_url() ?>">Halaman Landing</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Footer Bottom -->
       <div class="footer-bottom">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <!-- Copyright Area -->
                       <div
                           class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                           <!-- Copyright Left -->
                           <div class="copyright-left">
                               <p>
                                   &copy; Copyrights <?= date('Y') ?>
                                   HMJ TI Undiksha. All rights reserved.
                               </p>
                           </div>
                           <!-- Copyright Right -->
                           <div class="copyright-right">
                               <p>
                                   Made with <i class="fas fa-heart"></i> By
                                   <a href="<?= base_url() ?>#" class="text-primary" data-toggle="modal"
                                       data-target="#devModal">Ganatech</a>
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <!--====== Footer Area End ======-->


   <!--====== Modal Developer Area Start ======-->
   <div class="modal fade" id="devModal" tabindex="-1" role="dialog" aria-labelledby="devModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" id="devModalLabel">Team Developer</h4>
               </div>
               <div class="modal-body">
                   <h5>Coordinator</h5>
                   <p>Irfan Walhidayah</p>
                   <p>Putu Zasya Eka Satya Nugraha</p>
                   <hr>
                   <h5>Front End</h5>
                   <p>Komang Jepri Kusuma Jaya</p>
                   <hr>
                   <h5>Back End</h5>
                   <p>I Gede Riyan Ardi Darmawan</p>
                   <p>Ida Bagus Made Yudha Wirawan</p>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
               </div>
           </div>
       </div>
   </div>
   <!--====== Modal Developer Area End ======-->

   </div>


   <!-- ***** All jQuery Plugins ***** -->

   <!-- jQuery(necessary for all JavaScript plugins) -->
   <script src="<?= base_url() ?>assets/js/jquery/jquery-3.3.1.min.js"></script>
   <!-- Sweetalert -->
   <script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>
   <!-- Bootstrap js -->
   <script src="<?= base_url() ?>assets/js/bootstrap/popper.min.js"></script>
   <script src="<?= base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>

   <!-- Plugins js -->
   <script src="<?= base_url() ?>assets/js/plugins/plugins.min.js"></script>

   <!-- Input Costume -->
   <script src="<?= base_url() ?>assets/js/inputCostumJs.js"></script>
   <!-- Active js -->
   <script src="<?= base_url() ?>assets/js/active.js"></script>
   <!-- Lazyload -->
   <script src="<?= base_url() ?>assets/js/plugins/lazysizes.min.js" async=""></script>
   </body>


   </html>