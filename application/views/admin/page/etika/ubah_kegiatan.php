<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Data Kegiatan</h1>
    <p class="mb-4">Untuk menambah data kegiatan E-Voting Teknik Informatika, silahkan isi form
        dibawah ini</p>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Ubah Kegiatan</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="kepengurusan">
            <div class="card-body row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <form class="user" action="" method="POST" enctype="multipart/form-data">
                        <?php if (form_error('nama_kegiatan')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nama_kegiatan'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Kegiatan</div>
                                                <input type="text" class="form-control form-control-user" id="ketua"
                                                    aria-describedby="nama_kegiatan"
                                                    placeholder="Masukkan Nama Kegiatan" name="nama_kegiatan" required
                                                    value="<?= $kegiatan[0]['nama_kegiatan'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('deskripsi_etika')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('deskripsi_etika'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Deskripsi Singkat Kegiatan</div>
                                                <textarea type="text" id="deskripsi_etika" rows="5"
                                                    name="deskripsi_etika"
                                                    required><?= $kegiatan[0]['deskripsi']  ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('waktu_mulai')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('waktu_mulai'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Tanggal Mulai (format : yyyy-mm-dd hh:mm:ss)</div>
                                                <input type="text" class="form-control form-control-user" id="ketua"
                                                    aria-describedby="nama_kegiatan"
                                                    placeholder="Masukkan Nama Kegiatan" name="waktu_mulai" required
                                                    value="<?= $kegiatan[0]['waktu_mulai'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('waktu_selesai')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('waktu_selesai'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Tanggal Selesai (format : yyyy-mm-dd hh:mm:ss)</div>
                                                <input type="text" class="form-control form-control-user" id="ketua"
                                                    aria-describedby="nama_kegiatan"
                                                    placeholder="Masukkan Nama Kegiatan" name="waktu_selesai" required
                                                    value="<?= $kegiatan[0]['waktu_selesai']  ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $otomatis = "";
                        $manual = "";
                        $semi_otomatis = "";
                        if ($kegiatan[0]['mode'] == "0") {
                            $otomatis = "selected";
                        } else if ($kegiatan[0]['mode'] == "2") {
                            $semi_otomatis = "selected";
                        } else {
                            $manual = "selected";
                        }

                        ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Mode Voting</div>
                                                <select name="mode" class="form-control form-control-select" required
                                                    id="mode">
                                                    <option value="">Pilih Mode Voting</option>
                                                    <option value="0" <?= $otomatis ?>>Mode Otomatis - Token dikirim
                                                        melalui
                                                        email pemilih berdasarkan data email yang didapat dari UPT TIK
                                                    </option>
                                                    <option value="2" <?= $semi_otomatis ?>>Mode Semi Otomatis - Data
                                                        Username dan Token
                                                        dikirim melalui email
                                                        yang dimasukkan pemilih
                                                    <option value="1" <?= $manual ?>>Mode Manual - Data username dan
                                                        token dikirim
                                                        manual oleh
                                                        panitia melalui Media Sosial
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>