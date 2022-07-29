<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Cek Status Validasi Pembayaran KRS</h1>
    <form id="contact-form" method="POST" action="">
        <p class="mb-4">Silakan masukkan informasi berikut untuk mengecek status validasi pembayaran KRS mahasiswa</p>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <select name="tahun" id="tahun" class="form-control" required>
                        <option value="" disabled selected hidden>Tahun KRS</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="semester" id="semester" class="form-control" required>
                        <option value="" disabled selected hidden>Semester</option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <a class="btn btn-primary w-40 mt-3" name="submit" type="submit" id="submit" href="<?= base_url('krs/status_validasi') ?>">
                Cari Mahasiswa</a>
                </a>
            </div>
        </div>
    </form>
</div>