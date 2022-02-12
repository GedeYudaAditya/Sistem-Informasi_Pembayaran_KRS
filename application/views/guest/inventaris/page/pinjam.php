<section id="welcome" class="section welcome-area bg-overlay d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center overflow-hidden">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-md-7 col-lg-6">
                <div class="welcome-intro">
                    <h1 class="text-white">
                        Sistem Informasi Inventaris <br> HMJ TI Undiksha
                    </h1>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-6">
                <!-- Welcome Thumb -->
                <div class="welcome-thumb mx-auto" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                    <img src="<?= base_url() ?>assets/img/maskot/welcome.png" data-src="<?= base_url() ?>assets/img/maskot/welcome.png" class="h-100 mw-auto lazyload" style="max-width: unset;" alt="Maskot TI" />
                </div>
            </div>
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="shape-bottom">
        <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
            <title>sApp Shape</title>
            <desc>Created with Sketch</desc>
            <defs></defs>
            <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                    <path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="sApp-v1.0"></path>
                </g>
            </g>
        </svg>
    </div>
</section>

<section class="container" id="inventaris">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-lg shadow-sm">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Peralatan dan Mesin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Furniture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bendera dan Kain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hiasan dan Lain Lain</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <input class="form-search-inventaris me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn-search-inventaris" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </nav>
    <main class="row" style="padding: 7rem 0 3.5rem 0;">

        <?php if ($this->session->flashdata('gagal')) : ?>
            <div class="col-md-12 text-center" style="width: 23rem;">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?= $this->session->flashdata('gagal'); ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="col-12 row overflow-hidden">
                <?php
                $no = 0;
                $baik = 0;
                $sedang = 0;
                $rusak = 0;
                foreach ($barang as $item) : ?>
                    <?php
                    if ($item['keadaanBarang'] == 'Baik') {
                        $baik += $item['banyakBarang'];
                    } else if ($item['keadaanBarang'] == 'Kurang Baik') {
                        $sedang += $item['banyakBarang'];
                    } else {
                        $rusak += $item['banyakBarang'];
                    }
                    ?>
                    <div class="col-4 mb-5">
                        <div class="card glass" style="width: 20rem;">
                            <img src="<?= base_url() ?>/assets/img/bg/welcome-bg.jpg" class="card-img-top" alt="Card Image">
                            <div class="icon card-body">
                                <div class="" style="min-height:150px;">
                                    <h5 class="card-title"><?= $item['namaBarang'] ?> </h5>
                                    <p><span class="badge badge-<?php if ($item['hakBarang'] == 'Diperpinjamkan') {
                                                                    echo 'success';
                                                                } else {
                                                                    echo 'danger';
                                                                } ?>"><?= $item['hakBarang'] ?></span></p>
                                    <p class="card-text"><?= $item['deskripsiBarang'] ?></p>
                                </div>
                                <hr>
                                <!-- <a href="#" class="btn-pinjam-inventaris">
								<i class="fas fa-search"></i> Detail
							</a> -->
                                <div class="row p-3">
                                    <button type="button" class="btn btn-pinjam-inventaris btn-sm btn-icon-split col-md-5" data-toggle="modal" data-target="#modalDetailBarang<?= $no ?>">
                                        <span class="text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">Detail</span>
                                    </button>


                                    <label class="col-md-6 offset-md-1 <?= ($item['hakBarang'] == 'Diperpinjamkan') ? 'btn' : 'btnd' ?> tambah-btn" id="check<?= $no ?>" for="defaultCheck<?= $no ?>">
                                        <div class="row">
                                            <input <?= ($item['hakBarang'] == 'Diperpinjamkan') ? '' : 'disabled' ?> onclick="myClick()" class="col-2 input" type="checkbox" name="pilih[]" value="<?= $item['kodeBarang'] ?>" id="defaultCheck<?= $no ?>">
                                            <span id="ubah<?= $no ?>" class="text ms-2 col-9" style="padding: 0px !important;">Tambah</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="glassModal modal fade bd-example-modal-lg" id="modalDetailBarang<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class=" modal-content text-center">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Barang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="badge badge-secondary m-2 p-2">
                                        <i class="fas fa-box-open"></i>
                                        Ketersediaan Barang <span class="badge badge-light p-1"><?= $item['banyakBarang'] - $item['barangDipinjam'] ?>/<?= $item['banyakBarang'] ?></span>
                                    </div>
                                    <div>
                                        <img src="https://dummyimage.com/600x400/dbdbdb/0011ff" alt="">
                                    </div>
                                    <h3><?= $item['namaBarang'] ?></h3>
                                    <div>Kode Barang : <?= $item['kodeBarang'] ?> | Merk : <?= $item['merk'] ?> | Tahun Pembelian : <?= $item['tahunPembelian'] ?></div>
                                    <div>Kategori <?= $item['namaKategori'] ?></div>
                                    <div>
                                        <?php if ($item['hakBarang'] == 'Diperpinjamkan') : ?>
                                            <b style="color: green;">Barang <?= $item['hakBarang'] ?></b>
                                        <?php else : ?>
                                            <b style="color: red;">Barang <?= $item['hakBarang'] ?></b>
                                        <?php endif; ?>
                                    </div>
                                    <p class="mt-3 px-5"><?= $item['deskripsiBarang'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $no++;
                endforeach; ?>
            </div>
            <div class="row pilihan col-12">
                <button type="submit" name="submit" class="btn col-4 offset-md-8 p-3">Lanjut ke form peminjaman <i class="fa fa-paper-plane"></i></button>
            </div>
        </form>
    </main>
</section>

<script>
    var element = document.getElementById('check');
    var allinput = document.getElementsByClassName('input');

    function myClick() {
        for (var i = 0; i < allinput.length; i++) {
            if (allinput[i].checked) {
                document.getElementById("check" + i).classList.add('tambah-btn-checked');
                document.getElementById("check" + i).classList.remove('tambah-btn');
                document.getElementById("ubah" + i).innerHTML = "Batal";
            } else {
                document.getElementById("check" + i).classList.add('tambah-btn');
                document.getElementById("check" + i).classList.remove('tambah-btn-checked');
                document.getElementById("ubah" + i).innerHTML = "Tambah";
            }
        }
    }


    // function listener() {
    // }
    // setInterval(listener, 1000);
</script>