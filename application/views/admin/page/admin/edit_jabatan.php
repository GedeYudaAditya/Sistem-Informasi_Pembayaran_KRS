<?php if (!empty($jabatan)) { ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Data Jabatan</h1>
    <p class="mb-4">Untuk menambah informasi jabatan, silahkan isi form
        dibawah ini</p>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Jabatan</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="kepengurusan">
            <div class="card-body row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <form class="user" action="" method="POST" enctype="multipart/form-data">
                        <?php if (form_error('nama_jabatan')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nama_jabatan'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Jabatan</div>
                                                <input type="text" class="form-control form-control-user" id="ketua"
                                                    aria-describedby="judul_informasi"
                                                    placeholder="Masukkan Nama Jabatan" name="nama_jabatan" required
                                                    value="<?= $jabatan[0]['nama_pilihan'] ?>">
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
<?php } else { ?>
<div class="p mb-0 text-gray-500 text-center">
    <i>Oopss ... Data Parameter Tidak Ditemukan !!</i>
</div>
<?php } ?>