        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                            <h3 class="text-white">Agenda <?php
                                                            $daftar_hari = array(
                                                                'Sunday' => 'Minggu',
                                                                'Monday' => 'Senin',
                                                                'Tuesday' => 'Selasa',
                                                                'Wednesday' => 'Rabu',
                                                                'Thursday' => 'Kamis',
                                                                'Friday' => 'Jumat',
                                                                'Saturday' => 'Sabtu'
                                                            );
                                                            $data_tanggal =  $detail_hari[0]['nama_hari_integer'];
                                                            $hari = date('l', strtotime($data_tanggal));
                                                            $tanggal = date('d F Y', strtotime($data_tanggal));
                                                            echo $daftar_hari[$hari] . ", " . $tanggal;
                                                            ?>

                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!--====== Jadwal Area Start ======-->
        <section class="review-area bg-gray ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-12">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-3" id="dataTable" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Kegiatan</th>
                                                <th>Tempat Pelaksanaan</th>
                                                <th>Waktu Pelaksanaan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($detail_hari as $data) { ?>
                                            <tr>
                                                <td><?= $data['nama_detail_hari_integer'] ?></td>
                                                <td><?= $data['tempat_detail_hari_integer'] ?></td>
                                                <td><?= $data['waktu_mulai'] ?> -
                                                    <?= $data['waktu_akhir'] ?> WITA</td>
                                                <td>
                                                    <?php if ($data['nama_hari_integer'] == date('Y-m-d') && date('H:i:s') >= $data['waktu_mulai'] && date('H:i:s') <= $data['waktu_akhir']) { ?>
                                                    <div class="bg-primary p-4 rounded">
                                                        <!-- Reviewer Thumb -->
                                                        <div class="text-center ml-4">
                                                            <h6 class="text-light fw-6">Berlangsung
                                                        </div>
                                                    </div>
                                                    <?php } else if (($data['nama_hari_integer'] == date('Y-m-d') && date('H:i:s') < $data['waktu_mulai']) || ($data['nama_hari_integer'] > date('Y-m-d') && date('H:i:s'))) { ?>
                                                    <div class="bg-gray p-4 rounded">
                                                        <!-- Reviewer Thumb -->
                                                        <div class="text-center ml-4">
                                                            <h6 class="text-secondary fw-6">Upcoming
                                                        </div>
                                                    </div>
                                                    <?php } else { ?>
                                                    <div class="bg-gray p-4 rounded">
                                                        <!-- Reviewer Thumb -->
                                                        <div class="text-center ml-4">
                                                            <h6 class="text-secondary fw-6">Berakhir
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!--====== Jadwal Area End ======-->

        <!--====== Height Emulator Area Start ======-->
        <div class="height-emulator d-none d-lg-block"></div>
        <!--====== Height Emulator Area End ======-->