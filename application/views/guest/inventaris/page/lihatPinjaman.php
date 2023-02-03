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
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-12">
                <div class="welcome-intro">
                    <h1 class="text-center">Halaman List Permintaan</h1>
                </div>
                <?php if ($this->session->flashdata('sukses')) : ?>
                    <script>
                        setTimeout(function() {
                            Swal.fire(
                                'Selamat'
                                '<?= $this->session->flashdata('sukses'); ?>',
                                'success'
                            )
                        }, 100);
                    </script>
                <?php endif; ?>

                <?php if ($this->session->flashdata('gagal')) : ?>
                    <script>
                        setTimeout(function() {
                            Swal.fire(
                                'Maaf',
                                '<?= $this->session->flashdata('gagal'); ?>',
                                'warning',
                            )
                        }, 100);
                    </script>
                <?php endif; ?>
                <div class="container rounded p-3" style="min-height:100vh">
                    <h3 class="mb-2">Data Permintaan Belum Dikofirmasi:</h3>
                    <div class="container rounded p-3 mb-3 bg-white text-black">
                        <!-- foreach -->
                        <div class="table-responsive">
                            <table class="table table-striped" id="tableInformasi" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <!-- <th>Ditambahakan Pada</th> -->
                                        <th>Nama Peminjam</th>
                                        <th class="text-center">Organisasi Mahasiswa</th>
                                        <th class="text-center">No Wa</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Detail</th>
                                        <th class="text-center">Status Konfirmasi</th>
                                        <th style="width: 300px" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($peminjam as $p) : ?>
                                        <tr>
                                            <td><?= $p['nama'] ?></td> <!-- Kategori Inventaris -->
                                            <td class="text-center"><?= $p['organisasi'] ?></td> <!-- Nama Ormawa -->
                                            <td class="text-center"><?= $p['noTelp'] ?></td> <!-- No Wa -->
                                            <td class="text-center"><?= $p['email'] ?></td> <!-- Email -->
                                            <td class="text-center">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-peminjaman btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#modalDetailBarang<?= $p['idPeminjaman'] ?>">
                                                    <span class="text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">Detail</span>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade bd-example-modal-lg" id="modalDetailBarang<?= $p['idPeminjaman'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Inventaris yang akan Dipinjam</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container" style="text-align: start !important;">
                                                                    <ul>
                                                                        <li style="list-style: none;"><b>Tanggal pinjam (YYYY/MM/DD) : </b>
                                                                            <p><?= $p['tglPinjam'] ?></p>
                                                                        </li>
                                                                        <li style="list-style: none;"><b>Tanggal rencana pengembalian (YYYY/MM/DD) : </b>
                                                                            <p><?= $p['lamaPinjam'] ?></p>
                                                                        </li>
                                                                        <li style="list-style: none;"><b>Total barang : </b>
                                                                            <p><?= $p['jumlahTotal'] ?></p>
                                                                        </li>
                                                                        <li style="list-style: none;">
                                                                            <b>Deskripsi peminjaman :</b>
                                                                            <p><?= $p['deskripsiPinjam'] ?></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Kode Barang</th>
                                                                            <th scope="col">Kategori Barang</th>
                                                                            <th scope="col">Nama Barang</th>
                                                                            <th scope="col">Jumlah barang yang dipinjam</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $yangDipinjam = $this->All_model->allDataDetailPinjam($p['idPeminjaman']);
                                                                        foreach ($yangDipinjam as $y) : ?>
                                                                            <tr>
                                                                                <th scope="row"><?= $y['kodeBarang'] ?></th>
                                                                                <td><?= $y['namaKategori'] ?></td>
                                                                                <td><?= $y['namaBarang'] ?></td>
                                                                                <td><?= $y['banyak'] ?></td>
                                                                            </tr>
                                                                        <?php endforeach; ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="badge badge-<?= ($p['status'] == 'Menunggu') ? 'secondary' : '' ?><?= ($p['status'] == 'Diterima') ? 'success' : '' ?><?= ($p['status'] == 'Ditolak') ? 'danger' : '' ?>">
                                                    <?= $p['status'] ?>
                                                </div>
                                                <?php if ($p['statusPinjam'] != null) : ?>
                                                    <div class="badge badge-<?= ($p['statusPinjam'] == 'Sedang Dipinjam') ? 'secondary' : '' ?><?= ($p['statusPinjam'] == 'Dikembalikan') ? 'success' : '' ?><?= ($p['statusPinjam'] == 'Lambat') ? 'danger' : '' ?>">
                                                        <?= $p['statusPinjam'] ?>
                                                    </div>
                                                <?php endif ?>
                                                <?php if ($p['sendBack'] != 0 && $p['statusPinjam'] != null) : ?>
                                                    <div class="badge badge-success">
                                                        Mengembalikan
                                                    </div>
                                                <?php endif ?>
                                            </td>
                                            <?php if (($p['status'] == 'Menunggu') && (($p['statusPinjam'] != 'Sedang Dipinjam') && ($p['statusPinjam'] != 'Lambat'))) : ?>
                                                <td class="text-center">
                                                    <!-- Silakan Backend Memberikan Pengkondisian -->
                                                    <!-- Kodisi Start -->
                                                    <a href="<?= base_url() ?>inventaris/dataLengkapPinjamEdit/<?= $p['idPeminjaman'] ?>" class="btn btn-peminjaman btn-success btn-sm btn-icon-split tombol-hapus">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-edit"></i>
                                                        </span>
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <!-- Kodisi Stop -->

                                                    <a href="<?= base_url() ?>inventaris/hapus/<?= $p['idPeminjaman'] ?>" class="btn btn-peminjaman btn-danger btn-sm btn-icon-split tombol-hapus" onclick="confirm('Yakin ingin membatalkan?')">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-times-circle"></i>
                                                        </span>
                                                        <span class="text">Batalkan</span>
                                                    </a>
                                                </td>
                                            <?php else : ?>
                                                <td class="text-center">
                                                    Sedang Menunggu Konfimasi Pengembalian
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h3 class="mb-2">Data Permintaan Telah Di Konfirmasi :</h3>
                    <div class="container rounded p-3 mb-3 bg-white">
                        <!-- foreach -->
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <!-- <th>Ditambahakan Pada</th> -->
                                        <th>Nama Peminjam</th>
                                        <th class="text-center">Organisasi Mahasiswa</th>
                                        <th class="text-center">No Wa</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Peminjaman Inventaris</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($peminjam2 as $p2) : ?>
                                        <tr>
                                            <td><?= $p2['nama'] ?></td> <!-- Kategori Inventaris -->
                                            <td class="text-center"><?= $p2['organisasi'] ?></td> <!-- Nama Ormawa -->
                                            <td class="text-center"><?= $p2['noTelp'] ?></td> <!-- No Wa -->
                                            <td class="text-center"><?= $p2['email'] ?></td> <!-- Email -->
                                            <td class="text-center">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-peminjaman btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#modalDetailBarang<?= $p2['idPeminjaman'] ?>">
                                                    <span class="text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">Detail</span>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade bd-example-modal-lg" id="modalDetailBarang<?= $p2['idPeminjaman'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Inventaris yang akan Dipinjam</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container" style="text-align: start !important;">
                                                                    <ul>
                                                                        <li style="list-style: none;"><b>Tanggal pinjam (YYYY/MM/DD) : </b>
                                                                            <p><?= $p2['tglPinjam'] ?></p>
                                                                        </li>
                                                                        <li style="list-style: none;"><b>Tanggal rencana pengembalian (YYYY/MM/DD) : </b>
                                                                            <p><?= $p2['lamaPinjam'] ?></p>
                                                                        </li>
                                                                        <li style="list-style: none;"><b>Total barang : </b>
                                                                            <p><?= $p2['jumlahTotal'] ?></p>
                                                                        </li>
                                                                        <li style="list-style: none;">
                                                                            <b>Deskripsi peminjaman :</b>
                                                                            <p><?= $p2['deskripsiPinjam'] ?></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Kode Barang</th>
                                                                            <th scope="col">Kategori Barang</th>
                                                                            <th scope="col">Nama Barang</th>
                                                                            <th scope="col">Jumlah barang yang dipinjam</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $yangDipinjam = $this->All_model->allDataDetailPinjamDikonfirmasi($p2['idPeminjaman']);
                                                                        foreach ($yangDipinjam as $y) : ?>
                                                                            <tr>
                                                                                <th scope="row"><?= $y['kodeBarang'] ?></th>
                                                                                <td><?= $y['namaKategori'] ?></td>
                                                                                <td><?= $y['namaBarang'] ?></td>
                                                                                <td><?= $y['banyak'] ?></td>
                                                                            </tr>
                                                                        <?php endforeach; ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- Silakan Backend Memberikan Pengkondisian -->
                                                <!-- Kodisi Start -->
                                                <?php if ($p2['statusPinjam'] == 'Sedang Dipinjam') : ?>
                                                    <div class="badge badge-secondary">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Sedang Dipinjam</span>
                                                    </div>
                                                    <p style="color: mediumseagreen;">Sisi Waktu</p>
                                                    <div style="color: mediumseagreen;" class="">
                                                        <div class="font-weight-bold">
                                                            <?php
                                                            $date = strtotime($p2['lamaPinjam']);
                                                            $now = time();
                                                            $day = $date - $now;
                                                            $days = round($day / (60 * 60 * 24));
                                                            ?>
                                                            <?= $days ?> Hari
                                                        </div>
                                                    </div>
                                                    <div style="color: mediumseagreen;" class="col-auto col-12 row">

                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="jam"></div>
                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="menit"></div>
                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="detik"></div>
                                                    </div>
                                                <?php elseif ($p2['statusPinjam'] == 'Dikembalikan') : ?>
                                                    <div class="badge badge-success">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-undo"></i>
                                                        </span>
                                                        <span class="text">Dikembalikan</span>
                                                    </div>
                                                <?php elseif ($p2['status'] == 'Ditolak') : ?>
                                                    <div class="badge badge-danger">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-times"></i>
                                                        </span>
                                                        <span class="text">Ditolak</span>
                                                    </div>
                                                <?php else : ?>
                                                    <div class="badge badge-warning">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-skull"></i>
                                                        </span>
                                                        <span class="text">Terlambat mengembalikan</span>
                                                    </div>
                                                    <p style="color:salmon;">Keterlambatan</p>
                                                    <div style="color: salmon;" class="">
                                                        <div class="font-weight-bold">
                                                            <?php
                                                            $date = strtotime($p2['lamaPinjam']);
                                                            $now = time();
                                                            $day = $now - $date;
                                                            $days = round($day / (60 * 60 * 24));
                                                            ?>
                                                            <?= $days ?> hari
                                                        </div>
                                                    </div>
                                                    <div style="color: mediumseagreen;" class="col-auto col-12 row">

                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="jam"></div>
                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="menit"></div>
                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="detik"></div>
                                                    </div>
                                                <?php endif; ?>
                                                <!-- Kodisi Stop -->
                                            </td>
                                            <td>
                                                <?php if ($p2['statusPinjam'] == 'Sedang Dipinjam' || $p2['statusPinjam'] == 'Lambat') : ?>
                                                    <a href="<?= base_url() ?>inventaris/serahkan/<?= $p2['idPeminjaman'] ?>" class="btn btn-peminjaman btn-danger btn-sm btn-icon-split tombol-hapus" onclick="confirm('Yakin ingin mengembalikan?')">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-undo"></i>
                                                        </span>
                                                        <span class="text">Serahkan</span>
                                                    </a>
                                                <?php elseif ($p2['sendBack'] == 0 && $p2['status'] == 'Ditolak') : ?>
                                                    <a href="<?= base_url() ?>inventaris/hapus/<?= $p2['idPeminjaman'] ?>" class="btn btn-peminjaman btn-danger btn-sm btn-icon-split tombol-hapus" onclick="confirm('Yakin ingin menghapus?')">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-times-circle"></i>
                                                        </span>
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                <?php elseif ($p2['sendBack'] == 1) : ?>
                                                    <div class="text-center">
                                                        <p>Sedang Mengembalikan</p>

                                                    </div>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <h3 class="mb-2">Data Pengembalian Telah Di Konfirmasi :</h3>
                    <div class="container rounded p-3 mb-3 bg-white">
                        <!-- foreach -->
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <!-- <th>Ditambahakan Pada</th> -->
                                        <th>Nama Peminjam</th>
                                        <th class="text-center">Organisasi Mahasiswa</th>
                                        <th class="text-center">No Wa</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Peminjaman Inventaris</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($peminjam3 as $p3) : ?>
                                        <tr>
                                            <td><?= $p3['nama'] ?></td> <!-- Kategori Inventaris -->
                                            <td class="text-center"><?= $p3['organisasi'] ?></td> <!-- Nama Ormawa -->
                                            <td class="text-center"><?= $p3['noTelp'] ?></td> <!-- No Wa -->
                                            <td class="text-center"><?= $p3['email'] ?></td> <!-- Email -->
                                            <td class="text-center">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-peminjaman btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#modalDetailBarang<?= $p3['idPeminjaman'] ?>">
                                                    <span class="text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">Detail</span>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade bd-example-modal-lg" id="modalDetailBarang<?= $p3['idPeminjaman'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalDetailBarangTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Inventaris yang telah dipinjam</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container" style="text-align: start !important;">
                                                                    <ul>
                                                                        <li style="list-style: none;"><b>Tanggal pinjam (YYYY/MM/DD) : </b>
                                                                            <p><?= $p3['tglPinjam'] ?></p>
                                                                        </li>
                                                                        <li style="list-style: none;"><b>Tanggal rencana pengembalian (YYYY/MM/DD) : </b>
                                                                            <p><?= $p3['lamaPinjam'] ?></p>
                                                                        </li>
                                                                        <li style="list-style: none;"><b>Total barang : </b>
                                                                            <p><?= $p3['jumlahTotal'] ?></p>
                                                                        </li>
                                                                        <li style="list-style: none;">
                                                                            <b>Deskripsi peminjaman :</b>
                                                                            <p><?= $p3['deskripsiPinjam'] ?></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Kode Barang</th>
                                                                            <th scope="col">Kategori Barang</th>
                                                                            <th scope="col">Nama Barang</th>
                                                                            <th scope="col">Jumlah barang yang dipinjam</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $yangDipinjam = $this->All_model->allDataDetailKembali($p3['idPeminjaman']);
                                                                        foreach ($yangDipinjam as $y) : ?>
                                                                            <tr>
                                                                                <th scope="row"><?= $y['kodeBarang'] ?></th>
                                                                                <td><?= $y['namaKategori'] ?></td>
                                                                                <td><?= $y['namaBarang'] ?></td>
                                                                                <td><?= $y['banyak'] ?></td>
                                                                            </tr>
                                                                        <?php endforeach; ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- Silakan Backend Memberikan Pengkondisian -->
                                                <!-- Kodisi Start -->
                                                <?php if ($p3['statusPinjam'] == 'Sedang Dipinjam') : ?>
                                                    <div class="badge badge-secondary">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Sedang Dipinjam</span>
                                                    </div>
                                                    <p style="color: mediumseagreen;">Sisi Waktu</p>
                                                    <!-- <p style="color: mediumseagreen;">[1d : 59h : 59m]</p> -->
                                                    <div style="color: mediumseagreen;" class="">
                                                        <div class="font-weight-bold">
                                                            <?= date("d, M Y") ?></div>
                                                    </div>
                                                    <div style="color: mediumseagreen;" class="col-auto col-12 row">

                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="jam"></div>
                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="menit"></div>
                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="detik"></div>
                                                    </div>
                                                <?php elseif ($p3['statusPinjam'] == 'Dikembalikan') : ?>
                                                    <div class="badge badge-success">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-undo"></i>
                                                        </span>
                                                        <span class="text">Dikembalikan</span>
                                                    </div>
                                                <?php elseif ($p3['status'] == 'Ditolak') : ?>
                                                    <div class="badge badge-danger">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-times"></i>
                                                        </span>
                                                        <span class="text">Ditolak</span>
                                                    </div>
                                                <?php else : ?>
                                                    <div class="badge badge-warning">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-skull"></i>
                                                        </span>
                                                        <span class="text">Terlambat mengembalikan</span>
                                                    </div>
                                                    <p style="color:salmon;">Keterlambatan</p>
                                                    <!-- <p style="color:salmon;">[1d : 59h : 59m]</p> -->
                                                    <div style="color: mediumseagreen;" class="">
                                                        <div class="font-weight-bold">
                                                            <?= date("d, M Y") ?></div>
                                                    </div>
                                                    <div style="color: mediumseagreen;" class="col-auto col-12 row">

                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="jam"></div>
                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="menit"></div>
                                                        <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="detik"></div>
                                                    </div>
                                                <?php endif; ?>
                                                <!-- Kodisi Stop -->
                                            </td>
                                            <td>
                                                <?php if ($p3['statusPinjam'] == 'Sedang Dipinjam' || $p3['statusPinjam'] == 'Lambat') : ?>
                                                    <a href="<?= base_url() ?>inventaris/serahkan/<?= $p3['idPeminjaman'] ?>" class="btn btn-peminjaman btn-danger btn-sm btn-icon-split tombol-hapus">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-undo"></i>
                                                        </span>
                                                        <span class="text">Serahkan</span>
                                                    </a>
                                                <?php else : ?>
                                                    <a href="<?= base_url() ?>inventaris/hapus/<?= $p3['idPeminjaman'] ?>" class="btn btn-peminjaman btn-danger btn-sm btn-icon-split tombol-hapus" onclick="confirm('Yakin ingin menghapus?')">
                                                        <span class="text-white-50">
                                                            <i class="fas fa-times-circle"></i>
                                                        </span>
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                <?php endif ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <a href="<?= base_url() ?>inventaris/home" class="btn btn-secondary btn-sm btn-icon-split tombol-hapus">
                            <span class="text-white-50">
                                <i class="fas fa-less-than"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>