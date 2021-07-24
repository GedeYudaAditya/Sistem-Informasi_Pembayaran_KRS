<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Icon/Link Landing Page</h1>
    <p class="mb-4">Untuk menambah informasi Icon/Links yang akan ditampilkan di landing page, silahkan tambahkan pada
        form berikut</p>
    <!-- Kepengurusan -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="kepengurusan">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Icon/Links Landing Page</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="kepengurusan">
            <div class="card-body row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <form class="user" action="" method="POST" enctype="multipart/form-data">
                        <?php if (form_error('title')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('title'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Title</div>
                                                <input type="text" class="form-control form-control-user" id="title"
                                                    aria-describedby="title" placeholder="Masukkan Title Dari Icon/Link"
                                                    name="title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('icon')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('icon'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Class Icon</div>
                                                <input type="text" class="form-control form-control-user" id="icon"
                                                    aria-describedby="icon"
                                                    placeholder="Masukkan Class Icon Font Awesome (ex. fas fa-boxes)"
                                                    name="icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (form_error('links')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo form_error('links'); ?>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="col-lg-12 mb-3">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Href</div>
                                                <input type="text" class="form-control form-control-user" id="link"
                                                    aria-describedby="links"
                                                    placeholder="Masukkan Link Kemana Akan Dituju Tanpa Base_Url (ex. beranda)"
                                                    name="links">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>