<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Kegiatan</h1>
    <p class="mb-4">Untuk menambah informasi kegiatan yang akan ditampilkan pada website, silahkan isi form dibawah ini
    </p>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Kegiatan Integer</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="kepengurusan">
            <div class="card-body row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <form class="user" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Logo Kegiatan (*.jpg,*.png maks 1Mb)</div>
                                                <input type="file" accept=".png, .jpg"
                                                    class="form-control form-control-user" id="logo" name="logo"
                                                    required>
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
                                                    Video Throwback (durasi maks 1 menit, *.mp4, maks 10 Mb)</div>
                                                <input type="file" accept=".mp4" class="form-control form-control-user"
                                                    id="video" name="video" required>
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
                                                    File Informasi Peserta (Format *.pdf,.*zip , maks 10
                                                    Mb)
                                                </div>
                                                <input type="file" accept=".pdf, .zip"
                                                    class="form-control form-control-user" id="file_info"
                                                    name="file_info" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('tema_integer')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('tema_integer'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Tema Kegiatan</div>
                                                <input type="text" class="form-control form-control-user"
                                                    id="tema_integer" aria-describedby="tema_integer"
                                                    placeholder="Masukkan Tema integer" name="tema_integer"
                                                    value="<?= set_value('tema_integer') ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('nama_integer')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nama_integer'); ?>
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
                                                <input type="text" class="form-control form-control-user"
                                                    id="nama_integer" aria-describedby="nama_integer"
                                                    placeholder="Masukkan Nama Kepengurusan HMJ"
                                                    value="<?= set_value('nama_integer') ?>" name="nama_integer"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('deskripsi_integer')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('deskripsi_integer'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Deskripsi Kegiatan</div>
                                                <textarea type="text" id="deskripsi" rows="5" name="deskripsi_integer"
                                                    required><?= set_value('deskripsi_integer') ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="form-control form-control-user" id="create_by" name="create_by"
                            value="<?= ucfirst($group[0]['first_name']); ?>">
                        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>