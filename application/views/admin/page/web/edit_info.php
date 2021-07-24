<!-- Begin Page Content -->
<div class="container-fluid" id="edit_info">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Informasi Umum Kepengurusan</h1>
    <p class="mb-4">Untuk mengubah informasi umum kepengurusan, silahkan ubah form berikut</p>
    <!-- Kepengurusan -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Informasi Umum Kepengurusan</h6>
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
                                                    Nama Kepengurusan</div>
                                                <select name="nama_kepengurusan" id="nama_kepengurusan"
                                                    class="form-control form-control-select"
                                                    aria-describedby="emailHelp" aria-placeholder="Masukkan Bidang HMJ">
                                                    <option value="">Pilih Kepengurusan</option>
                                                    <?php foreach ($kepengurusan as $data) : ?>
                                                    <?php if ($select_kepengurusan[0]['status_pakai'] == $data['status_pakai']) { ?>
                                                    <option value="<?= $data['id_hmj'] ?>" selected>
                                                        <?= $data['nama_hmj'] ?></option>
                                                    <?php } else { ?>
                                                    <option value="<?= $data['id_hmj'] ?>"><?= $data['nama_hmj'] ?>
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