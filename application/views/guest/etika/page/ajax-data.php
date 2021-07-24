<?php if ($id_send == "1") : ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 mb-4">Live Count Kegiatan EVOTING</h1>
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="kepengurusan">
                <h6 class="m-0 font-weight-bold text-primary">Live Count Kegiatan</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="kepengurusan">
                <div class="card-body row justify-content-center">
                    <div class="row col-lg-12">

                        <div class="col-lg-6 col-md-6">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 text-center">
                                            <h5 class="font-weight-bold text-primary text-uppercase mb-2 text-center">
                                                Berdasarkan Prodi</h5>
                                            <div id="form-diagram">
                                                <input type="hidden" value="<?= $digSI ?>" id="SI_Diagram">
                                                <input type="hidden" value="<?= $digMI ?>" id="MI_Diagram">
                                                <input type="hidden" value="<?= $digIlkom ?>" id="Ilkom_Diagram">
                                                <input type="hidden" value="<?= $digPTI ?>" id="PTI_Diagram">
                                            </div>
                                            <div class="col-12">
                                                <canvas id="prodiChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 text-center">
                                            <h5 class="font-weight-bold text-primary text-uppercase mb-2 text-center">
                                                Berdasarkan Semester</h5>
                                            <div id="form-diagram-semester">
                                                <input type="hidden" value="<?= $sem_a ?>" id="A_Diagram">
                                                <input type="hidden" value="<?= $sem_b ?>" id="B_Diagram">
                                                <input type="hidden" value="<?= $sem_c ?>" id="C_Diagram">
                                                <input type="hidden" value="<?= $sem_d ?>" id="D_Diagram">
                                                <input type="hidden" value="<?= $sem_etc ?>" id="Etc_Diagram">
                                            </div>
                                            <div class="col-12">
                                                <canvas id="semesterChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 text-center">
                                            <h5 class="font-weight-bold text-primary text-uppercase mb-2 text-center">
                                                Berdasarkan Kandidat</h5>
                                            <div id="form-diagram-kandidat">
                                                <?php
                                                    $arrs = array();
                                                    for ($i = 1; $i <= $jml_kandidat; $i++) {
                                                        array_push($arrs, $kandidat[$i]);
                                                    }
                                                    ?>
                                                <?php
                                                    $i = 0;
                                                    foreach ($arrs as $arr) : ?>
                                                <input type="hidden" value="<?= $arr ?>" id="Diagram<?= $i++ ?>">
                                                <?php
                                                    endforeach;
                                                    unset($arrs);
                                                    ?>
                                                <input type="hidden" value="<?= $i ?>" id="count">
                                            </div>
                                            <div class="col-12">
                                                <canvas id="kandidatChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 text-center">
                                            <h5 class="font-weight-bold text-primary text-uppercase mb-2 text-center">
                                                Berdasarkan Pemilih</h5>
                                            <div id="form-diagram-pemilih">
                                                <input type="hidden" value="<?= $jml_sudah_voting ?>"
                                                    id="sudah_Diagram">
                                                <input type="hidden" value="<?= $jml_belum_voting ?>"
                                                    id="belum_Diagram">
                                            </div>
                                            <div class="col-12">
                                                <canvas id="pemilihChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== Modal Developer Area End ======-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php else : ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-7">
            <!-- Section Heading -->
            <div class="section-heading">
                <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                    <i class="far fa-lightbulb text-primary mr-1"></i>
                    <span class="text-primary">Go</span>
                    Technology
                </span>
                <h2>Live Count</h2>
            </div>

        </div>
    </div>
    <?php
        $tgl_system = strtotime($kegiatan[0]['waktu_selesai']);
        $now = strtotime(date('Y-m-d H:i:s'));
        $beda = $tgl_system - $now;
        if ($beda <= 1800) :
        ?>
    <div class="row justify-content-center">
        <div class="alert col-12 alert-info text-center" role="alert">
            Menit-Menit Akhir Menuju Waktu Akhir Pemilihan Raya
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 my-3 res-margin">
            <!-- Image Box -->
            <div class="image-box col-12 text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s"
                data-wow-delay="0.4s">
                <!-- Icon Text -->
                <div class="icon-text">
                    <h3 class="mb-4">Berdasarkan Prodi</h3>
                </div>
                <div id="form-diagram">
                    <input type="hidden" value="<?= $digSI ?>" id="SI_Diagram">
                    <input type="hidden" value="<?= $digMI ?>" id="MI_Diagram">
                    <input type="hidden" value="<?= $digIlkom ?>" id="Ilkom_Diagram">
                    <input type="hidden" value="<?= $digPTI ?>" id="PTI_Diagram">
                </div>
                <div class="col-12">
                    <canvas id="prodiChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 my-3 res-margin">
            <!-- Image Box -->
            <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-aos-duration="2s" data-wow-delay="0.2s">

                <!-- Icon Text -->
                <div class="icon-text">
                    <h3 class="mb-4">Berdasarkan Semester</h3>
                </div>
                <div id="form-diagram-semester">
                    <input type="hidden" value="<?= $sem_a ?>" id="A_Diagram">
                    <input type="hidden" value="<?= $sem_b ?>" id="B_Diagram">
                    <input type="hidden" value="<?= $sem_c ?>" id="C_Diagram">
                    <input type="hidden" value="<?= $sem_d ?>" id="D_Diagram">
                    <input type="hidden" value="<?= $sem_etc ?>" id="Etc_Diagram">
                </div>
                <div class="col-12">
                    <canvas id="semesterChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 my-3 res-margin">
            <!-- Image Box -->
            <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-aos-duration="2s" data-wow-delay="0.4s">
                <!-- Featured Image -->

                <!-- Icon Text -->
                <div class="icon-text">
                    <h3 class="mb-2">Berdasarkan Kandidat</h3>

                    <div id="form-diagram-kandidat">
                        <?php
                            $arrs = array();
                            for ($i = 1; $i <= $jml_kandidat; $i++) {
                                array_push($arrs, $kandidat[$i]);
                            }
                            ?>
                        <?php
                            $i = 0;
                            foreach ($arrs as $arr) : ?>
                        <input type="hidden" value="<?= $arr ?>" id="Diagram<?= $i++ ?>">
                        <?php
                            endforeach;
                            unset($arrs);
                            ?>
                        <input type="hidden" value="<?= $i ?>" id="count">
                    </div>
                    <div class="col-12">
                        <canvas id="kandidatChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 my-3 res-margin">
            <!-- Image Box -->
            <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.8s">
                <!-- Featured Image -->

                <!-- Icon Text -->
                <div class="icon-text">
                    <h3 class="mb-2">Perbandingan Jumlah Pemilih</h3>
                    <div id="form-diagram-pemilih">
                        <input type="hidden" value="<?= $jml_sudah_voting ?>" id="sudah_Diagram">
                        <input type="hidden" value="<?= $jml_belum_voting ?>" id="belum_Diagram">
                    </div>
                    <div class="col-12">
                        <canvas id="pemilihChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h6 class="mt-5">Update Terakhir Pada : <?= date('H:i') ?> Wita - Sistem Etika HMJ TI Undiksha</h6>
</div>





<?php endif; ?>