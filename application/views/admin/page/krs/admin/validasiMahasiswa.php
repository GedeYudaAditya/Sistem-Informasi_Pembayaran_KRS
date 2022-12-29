<!-- Start Container  -->
<div class="container-fluid">


  <!-- Start  Table -->
  <div class="row">
    <div class="col-12">
      <div class="card mb-4 p-3">
        <div class="row px-4 d-flex flex-md-row justify-content-between align-items-center">
          <h5 class="col-4 col-md-3 py-2 text-dark user-select-none font-weight-bold">Validasi Bukti Iuran</h5>
          <div class="col-8  form-group justify-content-end input-group ">
            <form class="d-flex py-2 px-0 mx-0 align-items-center" action="" method="post" enctype="multipart/form">
              <!-- <select name="select" class="custom-select mx-1" id="inputGroupSelect01">
                <option selected disabled>Select Dosen</option>
                <option value='1'>Dosen 1</option>
                <option value='2'>Dosen 2</option>
                <option value='3'>Dosen 3</option>
              </select> -->
              <select class="custom-select mx-1" name="validStatus" id="validStatus">
                <option selected disabled>No Filter</option>
                <option value="none">Semua</option>
                <option value='1'>Tervalidasi</option>
                <option value='0'>Belum tervalidasi</option>
                <option value='tolak'>Ditolak</option>
              </select>
              <button type="submit" class="btn btn-primary" name="statusButton">Filter</button>
            </form>
            <form action="<?= base_url() ?>krs/printCSV" class="d-flex py-2 px-0 mx-0 align-items-center" method="post">
              <button type="submit" class="btn btn-success mx-1" name="export"><i class="fa fa-download" aria-hidden="true"></i></button>
            </form>
          </div>
        </div>
        <div class="card-body px-2 pt-2 pb-2">
          <div class="table-responsive">
            <table id="tableBuktiIuran" class="table align-items-center">
              <thead>
                <tr class="fw-bold">
                  <td>No</td>
                  <td>Nama</td>
                  <td>NIM</td>
                  <td>Prodi</td>
                  <td>Status</td>
                  <td>Validasi</td>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php foreach ($bukti as $b) : ?>
                  <tr>
                    <td>
                      <?php if ($i > 9) : ?>
                        <p><?= $i++ ?></p>
                      <?php else : ?>
                        <p>0<?= $i++ ?></p>
                      <?php endif; ?>
                    </td>
                    <td>
                      <div>
                        <p><?php echo $b->nama_mhs ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p><?php echo $b->nim ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p><?php echo $b->prodi ?></p>
                      </div>
                    </td>
                    <td class="row align-items-center justify-content-center">
                      <div class="">
                        <?php if ($b->valid == 0 && $b->is_rejected == 0) : ?>
                          <p class="px-2 py-1 badge badge-warning m-0">Belum tervalidasi</p>
                        <?php elseif ($b->valid == 1 && $b->is_rejected == 0) : ?>
                          <p class="px-2 py-1 badge badge-success m-0">Tervalidasi</p>
                        <?php elseif ($b->valid == 0 && $b->is_rejected == 1) : ?>
                          <p class="px-2 py-1 badge badge-danger m-0">Ditolak</p>
                        <?php endif; ?>
                      </div>
                    </td>
                    <td>
                      <div>
                        <button type="button" data-toggle="modal" data-target="#detail_data_pembayaran<?= $b->id; ?>" class="btn btn-sm btn-primary">
                          Lihat Detail
                        </button>
                        <div class="modal fade" id="detail_data_pembayaran<?= $b->id; ?>" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Detail Bukti Pembayaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="container m-0 px-3 pb-0">
                                  <div class="row">
                                    <div class="col-sm-4">
                                      <h6>Nama</h6>
                                      <h6>NIM</h6>
                                      <h6>Prodi</h6>
                                    </div>
                                    <div class="col-sm-4">
                                      <h6>: <?= $b->nama_mhs; ?></h6>
                                      <h6>: <?= $b->nim; ?></h6>
                                      <h6>: <?= $b->prodi; ?></h6>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-4">
                                      <h6>File bukti:</h6>
                                    </div>
                                    <div class="col-sm-4">
                                      <?php if ($b->bukti != null) : ?>
                                        <p class="text-sm-left">:
                                          <?= $b->bukti; ?>
                                        </p>
                                      <?php else : ?>
                                        <p class="text-sm-left text-danger">:
                                          Tidak ada file
                                        </p>
                                      <?php endif; ?>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-12 row justify-content-center">
                                    <!--Note: nama file masih procsess -->
                                    <div class="container col-md-8">
                                      <?php if ($b->bukti != null) : ?>
                                        <img class="img-fluid img-thumbnail p-2 shadow" id="myImg<?= $b->nim ?>" src="<?= base_url(); ?>assets/upload/Folder_krs/<?= $b->bukti; ?>" alt="<?= $b->nama_mhs; ?>">
                                      <?php else : ?>
                                        <img class="img-fluid img-thumbnail p-2 shadow" id="myImg<?= $b->nim ?>" src="<?= base_url(); ?>assets/img/Image_not_available.png" alt="<?= $b->nama_mhs; ?>">
                                      <?php endif; ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <?php if ($b->valid == 0 && $b->is_rejected == 0) : ?>
                                  <a class="btn btn-success" href="<?= base_url(); ?>krs/validasiBukti/<?= $b->id; ?>">Terima</a>
                                  <a class="btn btn-danger" href="<?= base_url(); ?>krs/tolakBukti/<?= $b->id; ?>">Tolak</a>
                                  <button class="btn btn-primary" data-dismiss="modal" aria-label="Close">Kembali</button>
                                <?php else : ?>
                                  <button class="btn btn-primary" data-dismiss="modal" aria-label="Close">Kembali</button>
                                <?php endif ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
  <!-- End Table -->

</div>
<!-- End Container -->
<style>
  /* Style the Image Used to Trigger the Modal */
  #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
  }

  #myImg:hover {
    opacity: 0.7;
  }

  /* The Modal (background) */
  .modals {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 100000;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.9);
    /* Black w/ opacity */
  }

  /* Modal Content (Image) */
  .modal-contents {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
  }

  /* Caption of Modal Image (Image Text) - Same Width as the Image */
  #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
  }

  /* Add Animation - Zoom in the Modal */
  .modal-contents,
  #caption {
    animation-name: zoom;
    animation-duration: 0.6s;
  }

  @keyframes zoom {
    from {
      transform: scale(0)
    }

    to {
      transform: scale(1)
    }
  }

  /* The Close Button */
  .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
  }

  .close:hover,
  .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }

  /* 100% Image Width on Smaller Screens */
  @media only screen and (max-width: 700px) {
    .modal-contents {
      width: 100%;
    }
  }
</style>

<?php
foreach ($bukti as $value) :
?>

  <!-- The Modal -->
  <div id="myModals<?= $value->nim ?>" class="modals">

    <!-- The Close Button -->
    <span class="close close<?= $value->nim ?>">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-contents" id="img<?= $value->nim ?>">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById("myModals<?= $value->nim ?>");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg<?= $value->nim ?>");
    var modalImg = document.getElementById("img<?= $value->nim ?>");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
    console.log(modal);

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close<?= $value->nim ?>")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>

<?php
endforeach;
?>