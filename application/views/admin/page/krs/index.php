<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-center thead-light">
                <tr>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $s) : ?>
                    <tr>
                        <th scope="row"><?= $s['nama_siswa']; ?></th>
                        <th scope="row"><?= $s['jenis_kelamin']; ?></th>
                        <th scope="row"><?= $s['nik']; ?></th>
                        <th scope="row"><?= $s['nama_kelas']; ?></th>
                        <td class="text-center">

                            <a href="#transaksiModal<?= $s['nik']; ?>" class="badge badge-success mr-1" data-toggle="modal">
                                <i class="fas fa-user fa-sm"></i> input transaksi siswa
                            </a>

                            <a href="#detailModal<?= $s['nik']; ?>" data-toggle="modal" class="badge badge-info mr-1">
                                <i class="fas fa-book-reader fa-sm"></i> Detail
                            </a>

                            <a href="#editModal<?= $s['nik']; ?>" class="badge badge-warning mr-1" data-toggle="modal">
                                <i class="fas fa-edit fa-sm"></i> edit
                            </a>

                            <a href="<?= base_url('siswa/hapussiswa/' . $s['nik']); ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                <i class="far fa-trash-alt fa-sm"></i> delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>