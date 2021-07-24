<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 mb-4">Kandidat EVOTING Kegiatan <span
                class="text-primary "><?= $kegiatan[0]['nama_kegiatan'] ?></span> </h1>
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
            <?php
                $tgl_selesai = new DateTime($kegiatan[0]['waktu_mulai']);
                $tgl_hari_ini = new DateTime(date('Y-m-d H:i:s'));

                $diff = $tgl_selesai->diff($tgl_hari_ini);
                echo "Voting Dimulai dalam " . $diff->d . " hari " . $diff->h . " jam " . $diff->i . " menit ";
                ?>
        </div>
        <?php endif; ?>
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="kepengurusan">
                <h6 class="m-0 font-weight-bold text-primary">Surat Suara Elektronik Sistem ETIKA</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="kepengurusan">
                <div class="card-body row justify-content-center">
                    <div class="row col-lg-12">
                        <?php if ($pemilih[0]['has_voting'] == 0) : ?>
                        <?php foreach ($kandidat as $data) : ?>
                        <div class="col-lg-4 col-md-6 mt-3">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 text-center">
                                            <h2 class="font-weight-bold text-primary text-uppercase mb-2 text-center">
                                                <?= $data['no_urut'] ?></h2>
                                            <img class="lazyload"
                                                data-src="<?= base_url() ?>assets/upload/Folder_etika/<?= $data['foto'] ?>"
                                                src="<?= base_url() ?>assets/upload/Folder_etika/<?= $data['foto'] ?>"
                                                alt="" width="60%">
                                            <h5 class="mb-4 mt-5"><?= $data['nama_ketua'] ?> -
                                                <?= $data['nama_wakil'] ?>
                                            </h5>
                                        </div>
                                    </div>
                                    <a href="#"><button type="submit" class="btn btn-primary btn-user  btn-block mt-2"
                                            data-toggle="modal" data-target="#voting-<?= $data['id_kandidat'] ?>">
                                            Voting</button></a>
                                </div>
                            </div>
                        </div>
                        <!--====== Modal Developer Area Start ======-->
                        <div class="modal fade" id="voting-<?= $data['id_kandidat'] ?>" tabindex="-1" role="dialog"
                            aria-labelledby="devModalLabel-<?= $data['id_kandidat'] ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="devModalLabel-<?= $data['id_kandidat'] ?>">Visi dan
                                            Misi</h5>
                                    </div>
                                    <div class="modal-body text-center">
                                        <h5>Visi</h5>
                                        <?= $data['visi'] ?>

                                        <hr>
                                        <h5>Misi</h5>
                                        <div class="text-justify">
                                            <?= $data['misi'] ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Batal</button>
                                        <?php if ((new DateTime(date('Y-m-d H:i:s')) >= new DateTime($kegiatan[0]['waktu_mulai']) && new DateTime(date('Y-m-d H:i:s')) <= new DateTime($kegiatan[0]['waktu_selesai']))) : ?>
                                        <a
                                            href="<?= base_url() ?>etika/save_vote/<?= base64_encode(base64_encode($data['id_kandidat'])) ?>"><button
                                                type="button" class="btn btn-primary">Voting
                                                Kandidat</button></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== Modal Developer Area End ======-->
                        <?php endforeach; ?>
                        <?php else : ?>
                        <div class="col-lg-12">
                            <h6 class="text-center">Anda Telah Melakukan EVOTING, Bukti Sah Pemilihan telah dikirim ke
                                Email
                                Anda :)</h6>
                            <h6 class="text-center"><a href="<?=base_url()?>etika/logout">Keluar dari Sistem >></a></h6>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
<!-- End of Main Content -->