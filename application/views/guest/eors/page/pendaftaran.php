<div class="main">
    <!-- ***** Header Start ***** -->
    <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
        <div class="container position-relative">
            <a class="navbar-brand" href="<?= base_url() ?>eors/home">
                <img class="navbar-brand-regular lazyload" src="<?= base_url() ?>assets/img/logo/NAV.png"
                    data-src="<?= base_url() ?>assets/img/logo/NAV.png" alt="brand-logo" />
                <img class="navbar-brand-sticky lazyload" data-src="<?= base_url() ?>assets/img/logo/NAV.png"
                    src="<?= base_url() ?>assets/img/logo/NAV.png" alt="sticky brand-logo" />
            </a>
        </div>
    </header>
    <!-- ***** Header End ***** -->

    <!-- ***** Breadcrumb Area Start ***** -->
    <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                        <h3 class="text-white">Pendaftaran Kegiatan <?= $kegiatan[0]['nama_kegiatan'] ?> </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section id="blog" class="section blog-area ptb_100">
        <div class="container">
            <div class="single-widget">
                <!-- Post Widget -->
                <div class="accordions widget post-widget" id="post-accordion">
                    <div class="single-accordion">
                        <h5>
                            <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse"
                                href="#accordion3">Ketentuan Kegiatan (Penting !!)
                            </a>
                        </h5>
                        <!-- Post Widget Content -->
                        <div id="accordion3" class="accordion-content widget-content collapse show p-3"
                            data-parent="#post-accordion">
                            <?= $kegiatan[0]['deskripsi'] ?>
                            <p style="text-align:justify">Adapun persyaratan agar dapat mengikuti
                                kegiatan ini adalah</p>
                            <button type="button" class="btn btn-primary mt-3 col-12" data-toggle="modal"
                                data-target="#staticBackdrop">
                                Persyaratan Pendaftaran Kegiatan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8 mb-5">
                    <div class="accordions widget post-widget" id="post-accordion">
                        <div class="single-accordion p-3">
                            <!-- Formnya -->
                            <?php if (date('Y-m-d H:i:s') >= $kegiatan[0]['tgl_mulai'] && date('Y-m-d H:i:s') <= $kegiatan[0]['tgl_akhir'] && $kegiatan[0]['penilaian'] == 0 && $kegiatan[0]['hasil_akhir'] == 0 && $kegiatan[0]['pengumuman'] == 0) { ?>

                            <h2 class="text-center mt-4">Formulir Pendaftaran</h2>
                            <h4 class="text-center mb-4">Sesuaikan Pengisian Formulir Dengan Persyaratan
                                Pendaftaran
                            </h4>
                            <hr>
                            <div class="alert alert-danger" role="alert" id="pesan" style="display: none;">
                                Gunakan Email Undiksha
                            </div>
                            <form action="" method="POST" id="form_user" enctype="multipart/form-data">
                                <!-- Foto -->
                                <?php if ($kegiatan[0]['upload_file'] == 1) { ?>
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control-file" accept="image/*" name="file_foto"
                                        id="file_foto" required>
                                    <small id="fotoHelp" class="form-text text-muted">Gunakan foto berjas atau formal
                                        dengan
                                        latar
                                        belakang
                                        biru, format *.png atau *.jpg maks 1 Mb</small>
                                </div>
                                <!-- Documents -->
                                <div class="form-group">
                                    <label for="foto">Dokumen Pendaftaran </label>
                                    <input type="file" class="form-control-file" accept=".pdf,.zip" name="file_dokumen"
                                        id="file_dokumen">
                                    <small id="fotoHelp" class="form-text text-muted">Silahkan di cek terkait dokumen
                                        yang
                                        dikumpul pada bagian persyaratan dan ketentuan, format *.pdf atau *.zip maks 15
                                        Mb</small>
                                </div>
                                <?php } ?>
                                <!-- NIM -->
                                <div class="form-group" onkeyup="checkProdi()">
                                    <label for="NIM">NIM</label>
                                    <input type="text" class="form-control" pattern="[0-9]*" minlength="10"
                                        maxlength="10" id="nim" name="nim" aria-describedby="NIMHelp" required>
                                </div>
                                <!-- Nama -->
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama_lengkap"
                                        aria-describedby="namaHelp" required>
                                </div>
                                <!-- Angkatan-->
                                <div class="form-group">
                                    <label for="pilihanUtama">Angkatan</label>
                                    <select class="form-control" id="angkatan" name="angkatan" required>
                                        <option value="">Masukkan Angkatan</option>
                                        <?php
                                            $year = date('Y');
                                            $i = $year - 2;
                                            for ($i; $i <=  $year; $i++) :
                                            ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <!-- Jenis Kelamin-->
                                <div class="form-group">
                                    <label for="pilihanUtama">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="">Masukkan Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <!-- Agama-->
                                <div class="form-group">
                                    <label for="pilihanUtama">Agama</label>
                                    <select class="form-control" id="agama" name="agama" required>
                                        <option value="">Masukkan Agama</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <!-- Alamat Asal -->
                                <div class="form-group">
                                    <label for="moto">Alamat Asal</label>
                                    <textarea class="form-control" id="alamat_asal" rows="4" name="alamat_asal"
                                        required></textarea>
                                </div>
                                <!-- Alamat Sekarang -->
                                <div class="form-group">
                                    <label for="moto">Alamat Sekarang</label>
                                    <textarea class="form-control" id="alamat_sekarang" rows="4" name="alamat_sekarang"
                                        required></textarea>
                                </div>
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">Alamat Email</label>
                                    <input type="email" class="form-control" id="email_undiksha" name="email"
                                        aria-describedby="emailHelp" required>
                                    <small id="emailHelp" class="form-text text-muted">Gunakan Email Undiksha untuk
                                        pendaftaran</small>
                                </div>
                                <!-- Whatsapp -->
                                <div class="form-group">
                                    <label for="wa">Whatsapp</label>
                                    <input type="text" pattern="[0-9]*" minlength="11" maxlength="13"
                                        class="form-control" id="wa" name="wa" aria-describedby="waHelp" required>
                                    <small id="waHelp" class="form-text text-muted">Gunakan Format 08***********</small>
                                </div>
                                <!-- Prodi-->
                                <div class="form-group">
                                    <label for="pilihanUtama">Program Studi</label>
                                    <select class="form-control" id="prodi" name="prodi" required>
                                        <option value="">Masukkan Prodi</option>
                                        <option value="05">Pendidikan Teknik Informatika</option>
                                        <option value="02">Manajemen Informatika</option>
                                        <option value="09">Sistem Informasi</option>
                                        <option value="10">Ilmu Komputer</option>
                                    </select>
                                </div>
                                <!-- Pilihan Utama Panitia -->
                                <div class="form-group" onchange="panitiaCadangan()">
                                    <label for="pilihanUtama">Pilihan Utama Panitia</label>
                                    <select class="form-control" id="pilihanUtama" name="pil_wajib" required>
                                        <?php foreach ($jabatan as $data) : ?>
                                        <option><?= $data['nama_pilihan'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <!-- Pilihan Cadangan Panitia -->
                                <div class="form-group">
                                    <label for="pilihanCadangan">Pilihan Cadangan Panitia</label>
                                    <select class="form-control" id="pilihanCadangan" name="pil_ops">
                                        <option></option>
                                    </select>
                                    <small id="pilihanCadanganHelp" class="form-text text-muted">Pilihan cadangan akan
                                        digunakan sebagai opsi penerimaan anda jika anda tidak diterima di pilihan
                                        utama</small>
                                </div>


                                <!-- Data Pribadi -->
                                <?php if ($kegiatan[0]['informasi_pribadi'] == 1) { ?>
                                <!-- Riwayat Kesehatan -->
                                <div class="form-group">
                                    <label for="riwayat_kesehatan">Riwayat Kesehatan</label>
                                    <textarea class="form-control" id="riwayat_kesehatan" rows="4"
                                        name="riwayat_kesehatan" required></textarea>
                                </div>
                                <!-- Hobi -->
                                <div class="form-group">
                                    <label for="hobi">Hobi</label>
                                    <textarea class="form-control" id="hobi" rows="4" name="hobi" required></textarea>
                                </div>
                                <!-- Moto Hidup -->
                                <div class="form-group">
                                    <label for="motto_hidup">Moto Hidup</label>
                                    <textarea class="form-control" id="motto_hidup" rows="4" name="motto_hidup"
                                        required></textarea>
                                </div>
                                <?php } ?>
                                <!-- Data Pendidikan -->

                                <?php if ($kegiatan[0]['informasi_pendidikan'] == 1) { ?>
                                <!-- IPK -->
                                <div class="form-group">
                                    <label for="ipk">IPK</label>
                                    <input type="number" min="2" max="4" step="0.001" class="form-control" id="ipk"
                                        name="ipk" aria-describedby="ipkHelp" required>
                                    <small id="ipkHelp" class="form-text text-muted">Untuk mendaftar kepanitiaan, IPK
                                        Minimal
                                        2.00</small>
                                </div>
                                <!-- Data Sekolah Dasar -->
                                <div class="form-group">
                                    <label for="email">Data Sekolah Dasar</label>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="nama_sd" name="nama_sd"
                                                aria-describedby="nama_sd" placeholder="Masukkan Nama Sekolah Dasar"
                                                required>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="tahun_sd"
                                                placeholder="Tahun Tamat" min="2005" max="2020" name="tahun_sd"
                                                aria-describedby="tahun_sd" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Data Sekolah Menengah Pertama -->
                                <div class="form-group">
                                    <label for="email">Data Sekolah Menengah Pertama</label>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="nama_smp" name="nama_smp"
                                                aria-describedby="nama_smp"
                                                placeholder="Masukkan Nama Sekolah Menengah Pertama" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" id="tahun_smp"
                                                placeholder="Tahun Tamat" min="2005" max="2020" name="tahun_smp"
                                                aria-describedby="tahun_smp" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Data Sekolah Dasar -->
                                <div class="form-group">
                                    <label for="email">Data Sekolah Menengah Atas</label>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="nama_sma" name="nama_sma"
                                                aria-describedby="nama_sma"
                                                placeholder="Masukkan Nama Sekolah Menengah Atas" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" min="2005" max="2020" class="form-control"
                                                id="tahun_sma" placeholder="Tahun Tamat" name="tahun_sma"
                                                aria-describedby="tahun_sma" required>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <!-- Validador -->
                                <div class="form-group form-check mt-5 mb-5">
                                    <input type="checkbox" class="form-check-input" id="validator3" required>
                                    <label class="form-check-label" for="validator3">Saya sudah membaca persyaratan
                                        pendaftaran
                                        kegiatan</label>
                                </div>
                                <div class="form-group form-check mt-5 mb-5">
                                    <input type="checkbox" class="form-check-input" id="validator1" required>
                                    <label class="form-check-label" for="validator1">Saya sudah mengisi seluruh data
                                        dengan
                                        benar dan sesuai dengan persyaratan. Jika data yang diberikan tidak benar dan
                                        tidak
                                        sesuai dengan persyaratan
                                        pendaftaran, saya siap menerima konsekuensi yang diberikan.</label>
                                </div>
                                <div class="form-group form-check mt-5 mb-5">
                                    <input type="checkbox" class="form-check-input" id="validator2" required>
                                    <label class="form-check-label" for="validator2">Saya siap mengikuti peraturan dan
                                        tata
                                        tertib kegiatan serta berkomitmen menyukseskan kegiatan
                                        <?= $kegiatan[0]['nama_kegiatan'] ?></label>
                                </div>
                                <!-- Kirim -->
                                <button type="submit" id="tombol_request" disabled class="btn btn-primary">Kirim
                                    Data</button>
                            </form>
                            <?php } else { ?>
                            <div class="single-widget">
                                <!-- Post Widget -->
                                <div class="accordions widget post-widget" id="post-accordion">
                                    <div class="single-accordion">
                                        <h5>
                                            <a role="button" class="collapse show text-uppercase d-block p-3"
                                                data-toggle="collapse" href="#accordion3">Pengumuman
                                            </a>
                                        </h5>
                                        <!-- Post Widget Content -->
                                        <div id="accordion3" class="accordion-content widget-content collapse show p-3"
                                            data-parent="#post-accordion" style="text-align: justify;">
                                            Kegiatan pendaftaran kepanitiaan <span
                                                class="text-primary"><?= $kegiatan[0]['nama_kegiatan'] ?></span> belum
                                            dapat
                                            dilakukan,
                                            silahkan baca terlebih dahulu ketentuan dan persyaratan pendaftaran agar
                                            mempermudah
                                            dalam pengisian form. Harap jangan mendaftar mendekati waktu penutupan
                                            pendaftaran,
                                            form akan otomatis hilang ketika waktu pendaftaran telah usai.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <aside class="sidebar">
                        <!-- Tentang Widget -->
                        <!-- Chart Widget -->
                        <div class="single-widget">
                            <!-- Post Widget -->
                            <div class="accordions widget post-widget" id="post-accordion">
                                <div class="single-accordion">
                                    <h5>
                                        <a role="button" class="collapse show text-uppercase d-block p-3"
                                            data-toggle="collapse" href="#accordion4">live count
                                        </a>
                                    </h5>
                                    <!-- Post Widget Content -->
                                    <div id="accordion4" class="accordion-content widget-content collapse show p-3"
                                        data-parent="#post-accordion">
                                        <!-- chart Pie -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bug Widget -->
                        <div class="single-widget">
                            <!-- Post Widget -->
                            <div class="accordions widget post-widget" id="post-accordion">
                                <div class="single-accordion">
                                    <h5>
                                        <a role="button" class="collapse show text-uppercase d-block p-3"
                                            data-toggle="collapse" href="#accordion2">BUG
                                        </a>
                                    </h5>
                                    <!-- Post Widget Content -->
                                    <div id="accordion2" class="accordion-content widget-content collapse show p-3"
                                        data-parent="#post-accordion">
                                        <p>
                                            Jika menemukan masalah pada website silahkan hubungi admin
                                            via <span class="text-primary font-weight-bold">WhatsApp</span> dengan
                                            mengklik tombol dibawah.
                                        </p>
                                        <a href="https://api.whatsapp.com/send?phone=<?= nomor_admin ?>&text=Terdapat%20masalah%20pada%20website%20pendaftaran,%20mhon%20bantuannya%20untuk%20memperbaiki"
                                            class="btn btn-primary mt-3" data-target="#staticBackdrop">
                                            Hubungi
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->
    <!-- Syarat Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Persyaratan Pendaftaran Kegiatan</h5>
                </div>
                <div class="modal-body">
                    <div id="list-style" class="pl-3">
                        <?= $kegiatan[0]['persyaratan'] ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Mengerti</button>
                </div>
            </div>
        </div>
    </div>
    <!--====== Footer Area Start ======-->
    <footer class="section inner-footer bg-gray ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <!-- Footer Items -->
                    <div class="footer-items text-center">
                        <!-- Logo -->
                        <a class="navbar-brand" href="#">
                            <img class="logo lazyload" data-src="<?= base_url() ?>assets/img/logo/NAV.png"
                                src="<?= base_url() ?>assets/img/logo/NAV.png" alt="">
                        </a>
                        <p class="mt-2 mb-3">Seluruh konten dibuat dan diunggah oleh Himpunan Mahasiswa Jurusan
                            Teknik Informatika Undiksha.</p>
                        <!-- Copyright Area -->
                        <div class="copyright-area border-0 pt-3">
                            &copy; Copyrights <?= date("Y"); ?> HMJ TI Undiksha. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== Footer Area End ======-->
</div>