<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Kategori Berkas HMJ TI</h1>
    <p class="mb-4">Untuk menambah informasi kategori berkas HMJ TI, silahkan tambahkan pada form berikut</p>
    <!-- Kepengurusan -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Kategori Berkas</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="kepengurusan">
            <div class="card-body row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <form class="user" action="" method="post" enctype="multipart/form-data">
                        <?php if (form_error('kategori')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('kategori'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Kategori</div>
                                                <input type="text" class="form-control form-control-user" id="kategori"
                                                    aria-describedby="kategori" placeholder="Masukkan Nama Kategori HMJ"
                                                    name="kategori">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('deskripsi_kategori')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('deskripsi_kategori'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Deskripsi</div>
                                                <textarea type="text" id="bidang" rows="5"
                                                    name="deskripsi_kategori"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="id_kepengurusan" name="id_kepengurusan"
                            value="<?= $kepengurusans[0]['id_hmj'] ?>">
                        <input type="hidden" class="form-control form-control-user" id="create_by" name="create_by"
                            value="<?= ucfirst($namaUser[0]['first_name']); ?>">
                        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>