<section id="home" class="section welcome-area bg-overlay d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="welcome-intro">
                    <h3 class="text-white">Registrasi Akun Peminjaman Barang</h3>
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
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input value="<?php echo set_value('email'); ?>" type="email" class="form-control kecil <?= (!(validation_errors() == '') && (form_error('email') != '')) ? 'is-invalid form-error' : ''; ?>" id="email" name="email" aria-describedby="emailHelp">
                            <?php if (!(validation_errors() == '')) : ?>
                                <div class="error">
                                    <?= form_error('email', '<div style="color: red;">', '</div>') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="nama">Nama</label>
                                <input value="<?php echo set_value('nama'); ?>" type="text" class="form-control kecil <?= (!(validation_errors() == '') && (form_error('nama') != '')) ? 'is-invalid form-error' : ''; ?>" id="nama" name="nama">
                                <?php if (!(validation_errors() == '')) : ?>

                                    <div class="error">
                                        <?= form_error('nama', '<div style="color: red;">', '</div>') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group col-4">
                                <label for="nim">NIM</label>
                                <input value="<?php echo set_value('nim'); ?>" type="text" class="form-control kecil <?= (!(validation_errors() == '') && (form_error('nim') != '')) ? 'is-invalid form-error' : ''; ?>" id="nim" name="nim" maxlength="10" minlength="10">
                                <?php if (!(validation_errors() == '')) : ?>
                                    <div class="error">
                                        <?= form_error('nim', '<div style="color: red;">', '</div>') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group col-4">
                                <label for="organisasi">Nama Organisasi</label>
                                <input value="<?php echo set_value('organisasi'); ?>" type="text" class="form-control kecil <?= (!(validation_errors() == '') && (form_error('organisasi') != '')) ? 'is-invalid form-error' : ''; ?>" id="organisasi" name="organisasi">
                                <?php if (!(validation_errors() == '')) : ?>

                                    <div class="error">
                                        <?= form_error('organisasi', '<div style="color: red;">', '</div>') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="alamat">Alamat</label>
                                <input value="<?php echo set_value('alamat'); ?>" type="text" class="form-control kecil <?= (!(validation_errors() == '') && (form_error('alamat') != '')) ? 'is-invalid form-error' : ''; ?>" id="alamat" name="alamat">
                                <?php if (!(validation_errors() == '')) : ?>

                                    <div class="error">
                                        <?= form_error('alamat', '<div style="color: red;">', '</div>') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group col-6">
                                <label for="noTelp">No.Telp</label>
                                <input value="<?php echo set_value('noTelp'); ?>" type="tel" class="form-control kecil <?= (!(validation_errors() == '') && (form_error('noTelp') != '')) ? 'is-invalid form-error' : ''; ?>" id="noTelp" name="noTelp">
                                <?php if (!(validation_errors() == '')) : ?>

                                    <div class="error">
                                        <?= form_error('noTelp', '<div style="color: red;">', '</div>') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control kecil <?= (!(validation_errors() == '') && (form_error('password') != '')) ? 'is-invalid form-error' : ''; ?>" id="password" name="password">
                                <?php if (!(validation_errors() == '')) : ?>

                                    <div class="error">
                                        <?= form_error('password', '<div style="color: red;">', '</div>') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group col-6">
                                <label for="password2">Confirm Password</label>
                                <input type="password" class="form-control kecil <?= (!(validation_errors() == '') && (form_error('password2') != '')) ? 'is-invalid form-error' : ''; ?>" id="password2" name="password2">
                                <?php if (!(validation_errors() == '')) : ?>

                                    <div class="error">
                                        <?= form_error('password2', '<div style="color: red;">', '</div>') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-reg-inv btn-glow icon w-100 mt-3 mt-sm-4" name="submit" type="submit" id="submit">
                                Registrasi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>