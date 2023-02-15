<section id="home" class="section pt-5 bg-overlay d-flex align-items-center" style="background-image: url('<?= base_url() ?>assets/img/bg/welcome-bg.jpg');">
    <div class="container mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="welcome-intro">
                    <h3 class="text-white">Lengkapi Data Peminjaman Barang</h3>
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
                <div class="container p-5 rounded" style="color:white;">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-white">Tentukan banyak masing-masing barang :</p>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($lookBarang as $p) : ?>
                                <div class="form-group col-12 col-md-3">
                                    <input type="text" name="kodeBarang[]" hidden value="<?= $p[0]['kodeBarang'] ?>">
                                    <label for="banyak<?= $p[0]['kodeBarang'] ?>"><b><?= $p[0]['namaBarang'] ?></b></label>
                                    <input value="<?php echo set_value('banyak'); ?>" type="number" min="1" max="<?= $p[0]['banyakBarang'] - $p[0]['barangDipinjam'] ?>" class="form-control kecil <?= (!(validation_errors() == '') && (form_error('banyak') != '')) ? 'is-invalid form-error' : ''; ?>" id="banyak<?= $p[0]['kodeBarang'] ?>" name="banyak[]" required>
                                    <?php if (!(validation_errors() == '')) : ?>

                                        <div class="error">
                                            <?= form_error('banyak', '<div style="color: red;">', '</div>') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="lamaPinjam">Lama Pinjam</label>
                                <input value="<?php echo set_value('lamaPinjam'); ?>" type="date" min="<?= date('Y-m-d'); ?>" class="form-control kecil <?= (!(validation_errors() == '') && (form_error('lamaPinjam') != '')) ? 'is-invalid form-error' : ''; ?>" id="lamaPinjam" name="lamaPinjam" required>
                                <?php if (!(validation_errors() == '')) : ?>
                                    <div class="error">
                                        <?= form_error('lamaPinjam', '<div style="color: red;">', '</div>') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>



                        <div class="<?= (!(validation_errors() == '') && (form_error('deskripsiPinjam') != '')) ? 'is-invalid form-error' : ''; ?>">
                            Deskripsi Singkat Mengapa Anda Perlu Meminjam Barang Tersebut</div>
                        <textarea class="p-3" style="width:100%" type="text" id="deskripsi_singkat" rows="5" name="deskripsiPinjam" required><?= set_value('deskripsi') ?></textarea>

                        <?php if (!(validation_errors() == '')) : ?>
                            <div class="error">
                                <?= form_error('deskripsiPinjam', '<div style="color: red;">', '</div>') ?>
                            </div>
                        <?php endif; ?>

                        <div class="row justify-content-center">
                            <div class="col-3">
                                <button class="btn btn-reg-inv w-100 mt-3 mt-sm-4" name="submit" type="submit" id="submit">
                                    Ajukan Permintaan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>