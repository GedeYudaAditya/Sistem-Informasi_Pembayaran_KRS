<div class="text-center">
    <h3 class="text-dark">Upload Bukti Pembayaran</h3>
</div>
<div class="container h-100 mb-3">
    <div class="row justify-content-center h-100">
        <div class="col-12 col-md-10 col-lg-12">
            <div class="subscribe-content contact-box rounded p-4  mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-12">
                        <form action="simpan_bukti" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="mahasiswa_id" value="<?= $mahasiswa['id_mhs']; ?>">
                            <input type="hidden" name="nama" value="<?= $mahasiswa['first_name']; ?>">
                            <input type="hidden" name="nim" value="<?= $mahasiswa['last_name']; ?>">
                            <input type="hidden" name="form_id" value="<?= $form_bukti[0]['id']; ?>">
                            <div class="custom-file mb-2">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= $this->session->flashdata('file_error') ? 'is-invalid' : ''; ?>" id="file_bukti" name="file_bukti">
                                    <label class="custom-file-label" for="file_bukti">Choose file .pdf or .png</label>
                                    <div class="invalid-feedback">
                                        <?= $this->session->flashdata('file_error'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-success">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>