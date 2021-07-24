<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Kegiatan Perhari</h1>
    <p class="mb-4">Untuk menambah informasi terkait dengan sponsor kegiatan, silahkan tambahkan disini</p>
    <!-- Kepengurusan -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Kegiatan Perhari</h6>
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
                                                    Tanggal</div>
                                                <select name="hari_integer" id="hari_integer"
                                                    class="form-control form-control-select" required>
                                                    <option value="">Pilih Tanggal Kegiatan...</option>
                                                    <?php foreach ($hari as $data) : ?>
                                                    <option value="<?= $data['id_hari_integer'] ?>">
                                                        <?php
                                                            $daftar_hari = array(
                                                                'Sunday' => 'Minggu',
                                                                'Monday' => 'Senin',
                                                                'Tuesday' => 'Selasa',
                                                                'Wednesday' => 'Rabu',
                                                                'Thursday' => 'Kamis',
                                                                'Friday' => 'Jumat',
                                                                'Saturday' => 'Sabtu'
                                                            );
                                                            $data_tanggal =  $data['nama_hari_integer'];
                                                            $hari = date('l', strtotime($data_tanggal));
                                                            $tanggal = date('d F Y', strtotime($data_tanggal));


                                                            echo $daftar_hari[$hari] . ", " . $tanggal;
                                                            ?>
                                                    </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('nama_detail_hari_integer')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nama_detail_hari_integer'); ?>
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
                                                    id="nama_detail_hari_integer"
                                                    aria-describedby="nama_detail_hari_integer"
                                                    placeholder="Masukkan Nama Kegiatan" name="nama_detail_hari_integer"
                                                    value="<?= set_value('nama_detail_hari_integer') ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('waktu_mulai_jam')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('waktu_mulai_jam'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if (form_error('waktu_mulai_menit')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('waktu_mulai_menit'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Waktu Mulai (WITA)</div>
                                                <div class=" row">
                                                    <div class="col-lg-3 col-6">
                                                        <input type="number" min="0" max="24"
                                                            class="form-control form-control-user" id="time"
                                                            name="waktu_mulai_jam" value="<?= date("H"); ?>" required>
                                                    </div>
                                                    <div class="col-lg-3 col-6">
                                                        <input type="number" min="0" max="60"
                                                            class="form-control form-control-user" id="time"
                                                            name="waktu_mulai_menit" value="<?= date("i"); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('waktu_akhir_jam')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('waktu_akhir_jam'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if (form_error('waktu_akhir_menit')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('waktu_akhir_menit'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Waktu Selesai (WITA)</div>
                                                <div class=" row">
                                                    <div class="col-lg-3 col-6">
                                                        <input type="number" min="0" max="24"
                                                            class="form-control form-control-user" id="time"
                                                            name="waktu_akhir_jam" value="<?= date("H"); ?>" required>
                                                    </div>
                                                    <div class="col-lg-3 col-6">
                                                        <input type="number" min="0" max="60"
                                                            class="form-control form-control-user" id="time"
                                                            name="waktu_akhir_menit" value="<?= date("i"); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('tempat_detail_hari_integer')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('tempat_detail_hari_integer'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Tempat Kegiatan</div>
                                                <input type="text" class="form-control form-control-user"
                                                    id="tempat_detail_hari_integer"
                                                    aria-describedby="tempat_detail_hari_integer"
                                                    placeholder="Masukkan Tempat Kegiatan"
                                                    name="tempat_detail_hari_integer"
                                                    value="<?= set_value('tempat_detail_hari_integer') ?>" required>
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