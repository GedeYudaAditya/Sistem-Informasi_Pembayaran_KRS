<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Kegiatan</h1>
    <p class="mb-4">Untuk menambah data kegiatan open recruitment, silahkan isi form
        dibawah ini</p>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Kegiatan</h6>
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
                                                    Icon Kegiatan (*.jpg atau *.png maks 1 Mb)</div>
                                                <input type="file" class="form-control form-control-user"
                                                    id="icon_kegiatan" name="icon_kegiatan" accept="image/*" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                    value="<?= set_value('nama_kegiatan') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('deskripsi')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('deskripsi'); ?>
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
                                                <textarea type="text" id="deskripsi_singkat" rows="5" name="deskripsi"
                                                    required><?= set_value('deskripsi') ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('persyaratan')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('persyaratan'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Persyaratan</div>
                                                <textarea type="text" id="persyaratan" rows="5" name="persyaratan"
                                                    required><?= set_value('persyaratan') ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('tanggal_mulai')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('tanggal_mulai'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Tanggal Mulai</div>
                                                <input type="date" class="form-control form-control-select" id="ketua"
                                                    aria-describedby="tanggal_mulai" name="tanggal_mulai" required
                                                    value="<?= set_value('tanggal_mulai') ?>"
                                                    min="<?= date('Y-m-d') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('tanggal_selesai')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('tanggal_selesai'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Tanggal Selesai</div>
                                                <input type="date" class="form-control form-control-select" id="ketua"
                                                    aria-describedby="tanggal_selesai" name="tanggal_selesai" required
                                                    value="<?= set_value('tanggal_selesai') ?>"
                                                    min="<?= date('Y-m-d') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('link_group')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('link_group'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Link Group Pendaftar</div>
                                                <input type="url" min="0" class="form-control form-control-user"
                                                    id="ketua" aria-describedby="link_group"
                                                    placeholder="Masukkan Link Group Umum Pendaftar Kegiatan"
                                                    name="link_group" required value="<?= set_value('link_group') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('target_pendaftar')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('target_pendaftar'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Target Pendaftar</div>
                                                <input type="number" min="0" class="form-control form-control-user"
                                                    id="ketua" aria-describedby="target_pendaftar"
                                                    placeholder="Masukkan Target Pendaftar" name="target_pendaftar"
                                                    required value="<?= set_value('target_pendaftar') ?>">
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
                                                    Setting Data Pribadi</div>
                                                <select name="data_pribadi" id="data_pribadi"
                                                    class="form-control form-control-select">
                                                    <option value="">Pilih Pengaturan</option>
                                                    <option value="1">Sertakan</option>
                                                    <option value="0">Tidak Perlu</option>
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
                                                    Setting Data Pendidikan</div>
                                                <select name="data_pendidikan" id="data_pendidikan"
                                                    class="form-control form-control-select">
                                                    <option value="">Pilih Pengaturan</option>
                                                    <option value="1">Sertakan</option>
                                                    <option value="0">Tidak Perlu</option>
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
                                                    Setting Wawancara</div>
                                                <select name="wawancara" id="wawancara"
                                                    class="form-control form-control-select">
                                                    <option value="">Pilih Pengaturan</option>
                                                    <option value="1">Sertakan</option>
                                                    <option value="0">Tidak Perlu</option>
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
                                                    Setting Upload File</div>
                                                <select name="file" id="file" class="form-control form-control-select">
                                                    <option value="">Pilih Pengaturan</option>
                                                    <option value="1">Sertakan</option>
                                                    <option value="0">Tidak Perlu</option>
                                                </select>
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