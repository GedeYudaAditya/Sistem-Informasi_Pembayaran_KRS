<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-lg-7">
                <div class="welcome-intro">
                    <h1 class="text-white">KRS Checker HMJ-TI</h1>
                    <p class="text-white my-4 text-justify">KRS Checker merupakan suatu layanan sistem infomasi dari HMJ TI dalam memudahkan mahasiswa atau dosen pada ruang lingkup Jurusan Teknik Informatika untuk mencari data terkait pembayaran KRS disetiap semester. <br><br><i>Catatan : Sistem ini masih dalam pengembangan, jika terdapat hal yang tidak lazim atau menurut Anda data yang dikeluarkan sistem salah, mohon untuk menghubungi <b><u><a href="https://www.instagram.com/hmj_ti.undiksha/" style="color : white;">pihak kami</a></u></b>.</i></p>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-5">
                <!-- Contact Box -->
                <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                    <!-- Contact Form -->
                    <?php echo form_open("auth/login"); ?>
                    <div class="contact-top">
                        <h3 class="contact-title">Cek Pembayaran KRS</h3>
                        <h5 class="text-secondary fw-3 py-3">Silakan masukkan informasi berikut untuk mengecek pembayaran krs mahasiswa</h5>
                        <?php if ($message) {
                            echo '<div id="infoMessage" class="alert-danger alert" role="alert">' .
                                $message
                                . '</div>';
                        };
                        ?>
                    </div>
                    <?php if ($this->session->flashdata('gagal')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Anda <strong>Gagal</strong> <?= $this->session->flashdata('gagal'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                                    </div>
                                    <?php echo form_input($identity, '', 'class="form-control" placeholder="Email"'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                    </div>
                                    <?php echo form_input($password, '', ' class="form-control" placeholder="Password"'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3" style="text-align: left;">
                            <p>
                                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
                                <?php echo 'Ingat Saya'; ?>
                            </p>
                        </div>
                        <div class="col-12">
                            <?php echo form_submit('submit', "Masuk", 'class="btn btn-bordered w-100 mt-3 mt-sm-4"'); ?>
                        </div>
                        <div class="col-12">
                            <span class="d-block pt-2 mt-4 border-top"><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></span>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
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
<?php if ($this->input->post('submit') !== NULL) : ?>
    <?php if (!empty($mhs)) : ?>
        <?php if (!empty($dtMhs)) : ?>
            <?php $ada = false; ?>
            <?php foreach ($dtMhs as $m) : ?>
                <?php if ($m['tahun'] == $this->input->post('tahun') && $m['smtr'] == $this->input->post('semester')) : ?>
                    <?php if ($m['status'] == "Lunas") : ?>
                        <script>
                            setTimeout(function() {
                                Swal.fire(
                                    '<?= $mhs[0]['nama'] ?>\n<?= $mhs[0]['nim'] ?>',
                                    'Telah membayar iuran KRS Tahun <?= $this->input->post('tahun') ?> Semester <?= $this->input->post('semester') ?>',
                                    'success'
                                )
                            }, 100);
                        </script>
                        <?php $ada = true; ?>
                    <?php elseif ($m['status'] == "Belum Bayar") : ?>
                        <script>
                            setTimeout(function() {
                                Swal.fire(
                                    '<?= $mhs[0]['nama'] ?>\n<?= $mhs[0]['nim'] ?>',
                                    'Belum membayar iuran KRS Tahun <?= $this->input->post('tahun') ?> Semester <?= $this->input->post('semester') ?>',
                                    'warning'
                                )
                            }, 100);
                        </script>
                        <?php $ada = true; ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php if (!$ada) : ?>
                <script>
                    setTimeout(function() {
                        Swal.fire(
                            'Maaf :(',
                            'Mahasiswa sudah terdaftar dalam sistem, namun belum memiliki riwayat pembayaran KRS',
                            'error'
                        )
                    }, 100);
                </script>
            <?php endif; ?>
        <?php endif; ?>
    <?php else : ?>
        <script>
            setTimeout(function() {
                Swal.fire(
                    'Maaf :(',
                    'Mahasiswa belum terdaftar dalam sistem. Pastikan anda memasukkan NIM anda dengan benar!',
                    'error'
                )
            }, 100);
        </script>
    <?php endif; ?>
<?php endif; ?>
<!-- ***** Modal End ***** -->