<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Level User</h1>
    <p class="mb-4">Untuk mengubah informasi level user, silahkan isi form edit level user berikut</p>
    <!-- Kepengurusan -->

    <div id="infoMessage"><?php echo $message; ?></div>

    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Level User</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="kepengurusan">
            <div class="card-body">
                <div class="col-lg-6 col-md-8">
                    <form class="user" action="<?= current_url() ?>" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="group_name"
                                aria-describedby="emailHelp" placeholder="Masukkan Nama Level User" name="group_name"
                                value="<?= $group_name['value'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="group_description"
                                aria-describedby="emailHelp" placeholder="Masukkan Deskripsi Level User"
                                name="group_description" value="<?= $group_description['value'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Edit Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>