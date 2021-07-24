<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah User Website</h1>
    <p class="mb-4">Untuk menambahkan user baru, silahkan isi form tambah user berikut</p>
    <!-- Kepengurusan -->

    <div id="infoMessage"><?php echo $message; ?></div>

    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah User</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="kepengurusan">
            <div class="card-body">
                <div class="col-lg-6 col-md-8">
                    <form class="user" action="<?= base_url() ?>auth/create_user" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="email"
                                aria-describedby="emailHelp" placeholder="Masukkan Alamat Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="number" min="1800000000" class="form-control form-control-user" id="last_name"
                                aria-describedby="emailHelp" placeholder="Masukkan Nim" name="last_name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="first_name"
                                aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" name="first_name">
                        </div>
                        <div class="form-group">
                            <select name="company" id="company" class="form-control form-control-select"
                                aria-describedby="emailHelp" aria-placeholder="Masukkan Bidang HMJ">
                                <option value="">Masukkan Bidang HMJ</option>
                                <?php foreach ($jabatan as $data) : ?>
                                <option value="<?= $data['id_pilihan'] ?>"><?= $data['nama_pilihan'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon/WA" name="phone">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="Konfirmasi Password" name="password_confirm">
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>