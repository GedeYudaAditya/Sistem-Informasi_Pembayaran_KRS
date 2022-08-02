<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah User Mahasiswa</h1>
    <p class="mb-4">Untuk menambahkan user mahasiswa baru, silahkan isi form tambah user berikut</p>
    <!-- Kepengurusan -->

    <div id="infoMessage"><?php echo $message; ?></div>

    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah User Mahasiswa</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="kepengurusan">
            <div class="card-body">
                <div class="col-lg-9 col-md-8 m-auto">
                    <form class="user" action="<?= base_url() ?>auth/create_user_mahasiswa" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="number" min="1800000000" class="form-control form-control-user" id="last_name" aria-describedby="emailHelp" placeholder="Masukkan Nim" name="last_name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="first_name" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" name="first_name">
                            <input type="hidden" name="company" value="47">
                            <input type="hidden" name="userGroup" value="10">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon/WA" name="phone">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Konfirmasi Password" name="password_confirm">
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>