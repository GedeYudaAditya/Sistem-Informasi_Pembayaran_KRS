<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen Evote ETIKA Kegiatan <span
            class="text-primary"><?= ucwords($kegiatan[0]['nama_kegiatan']) ?></span></h1>
    <p class="mb-4">Silahkan atur informasi Evote terkait dengan Sistem E-Voting Teknik Informatika disini</p>
    <!-- Kepengurusan -->
    <div class="accordion" id="ManajemenEors">

        <?php
        if (new DateTime(date('Y-m-d H:i:s')) > new DateTime($kegiatan[0]['waktu_selesai'])) : ?>
        <div class="alert alert-danger col-12" role="alert">
            Waktu Voting Telah Usai !!
        </div>
        <?php elseif (new DateTime(date('Y-m-d H:i:s')) >= new DateTime($kegiatan[0]['waktu_mulai'])  && new DateTime(date('Y-m-d H:i:s')) <= new DateTime($kegiatan[0]['waktu_selesai'])) : ?>
        <div class="alert alert-success col-12" role="alert">
            <?php
                $tgl_selesai = new DateTime($kegiatan[0]['waktu_selesai']);
                $tgl_hari_ini = new DateTime(date('Y-m-d H:i:s'));

                $diff = $tgl_selesai->diff($tgl_hari_ini);
                echo "Voting Berakhir dalam " . $diff->d . " hari " . $diff->h . " jam " . $diff->i . " menit ";
                ?>
        </div>
        <?php else : ?>
        <div class="alert alert-secondary col-12" role="alert">
            Waktu Voting Belum Dimulai!!
        </div>
        <?php endif; ?>
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#setting" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="setting">
                <h6 class="m-0 font-weight-bold text-primary">Data Pengaturan Kegiatan</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="setting" data-parent="#ManajemenEors">
                <div class="card-body">
                    <div class="table-responsive">

                        <?php if ($group[0]['group_id'] == "1" && new DateTime(date('Y-m-d H:i:s')) < new DateTime($kegiatan[0]['waktu_mulai'])) { ?>
                        <a href="<?= base_url() ?>etika/reset_all_token/<?= base64_encode(base64_encode($id_kegiatan)) ?>"
                            class="btn ml-2 btn-danger btn-sm btn-icon-split mb-4 tombol-reset">
                            <span class="icon text-white-50">
                                <i class="fas fa-times"></i>
                            </span>
                            <span class="text">Reset All Token</span>
                        </a>
                        <?php if ($kegiatan[0]['mode'] == "1" && new DateTime(date('Y-m-d H:i:s')) < new DateTime($kegiatan[0]['waktu_mulai'])) { ?>
                        <a href="<?= base_url() ?>etika/create_all_token/<?= base64_encode(base64_encode($id_kegiatan)) ?>"
                            class="btn ml-2 btn-info btn-sm btn-icon-split mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Create All Token</span>
                            <?php } ?>
                        </a>
                        <a href="<?= base_url() ?>etika/unduh_excel_manajemen/<?= base64_encode(base64_encode($id_kegiatan)) ?>"
                            class="btn ml-2 btn-primary btn-sm btn-icon-split mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-download"></i>
                            </span>
                            <span class="text">Download Excel</span>
                        </a>
                        <?php } ?>
                        <table class="table table-bordered" id="tableKandidat" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nim</th>
                                    <th>IP Address</th>
                                    <th>Browser</th>
                                    <th>Perangkat</th>
                                    <th>Nama Pemilih</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Prodi</th>
                                    <th>Semester</th>
                                    <th>Status</th>
                                    <th>Handle By</th>
                                    <th>Fitur</th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- Lakukan foreach disini untuk menampilkan isi data dari kegiatan -->
                                <?php

                                    foreach ($pemilih as $data) : ?>
                                <tr>

                                    <td><?= $data['nim'] ?></td>
                                    <?php if (empty($data['ip_address']) && empty($data['browser']) && empty($data['perangkat'])) : ?>
                                    <td>Belum Login</td>
                                    <td>Belum Login</td>
                                    <td>Belum Login</td>
                                    <?php else : ?>
                                    <td><?= $data['ip_address'] ?></td>
                                    <td><?= $data['browser'] ?></td>
                                    <td><?= $data['perangkat'] ?></td>
                                    <?php endif; ?>
                                    <td><?= $data['nama_pemilih'] ?></td>
                                    <?php if (!empty($data['email'])) : ?>
                                    <td><?= $data['email'] ?></td>
                                    <?php else : ?>
                                    <td> <span class="text-danger">Tidak Ada Email</span></td>
                                    <?php endif; ?>
                                    <td><?= $data['username'] ?></td>
                                    <td><?= $data['prodi'] ?></td>
                                    <td><?= $data['semester'] ?></td>
                                    <td><?php if ($data['has_voting'] == 0) : ?>
                                        <a href="#" class="btn btn-warning btn-sm mb-2">
                                            <span class=" text">Belum memilih</span>
                                        </a>
                                        <?php else : ?>
                                        <a href="#" class="btn btn-success btn-sm mb-2">
                                            <span class=" text">Sudah memilih</span>
                                        </a>
                                        <?php endif; ?>

                                        <?php if (!empty($data['token']) && new DateTime(date('Y-m-d H:i:s')) <= new DateTime($data['token_valid_until'])) : ?>
                                        <a href="#" class="btn btn-success btn-sm mb-1 ">
                                            <span class=" text">Token Masih</span>
                                        </a>
                                        <?php elseif (empty($data['token']) || empty($data['token_valid_until'])) : ?>
                                        <a href="#" class="btn btn-warning btn-sm mb-1 ">
                                            <span class=" text">Belum Generate</span>
                                        </a>
                                        <?php else : ?>
                                        <a href="#" class="btn btn-danger btn-sm mb-1 ">
                                            <span class=" text">Token Habis</span>
                                        </a>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php if (empty($data['manage_by']) && $kegiatan[0]['mode'] == "0" && $kegiatan[0]['mode'] == "2") :
                                                    echo "Email";
                                                elseif (empty($data['manage_by']) && $kegiatan[0]['mode'] == "1") :
                                                    echo "";
                                                else :
                                                    echo $data['manage_by'];
                                                endif;
                                                ?>
                                    </td>
                                    <td>
                                        <?php if (new DateTime(date('Y-m-d H:i:s')) >= new DateTime($kegiatan[0]['waktu_mulai'])  && new DateTime(date('Y-m-d H:i:s')) <= new DateTime($kegiatan[0]['waktu_selesai'])) { ?>
                                        <a href="<?= base_url() ?>etika/generate_token_manual/<?= base64_encode(base64_encode($data['id_kegiatan'])) ?>/<?= base64_encode(base64_encode($data['id_pemilih'])) ?>"
                                            class="btn btn-warning btn-sm btn-icon-split" title="Generate Manual Token">
                                            <span class="text">Generate Manual</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="#" class="btn btn-warning btn-sm btn-icon-split"
                                            title="Generate Manual Token">
                                            <span class="text">Generate Manual</span>
                                        </a>
                                        <?php } ?>
                                        <button class="btn btn-info mt-2 btn-sm btn-icon-split" data-toggle="modal"
                                            data-target="#view-<?= $data['id_pemilih'] ?>" title="View Token">
                                            <span class="text">View Token</span>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="view-<?= $data['id_pemilih'] ?>" tabindex="-1"
                                            aria-labelledby="view-label<?= $data['id_pemilih'] ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="view-label<?= $data['id_pemilih'] ?>">Data Token
                                                            <span class="text-primary"><?= $data['nim'] ?></span>
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body justify-content-center row">
                                                        <table id="table-token" style="text-align:center">
                                                            <?php if (empty($data['token'])) : ?>
                                                            <tr>
                                                                <td style="border: none !important;">Belum Di Generate
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="border: none !important;">
                                                                    <?php
                                                                                if (new DateTime(date('Y-m-d H:i:s')) > new DateTime($kegiatan[0]['waktu_selesai'])) : ?>
                                                                    <div class="alert alert-danger col-12" role="alert">
                                                                        Waktu Voting Telah Usai !!
                                                                    </div>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                            <?php else : ?>
                                                            <tr>
                                                                <td style="border: none !important;">
                                                                    <h3><?= $data['token'] ?></h3>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" style="border: none !important;">
                                                                    <div id="qrcode_<?= $data['id_pemilih'] ?>"
                                                                        class="">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="border: none !important;">Berlaku Sampai:
                                                                    <?= $data['token_valid_until'] ?> WITA
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="border: none !important;">
                                                                    <?php
                                                                                if (new DateTime(date('Y-m-d H:i:s')) > new DateTime($kegiatan[0]['waktu_selesai'])) : ?>
                                                                    <div class="alert alert-danger col-12" role="alert">
                                                                        Waktu Voting Telah Usai !!
                                                                    </div>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                            <script type="text/javascript">
                                                            $(document).ready(function() {
                                                                //your code here
                                                                $('#qrcode_<?= $data['id_pemilih'] ?>').qrcode({
                                                                    text: "<?= $data['token'] ?>"
                                                                });
                                                            });
                                                            </script>
                                                            <?php endif; ?>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if (new DateTime(date('Y-m-d H:i:s')) >= new DateTime($kegiatan[0]['waktu_mulai'])  && new DateTime(date('Y-m-d H:i:s')) <= new DateTime($kegiatan[0]['waktu_selesai'])) { ?>
                                        <a href="<?= base_url() ?>etika/reset_token/<?= base64_encode(base64_encode($data['id_kegiatan'])) ?>/<?= base64_encode(base64_encode($data['id_pemilih'])) ?>"
                                            class="btn btn-danger mt-2 btn-sm btn-icon-split tombol-reset"
                                            title="Reset Token">
                                            <span class="text">Reset Token</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="#" class="btn btn-danger mt-2 btn-sm btn-icon-split tombol-reset"
                                            title="Reset Token">
                                            <span class="text">Reset Token</span>
                                        </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>