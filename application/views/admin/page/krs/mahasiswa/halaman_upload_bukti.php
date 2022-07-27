<div class="text-center">
    <h3 class="text-dark">Upload Bukti Pembayaran</h3>
</div>
<div class="container h-100 mb-3">
    <div class="row justify-content-center h-100">
        <div class="col-12 col-md-10 col-lg-12">
            <div class="subscribe-content contact-box rounded p-4  mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-12">
                        <form action="" method="post">
                            <div class="form-group ">
                                <label for="nama_lengkap">Nama</label>
                                <input type="text" class="form-control <?= form_error('nama_lengkap') ? 'is-invalid' : NULL; ?>" id="nama_lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap', $this->session->userdata('current_client')); ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('nama_lengkap'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control <?= form_error('nim') ? 'is-invalid' : NULL; ?>" id="nim" name="nim">
                                <div class="invalid-feedback">
                                    <?= form_error('nim'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prodi">Prodi</label>
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <?php foreach ($prodis as $prodi) : ?>
                                        <option><?= $prodi['prodi']; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                </div>
                            </div>
                            <div class="float-right my-3">
                                <button type="submit" class="btn btn-success">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>