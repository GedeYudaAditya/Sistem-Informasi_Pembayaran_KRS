<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Informasi</h1>
    <p class="mb-4">Untuk menambah informasi pengumuman dan berita pada integer, silahkan isi form
        dibawah ini</p>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Informasi Integer</h6>
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
                                                    Foto Slide 1 (*.jpg,*.png maks 1Mb)</div>
                                                <input type="file" accept=".jpg, .png"
                                                    class="form-control form-control-user" id="foto_1" name="foto_1"
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
                                                    Foto Slide 2 (*.jpg,*.png maks 1Mb)</div>
                                                <input type="file" accept=".jpg, .png"
                                                    class="form-control form-control-user" id="foto_2" name="foto_2">
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
                                                    Foto Slide 3 (*.jpg,*.png maks 1Mb)</div>
                                                <input type="file" accept=".jpg, .png"
                                                    class="form-control form-control-user" id="foto_3" name="foto_3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('youtube_berita_integer')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('youtube_berita_integer'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Embed Video Youtube</div>
                                                <input type="text" class="form-control form-control-user"
                                                    id="youtube_berita_integer"
                                                    aria-describedby="youtube_berita_integer"
                                                    placeholder="Masukkan Embed Video Youtube"
                                                    name="youtube_berita_integer"
                                                    value="<?= set_value('youtube_berita_integer') ?>">
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
                                                    Kategori Informasi</div>
                                                <select type="text" class="form-control form-control-select"
                                                    id="kategori_berita_integer"
                                                    aria-describedby="kategori_berita_integer"
                                                    name="kategori_berita_integer" required
                                                    value="<?= set_value('kategori_berita_integer') ?>">
                                                    <option value="">Pilih Kategori Informasi</option>
                                                    <option value="1">Berita</option>
                                                    <option value="2">Pengumuman</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('nama_berita_integer')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nama_berita_integer'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Judul Informasi</div>
                                                <input type="text" class="form-control form-control-user"
                                                    id="nama_berita_integer" aria-describedby="nama_berita_integer"
                                                    placeholder="Masukkan Nama Kepengurusan HMJ"
                                                    name="nama_berita_integer" required
                                                    value="<?= set_value('nama_berita_integer') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('konten_berita_integer')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('konten_berita_integer'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Konten</div>
                                                <textarea type="text" id="deskripsi" rows="5"
                                                    name="konten_berita_integer"
                                                    required><?= set_value('konten_berita_integer') ?></textarea>
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
                                                    File Dokumen (*.pdf maks 10 Mb)</div>
                                                <input type="file" accept=".pdf" class="form-control form-control-user"
                                                    id="file" name="file">
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