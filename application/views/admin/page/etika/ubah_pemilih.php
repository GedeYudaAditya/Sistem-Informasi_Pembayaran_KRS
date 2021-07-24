<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Manual Data Pemilih</h1>
    <p class="mb-4">Untuk menambah data pemilih E-Voting Teknik Informatika, silahkan isi form
        dibawah ini</p>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Ubah Pemilih</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="kepengurusan">
            <div class="card-body row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <form class="user" action="" method="POST" enctype="multipart/form-data">
                        <?php if (form_error('nim_pemilih')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nim_pemilih'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nim Pemilih</div>
                                                <input type="text" pattern="[0-9]*" minlength="10" maxlength="10"
                                                    class="form-control form-control-user" id="ketua"
                                                    aria-describedby="nim_pemilih" placeholder="Masukkan Nim Pemilih"
                                                    name="nim_pemilih" required value="<?= $pemilih[0]['nim'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('nama_pemilih')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('nama_pemilih'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Pemilih</div>
                                                <input type="text" class="form-control form-control-user" id="ketua"
                                                    aria-describedby="nama_pemilih" placeholder="Masukkan Nama Pemilih"
                                                    name="nama_pemilih" required
                                                    value="<?= $pemilih[0]['nama_pemilih'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('email_pemilih')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('email_pemilih'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Email Pemilih (Kosongkan Jika Tidak Ada)</div>
                                                <input type="email" class="form-control form-control-user" id="ketua"
                                                    aria-describedby="email_pemilih"
                                                    placeholder="Masukkan Email Pemilih" name="email_pemilih"
                                                    value="<?= $pemilih[0]['email'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $pti = "";
                        $si = "";
                        $mi = "";
                        $ilkom = "";
                        if ($pemilih[0]['prodi'] == "Pendidikan Teknik Informatika") {
                            $pti = "selected";
                        } else if ($pemilih[0]['prodi'] == "Manajemen Informatika") {
                            $mi = "selected";
                        } else if ($pemilih[0]['prodi'] == "Ilmu Komputer") {
                            $ilkom = "selected";
                        } else if ($pemilih[0]['prodi'] == "Sistem Informasi") {
                            $si = "selected";
                        }
                        ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Nama Pemilih</div>
                                                <select name="prodi" id="prodi"
                                                    class="form-control form-control-select">
                                                    <option value="">Pilih Prodi Pemilih</option>
                                                    <option value="Pendidikan Teknik Informatika" <?= $pti ?>>Pendidikan
                                                        Teknik
                                                        Informatika</option>
                                                    <option value="Sistem Informasi" <?= $si ?>>Sistem Informasi
                                                    </option>
                                                    <option value="Manajemen Informatika" <?= $mi ?>>Manajemen
                                                        Informatika</option>
                                                    <option value="Ilmu Komputer" <?= $ilkom ?>>Ilmu Komputer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('semester')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('semester'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Semester</div>
                                                <input type="number" min="1" max="16"
                                                    class="form-control form-control-user" id="semester"
                                                    aria-describedby="semester" placeholder="Masukkan Semester"
                                                    name="semester" required value="<?= $pemilih[0]['semester'] ?>">
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