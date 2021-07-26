<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-lg-7">
                <div class="welcome-intro">
                    <h1 class="text-white">KRS Checker HMJ-TI</h1>
                    <p class="text-white my-4 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit omnis velit ea vel hic alias inventore eos animi, culpa tempora beatae similique laboriosam minus placeat sapiente voluptatum, modi sint natus corrupti. Voluptatibus enim sapiente debitis culpa fugiat cumque dignissimos nobis sint minima odit incidunt est dolores officia, aliquam nam beatae?</p>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-5">
                <!-- Contact Box -->
                <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                    <!-- Contact Form -->
                    <form id="contact-form" method="POST" action="">
                        <div class="contact-top">
                            <h3 class="contact-title">Cek Pembayaran KRS</h3>
                            <h5 class="text-secondary fw-3 py-3">Silakan masukkan informasi berikut untuk mengecek pembayaran krs mahasiswa</h5>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group" onkeyup="checkProdi()">
                                    <input type="text" id="nim" pattern="[0-9]*" minlength="10" maxlength="10" class="form-control" name="nim" placeholder="Nim Mahasiswa" required="required">
                                </div>
                                <div class="form-group">
                                    <select name="prodi" id="prodi" class="form-control" required>
                                        <option value="">Prodi Mahasiswa</option>
                                        <option value="05">Pendidikan Teknik Informatika</option>
                                        <option value="02">Manajemen Informatika</option>
                                        <option value="09">Sistem Informasi</option>
                                        <option value="10">Ilmu Komputer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-bordered w-100 mt-3 mt-sm-4" type="button" id="modal-1">
                                    Cari Mahasiswa
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="shape-bottom">
        <img class="w-100 h-50" src="<?= base_url(); ?>assets/img/wave.svg" alt="">
    </div>
</section>
<!-- ***** Welcome Area End ***** -->


<!-- ***** Modal Start ***** -->
<script>
    document.querySelector("#modal-1").addEventListener('click', function() {
        Swal.fire(
            'Putu Suardana\n2015101008',
            'Telah membayar iuran KRS<br>" Terima Kasih "',
            'success'
        )
    });
</script>
<!-- ***** Modal End ***** -->

<!--====== Contact Area Start ======-->
<section id="contact" class="contact-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="text-capitalize">Hubungi Kami</h2>
                    <p class="d-none d-sm-block mt-4">Anda Dapat Menghubungi kami melalui email jika Anda
                        mengalami kendala pada saat menggunakan KRS Cheker HMJ TI Undiksha
                    </p>
                    <p class="d-block d-sm-none mt-4">Anda Dapat Menghubungi kami melalui email jika Anda
                        mengalami kendala pada saat menggunakan KRS Cheker HMJ TI Undiksha
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-12 col-md-5">
                <!-- Contact Us -->
                <div class="contact-us">
                    <img src="<?= base_url() ?>assets/img/maskot/megang-laptop.png" class="lazyload" id="megang_laptop" data-src="<?= base_url() ?>assets/img/maskot/megang-laptop.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 pt-4 pt-md-0">
                <!-- Contact Box -->
                <div class="contact-box text-center">
                    <!-- Contact Form -->
                    <form id="contact-form" method="POST" action="">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <?php echo form_error('name'); ?>
                                    <input type="text" class="form-control" value="<?php echo set_value('name'); ?>" name=" name" placeholder="Nama Kamu" required="required">
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('email'); ?>
                                    <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" name="email" placeholder="Email Kamu" required="required">
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('subject'); ?>
                                    <input type="text" class="form-control" value="<?php echo set_value('subject'); ?>" name="subject" placeholder="Subject" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <?php echo form_error('message'); ?>
                                    <textarea class="form-control" name="message" placeholder="Pesan" required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="send" value="Send" class="btn btn-lg btn-block mt-3"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Kirim
                                    Email</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Contact Area End ======-->

<!--====== Height Emulator Area Start ======-->
<div class="height-emulator d-none d-lg-block"></div>
<!--====== Height Emulator Area End ======-->