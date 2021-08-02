<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay d-flex align-items-center" style="height: 100vh;">
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
                                <div class="form-group">
                                    <select name="tahun" id="tahun" class="form-control" required>
                                        <option value="" disabled selected hidden>Tahun Krs</option>
                                        <?php foreach ($tahun as $thn) : ?>
                                            <option value="<?= $thn['tahun']; ?>"><?= $thn['tahun']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="semester" id="semester" class="form-control" required>
                                        <option value="" disabled selected hidden>Semester</option>
                                        <option value="Ganjil">Ganjil</option>
                                        <option value="Genap">Genap</option>
                                    </select>
                                </div>
                                <div class="form-group" onkeyup="checkProdi()">
                                    <input type="text" id="nim" pattern="[0-9]*" minlength="10" maxlength="10" class="form-control" name="nim" placeholder="Nim Mahasiswa" required="required">
                                </div>
                                <div class="form-group">
                                    <select name="prodi" id="prodi" class="form-control" required>
                                        <option value="" disabled selected hidden>Prodi Mahasiswa</option>
                                        <option value="05">Pendidikan Teknik Informatika</option>
                                        <option value="02">Manajemen Informatika</option>
                                        <option value="09">Sistem Informasi</option>
                                        <option value="10">Ilmu Komputer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-bordered w-100 mt-3 mt-sm-4" name="submit" type="submit" id="submit">
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