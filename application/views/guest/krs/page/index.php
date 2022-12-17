<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-lg-7">
                <div class="welcome-intro">
                    <h1 class="text-white">KRS Checker HMJ-TI</h1>
                    <p class="text-white my-4 text-justify">KRS Checker merupakan suatu layanan sistem infomasi dari HMJ
                        TI dalam memudahkan mahasiswa atau dosen pada ruang lingkup Jurusan Teknik Informatika untuk
                        mencari data terkait pembayaran KRS disetiap semester. <br><br><i>Catatan : Sistem ini masih
                            dalam pengembangan, jika terdapat hal yang tidak lazim atau menurut Anda data yang
                            dikeluarkan sistem salah, mohon untuk menghubungi <b><u><a href="https://www.instagram.com/hmj_ti.undiksha/" style="color : white;">pihak
                                        kami</a></u></b>.</i></p>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-5">
                <!-- Contact Box -->
                <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                    <!-- Contact Form -->
                    <form id="contact-form" method="POST" action="">
                        <div class="contact-top">
                            <h3 class="contact-title">Cek Pembayaran KRS</h3>
                            <h5 class="text-secondary fw-3 py-3 mb-3">Silakan masukkan NIM anda untuk mengecek status
                                pembayaran KRS</h5>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" id="nim" class="form-control" name="nim" pattern="[0-9]*" minlength="10" maxlength="10" placeholder="NIM Mahasiswa" required="required">
                                </div>
                                <!-- <div class="form-group" onkeyup="checkProdi()">
                                    <input type="text" id="nim" pattern="[0-9]*" minlength="10" maxlength="10"
                                        class="form-control" name="nim" placeholder="NIM Mahasiswa" required="required">
                                </div>
                                <div class="form-group">
                                    <select name="tahun" id="tahun" class="form-control" required>
                                        <option value="" disabled selected hidden>Tahun Krs</option>
                                        <?php /* foreach ($tahun as $thn) : ?>
                                        <option value="<?= $thn['tahun']; ?>"><?= $thn['tahun']; ?></option>
                                        <?php endforeach; */ ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="semester" id="semester" class="form-control" required>
                                        <option value="" disabled selected hidden>Semester</option>
                                        <option value="Ganjil">Ganjil</option>
                                        <option value="Genap">Genap</option>
                                    </select>
                                </div> -->
                                <button class="btn btn-bordered w-100 mt-3 mt-sm-4" name="submit" type="submit" id="submit">
                                    Cek Data
                                </button>
                                <div class="mt-3">
                                    <h6 class="text-secondary fw-3 py-3"> Belum pernah mengupload form? <br>
                                        <?php /* <a href="<?= base_url() ?>krs/Upload_Form" class=" text-underline"> */ ?>
                                        <a data-target="#upload-form" data-toggle="modal" href="#upload-form">
                                            <u>Silahkan klik disini</u></a>
                                    </h6>
                                </div>
                                <!--
                                <div class=" form-group">
                                            <select name="prodi" id="prodi" class="form-control" required>
                                                <option value="" disabled selected hidden>Prodi Mahasiswa</option>
                                                <option value="05">Pendidikan Teknik Informatika</option>
                                                <option value="02">Manajemen Informatika</option>
                                                <option value="09">Sistem Informasi</option>
                                                <option value="10">Ilmu Komputer</option>
                                            </select>
                                </div> -->
                            </div>
                        </div>
                    </form>
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

<!-- Start Modal Upload File -->
<!-- <div class="container">
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#upload-form">
        See Modal with Form
    </button>
</div> -->

<div class="modal fade" id="upload-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Form Upload Bukti Pembayaran Iuran HMJ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda" required="required">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM Anda" required="required">
                    </div>
                    <div class="form-group">
                        <label for="Prodi">Prodi</label>
                        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan Prodi Anda" required="required">
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Masukkan Angkatan Anda" required="required">
                    </div>
                    <div class="form-group">
                        <label for="file">File Bukti Pembayaran Iuran HMJ</label>
                        <input type="file" class="form-control" id="file" name="file" placeholder="Upload Berkas anda" required="required">
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" id="upload-form" name="upload-form" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <script>
$(document).ready(function() {
    $("#contactForm").submit(function(event) {
        submitForm();
        return false;
    });
});

function submitForm() {
    $.ajax({
        type: "POST",
        url: "saveContact.php",
        cache: false,
        data: $('form#contactForm').serialize(),
        success: function(response) {
            $("#contact").html(response);
            $("#contact-modal").modal('hide');
        },
        error: function() {
            alert("Error");
        }
    });
}
</script> -->
<!-- End Modal Upload File -->

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