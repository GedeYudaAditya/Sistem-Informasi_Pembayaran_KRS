<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Data Kandidat</h1>
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
                        <?php if (form_error('no_urut')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('no_urut'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    No Urut</div>
                                                <input type="number" accept=".jpg, .png"
                                                    class="form-control form-control-user" id="ketua"
                                                    aria-describedby="no_urut" min="0"
                                                    placeholder="Masukkan Nama Kegiatan" name="no_urut" required
                                                    value="<?= $kandidat[0]['no_urut'] ?>">
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
                                                    Foto Kandidat</div>
                                                <input type="file" accept=".jpg, .png"
                                                    class="form-control form-control-user" name="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('ketua')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('ketua'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Ketua</div>
                                                <input type="text" class="form-control form-control-user" id="ketua"
                                                    aria-describedby="ketua" placeholder="Masukkan Nama Ketua"
                                                    name="ketua" required value="<?= $kandidat[0]['nama_ketua'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('wakil_ketua')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('wakil_ketua'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Wakil Ketua</div>
                                                <input type="text" class="form-control form-control-user"
                                                    id="wakil_ketua" aria-describedby="wakil_ketua"
                                                    placeholder="Masukkan Nama Wakil Ketua" name="wakil_ketua" required
                                                    value="<?= $kandidat[0]['nama_wakil'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('visi_kandidat')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('visi_kandidat'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Visi Kandidat</div>
                                                <textarea type="text" id="visi_kandidat" rows="5" name="visi_kandidat"
                                                    required><?= $kandidat[0]['visi'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('misi_kandidat')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('misi_kandidat'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Misi Kandidat</div>
                                                <textarea type="text" id="misi_kandidat" rows="5" name="misi_kandidat"
                                                    required><?= $kandidat[0]['misi'] ?></textarea>
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