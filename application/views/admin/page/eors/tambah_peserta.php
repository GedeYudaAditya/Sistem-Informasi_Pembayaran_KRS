<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Pendaftar</h1>
    <p class="mb-4">Untuk menambah data pendaftar secara manual pada kegiatan <?= $kegiatan[0]['nama_kegiatan'] ?>,
        silahkan
        isi form
        dibawah ini</p>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Umum</h6>
        </a>
        <!-- Card Content - Collapse -->

        <div class="collapse show" id="kepengurusan">
            <div class="card-body row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <form class="user" action="" method="POST" enctype="multipart/form-data">
                        <?php if ($kegiatan[0]['upload_file'] == 1) { ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Foto Pendaftar ( *.jpg atau *.png maks 1 Mb)</div>
                                                <input type="file" accept=".png, .jpg"
                                                    class="form-control form-control-user" id="file_foto"
                                                    name="file_foto" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Dokumen Pendaftar (*.pdf atau *.zip maks 15 Mb)</div>
                                                <input type="file" accept=".pdf, .zip"
                                                    class="form-control form-control-user" id="file_dokumen"
                                                    name="file_dokumen">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if (form_error('nim')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nim'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2" onkeyup="checkProdi()">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    NIM</div>
                                                <input type="text" pattern="[0-9]*"
                                                    class="form-control form-control-user" id="nim"
                                                    aria-describedby="nim" placeholder="Masukkan Nama Bidang HMJ"
                                                    name="nim" required value="<?= set_value("nim") ?>" maxlength="10"
                                                    minlength="10">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('nama_lengkap')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nama_lengkap'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Lengkap</div>
                                                <input type="text" class="form-control form-control-user"
                                                    id="nama_lengkap" aria-describedby="nama_lengkap"
                                                    placeholder="Masukkan Nama Bidang HMJ" name="nama_lengkap" required
                                                    value="<?= set_value("nama_lengkap") ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Angkatan</div>
                                                <select name="angkatan" id="angkatan"
                                                    class="form-control form-control-select" required>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Jenis Kelamin</div>
                                                <select name="jenis_kelamin" id="jenis_kelamin"
                                                    class="form-control form-control-select" required>
                                                    <option value="">Masukkan Jenis Kelamin</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Agama</div>
                                                <select name="agama" id="agama" class="form-control form-control-select"
                                                    required>
                                                    <option value="">Masukkan Agama</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('alamat_asal')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('alamat_asal'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Alamat Asal</div>
                                                <textarea type="text" id="alamat_asal" rows="5" name="alamat_asal"
                                                    required><?= set_value("alamat_asal") ?> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('alamat_sekarang')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('alamat_sekarang'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Alamat Sekarang</div>
                                                <textarea type="text" id="alamat_sekarang" rows="5"
                                                    name="alamat_sekarang"
                                                    required> <?= set_value("alamat_sekarang") ?> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('email')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('email'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Email</div>
                                                <input type="email" class="form-control form-control-user" id="email"
                                                    aria-describedby="email" placeholder="Masukkan Email" name="email"
                                                    required value="<?= set_value("email") ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('wa')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('wa'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Whatsapp</div>
                                                <input type="text" class="form-control form-control-user"
                                                    pattern="[0-9]*" id="wa" placeholder="Masukkan Nomor Whatsapp"
                                                    name="wa" required value="<?= set_value("wa") ?>" maxlength="13"
                                                    minlength="11">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Program Studi</div>
                                                <select name="prodi" id="prodi" class="form-control form-control-select"
                                                    required>
                                                    <option value="">Masukkan Prodi</option>
                                                    <option value="05">Pendidikan Teknik Informatika</option>
                                                    <option value="02">Manajemen Informatika</option>
                                                    <option value="09">Sistem Informasi</option>
                                                    <option value="10">Ilmu Komputer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" onchange="panitiaCadangan()">
                            <div class=" col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Pilihan Wajib</div>
                                                <select name="pil_wajib" id="pilihanUtama"
                                                    class="form-control form-control-select" required>
                                                    <?php foreach ($jabatan as $data) : ?>
                                                    <option><?= $data['nama_pilihan'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Pilihan Opsional</div>
                                                <select name="pil_ops" id="pilihanCadangan"
                                                    class="form-control form-control-select">
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($kegiatan[0]['informasi_pribadi'] == 1) { ?>
                        <?php if (form_error('riwayat_kesehatan')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('riwayat_kesehatan'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Riwayat Kesehatan</div>
                                                <textarea type="text" id="riwayat_kesehatan" rows="5"
                                                    name="riwayat_kesehatan"
                                                    required> <?= set_value("riwayat_kesehatan") ?> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('hobi')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('hobi'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Hobi</div>
                                                <textarea type="text" id="hobi" rows="5" name="hobi"
                                                    required><?= set_value("hobi") ?> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('motto_hidup')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('motto_hidup'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Motto Hidup</div>
                                                <textarea type="text" id="motto_hidup" rows="5" name="motto_hidup"
                                                    required> <?= set_value("motto_hidup") ?> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if ($kegiatan[0]['informasi_pendidikan'] == 1) { ?>
                        <?php if (form_error('ipk')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('ipk'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    IPK Terakhir</div>
                                                <input type="number" class="form-control form-control-user" id="ipk"
                                                    aria-describedby="ipk" min="2" max="4" step="0.001"
                                                    placeholder="Masukkan Nilai IPK terakhir" name="ipk" required
                                                    value="<?= set_value("ipk") ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('nama_sd')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nama_sd'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if (form_error('tahun_sd')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('tahun_sd'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Sekolah Dasar</div>
                                                <div class="row">
                                                    <div class="col-lg-7 col-6">
                                                        <input type="text" class="form-control form-control-user"
                                                            id="time" placeholder="Nama Sekolah" name="nama_sd"
                                                            value="<?= set_value("nama_sd") ?>" required>
                                                    </div>
                                                    <div class="col-lg-4 col-6">
                                                        <input type="number" min="2000" max="<?= date('Y') ?>"
                                                            class="form-control form-control-user" id="time"
                                                            placeholder="Tahun Tamat" name="tahun_sd"
                                                            value="<?= set_value("tahun_sd") ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('nama_smp')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nama_smp'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if (form_error('tahun_smp')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('tahun_smp'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Sekolah Menengah Pertama</div>
                                                <div class="row">
                                                    <div class="col-lg-7 col-6">
                                                        <input type="text" class="form-control form-control-user"
                                                            id="time" placeholder="Nama Sekolah" name="nama_smp"
                                                            value="<?= set_value("nama_smp") ?>" required>
                                                    </div>
                                                    <div class="col-lg-4 col-6">
                                                        <input type="number" min="2000" max="<?= date('Y') ?>"
                                                            class="form-control form-control-user" id="time"
                                                            placeholder="Tahun Tamat" name="tahun_smp"
                                                            value="<?= set_value("tahun_smp") ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('nama_sma')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nama_sma'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if (form_error('tahun_sma')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('tahun_sma'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Sekolah Menengah Atas</div>
                                                <div class="row">
                                                    <div class="col-lg-7 col-6">
                                                        <input type="text" class="form-control form-control-user"
                                                            id="time" placeholder="Nama Sekolah" name="nama_sma"
                                                            value="<?= set_value("nama_sma") ?>" required>
                                                    </div>
                                                    <div class="col-lg-4 col-6">
                                                        <input type="number" min="2000" max="<?= date('Y') ?>"
                                                            class="form-control form-control-user" id="time"
                                                            placeholder="Tahun Tamat" name="tahun_sma"
                                                            value="<?= set_value("tahun_sma") ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>