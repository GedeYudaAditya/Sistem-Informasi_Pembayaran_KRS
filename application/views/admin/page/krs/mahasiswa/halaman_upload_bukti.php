<div class="text-center">
    <h3 class="text-dark"><?= $title; ?></h3>
</div>
<div class="container h-100 mb-3">
    <div class="row justify-content-center h-100">
        <div class="col-12 col-md-10 col-lg-12">
            <div class="subscribe-content contact-box rounded p-4  mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-12">
                        <div class="container center">

                            <form name="upload" method="post" action="<?= base_url(); ?>krs/simpan_bukti" enctype="multipart/form-data" accept-charset="utf-8">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12">
                                        <div class="btn-container shadow-lg ">
                                            <!-- Hidden input -->
                                            <input type="hidden" name="mahasiswa_id" value="<?= $mahasiswa['id_mhs']; ?>">
                                            <input type="hidden" name="nama" value="<?= $mahasiswa['first_name']; ?>">
                                            <input type="hidden" name="nim" value="<?= $mahasiswa['last_name']; ?>">
                                            <input type="hidden" name="form_id" value="<?= $form_bukti[0]['id_form']; ?>">
                                            <p class="form_tagline">Drag & Drop Your File Here...</p>
                                            <h1 class="imgupload"><i class="fa fa-file-pdf" aria-hidden="true"></i></h1>
                                            <h1 class="imgupload ok"><i class="fa fa-check-circle"></i></h1>
                                            <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                                            <p id="namefile">Only document allowed! (pdf)</p>

                                            <!-- <button type="button" id="btnup" class="btn btn-success btn-lg">Browse</button> -->
                                            <input type="file" value="" name="file_bukti" id="fileup">
                                        </div>
                                    </div>
                                </div>
                                <!--additional fields-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <!--the defauld disabled btn and the actual one shown only if the three fields are valid-->
                                        <input type="submit" value="Submit!" class="btn btn-primary" id="submitbtn">
                                        <button type="button" class="btn btn-default" disabled="disabled" id="fakebtn">Submit! <i class="fa fa-minus-circle"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>