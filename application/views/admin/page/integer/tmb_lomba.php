<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Lomba</h1>
    <p class="mb-4">Untuk menambah informasi lomba yang akan dilaksanakan, silahkan isi form dibawah
        ini</p>
    <!-- Kepengurusan -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Lomba</h6>
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
                                                    Ikon Maskot Kategori (*.jpg,*.png maks 1Mb)</div>
                                                <input type="file" accept=".jpg, .png"
                                                    class="form-control form-control-user" id="icon_lomba"
                                                    name="icon_lomba" required>
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
                                                    Kategori Lomba</div>
                                                <select name="id_kategori_lomba_integer" id="id_kategori_lomba_integer"
                                                    class="form-control form-control-select" required>
                                                    <option value="">Pilih Kategori Lomba</option>
                                                    <?php foreach ($kategori as $data) : ?>
                                                    <option value="<?= $data['id_kategori_lomba_integer'] ?>">
                                                        <?= $data['nama_kategori_lomba_integer'] ?>
                                                    </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('nama_lomba_integer')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nama_lomba_integer'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Lomba</div>
                                                <input type="text" class="form-control form-control-user"
                                                    id="nama_lomba_integer" aria-describedby="nama_lomba_integer"
                                                    placeholder="Masukkan Nama Lomba" name="nama_lomba_integer"
                                                    value="<?= set_value('nama_lomba_integer') ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('deskripsi_lomba_integer')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('deskripsi_lomba_integer'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Deskripsi Lomba</div>
                                                <textarea type="text" id="deskripsi" rows="5"
                                                    name="deskripsi_lomba_integer"
                                                    required><?= set_value('deskripsi_lomba_integer') ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('tanggal_daftar_mulai')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('tanggal_daftar_mulai'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Tanggal Mulai Pendaftaran</div>
                                                <input type="date" class="form-control form-control-select"
                                                    id="tanggal_daftar_mulai" aria-describedby="tanggal_daftar_mulai"
                                                    name="tanggal_daftar_mulai" required
                                                    value="<?= set_value('tanggal_daftar_mulai') ?>"
                                                    min="<?= date('Y-m-d') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('tanggal_daftar_selesai')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('tanggal_daftar_selesai'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Tanggal Selesai Pendaftaran</div>
                                                <input type="date" class="form-control form-control-select"
                                                    id="tanggal_daftar_selesai"
                                                    aria-describedby="tanggal_daftar_selesai"
                                                    name="tanggal_daftar_selesai" required
                                                    value="<?= set_value('tanggal_daftar_selesai') ?>"
                                                    min="<?= date('Y-m-d') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('pendaftaran_lomba_integer')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('pendaftaran_lomba_integer'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Link Pendaftaran</div>
                                                <input type="text" class="form-control form-control-user"
                                                    id="pendaftaran_lomba_integer"
                                                    aria-describedby="pendaftaran_lomba_integer"
                                                    placeholder="Masukkan Link Pendaftaran Lomba"
                                                    name="pendaftaran_lomba_integer"
                                                    value="<?= set_value('pendaftaran_lomba_integer') ?>" required>
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
                                                    Pengumpulan Proposal</div>
                                                <select name="proposal" id="proposal"
                                                    class="form-control form-control-select" required>
                                                    <option value="">Pilih Pengaturan</option>
                                                    <option value="0">Tidak Perlu</option>
                                                    <option value="1">Perlu</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('tanggal_kumpul_mulai')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('tanggal_kumpul_mulai'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="pengumpulan_proposal">
                            <div class="form-group">
                                <div class="col-lg-12 mb-3">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Tanggal Mulai Pengumpulan</div>
                                                    <input type="date" class="form-control form-control-select"
                                                        id="tanggal_kumpul_mulai"
                                                        aria-describedby="tanggal_kumpul_mulai"
                                                        name="tanggal_kumpul_mulai"
                                                        value="<?= set_value('tanggal_kumpul_mulai') ?>"
                                                        min="<?= date('Y-m-d') ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if (form_error('tanggal_kumpul_selesai')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo form_error('tanggal_kumpul_selesai'); ?>
                            </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <div class="col-lg-12 mb-3">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Tanggal Selesai Pengumpulan</div>
                                                    <input type="date" class="form-control form-control-select"
                                                        id="tanggal_kumpul_selesai"
                                                        aria-describedby="tanggal_kumpul_selesai"
                                                        name="tanggal_kumpul_selesai"
                                                        value="<?= set_value('tanggal_kumpul_selesai') ?>"
                                                        min="<?= date('Y-m-d') ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if (form_error('pengumpulan_lomba_integer')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo form_error('pengumpulan_lomba_integer'); ?>
                            </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <div class="col-lg-12 mb-3">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Link Pengumpulan</div>
                                                    <input type="text" class="form-control form-control-user"
                                                        id="pengumpulan_lomba_integer"
                                                        aria-describedby="pengumpulan_lomba_integer"
                                                        placeholder="Masukkan Link Pengumpulan Proposal Lomba"
                                                        name="pengumpulan_lomba_integer"
                                                        value="<?= set_value('pengumpulan_lomba_integer') ?>">
                                                </div>
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