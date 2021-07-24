<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-lg-7">
                <div class="welcome-intro">
                    <h1 class="text-white">Verifikasi Akun</h1>
                    <p class="text-white my-4 text-justify">Silahkan lakukan Verifikasi Akun untuk mendapatkan Username
                        dan Token Pemilihan. Sistem Akan melakukan verifikasi terhadap data Anda, jika data Anda sesuai
                        dengan database pemilihan, Username dan Token Pemilihan akan dikirimkan melalui email.</p>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-5 mt-5 mb-3">
                <!-- Contact Box -->
                <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                    <!-- Contact Form -->
                    <form id="contact-form" method="POST" action="">
                        <div class="contact-top">
                            <h3 class="contact-title">Verifikasi Akun</h3>
                            <h5 class="text-secondary fw-3 py-3">Isi seluruh data dibawah untuk mendapatkan token
                                pemilihan</h5>
                        </div>
                        <div class="alert alert-danger" role="alert" id="pesan" style="display: none;">
                            Gunakan Email Undiksha
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="name" placeholder="Nama Pemilih"
                                            required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" id="email_undiksha"
                                            placeholder="Email (Gunakan Email Undiksha)" required="required">
                                    </div>
                                </div>
                                <div class="form-group" onkeyup="checkProdi()">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nim" pattern="[0-9]*" id="nim"
                                            minlength="10" maxlength="10" placeholder="Nim Pemilih" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-book-reader"></i></span>
                                        </div>
                                        <input type="number" min="1" max="16" class="form-control" name="semester"
                                            placeholder="Semester Saat Ini" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-school"></i></span>
                                        </div>
                                        <select name="prodi" id="prodi" class="form-control" required>
                                            <option value="">Prodi Mahasiswa</option>
                                            <option value="05">Pendidikan Teknik Informatika</option>
                                            <option value="02">Manajemen Informatika</option>
                                            <option value="09">Sistem Informasi</option>
                                            <option value="10">Ilmu Komputer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-bordered w-100 mt-3" name="submit" disabled id="tombol_request"
                                    value="Submit" type="submit">Request Token</button>
                            </div>
                            <div class="col-12">
                                <span class="d-block pt-2 mt-3 border-top">Terjadi Masalah? <a
                                        href="<?=base_url()?>etika/home#contact">Hubungi Kami</a></span>
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
        <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
            <title>sApp Shape</title>
            <desc>Created with Sketch</desc>
            <defs></defs>
            <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                    <path
                        d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395"
                        id="sApp-v1.0"></path>
                </g>
            </g>
        </svg>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->
</div>