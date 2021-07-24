<!-- Begin Page Content -->
<div class="container-fluid" id="edit_info">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sinkronasi Kegiatan</h1>
    <p class="mb-4">Untuk mensinkronasikan kegiatan yang akan diaktifkan dan ditampilkan di website, silahkan ubah form
        berikut</p>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Sinkronasi Kegiatan</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="kepengurusan">
            <div class="card-body row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <form class="user" action="" method="post">
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Kegiatan Integer</div>
                                                <select name="id_integer" id="id_integer"
                                                    class="form-control form-control-select"
                                                    aria-describedby="emailHelp" aria-placeholder="Pilih Kegiatan">
                                                    <option value="">Pilih Kegiatan Integer</option>
                                                    <?php foreach ($integer as $data) : ?>
                                                    <?php if ($select_integer[0]['status_integer'] == $data['status_integer']) { ?>
                                                    <option value="<?= $data['id_integer'] ?>" selected>
                                                        <?= $data['nama_integer'] ?></option>
                                                    <?php } else { ?>
                                                    <option value="<?= $data['id_integer'] ?>"><?= $data['nama_integer'] ?>
                                                    </option>
                                                    <?php } ?>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Simpan Sinkronasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>