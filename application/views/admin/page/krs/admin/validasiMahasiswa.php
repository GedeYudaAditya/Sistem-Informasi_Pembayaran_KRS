<!-- Start Container  -->
<div class="container-fluid">


  <!-- Start  Table -->
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="row px-4 d-flex flex-md-row justify-content-between align-items-center">
          <h5 class="col-4 col-md-3 py-2 text-dark user-select-none font-weight-bold">Validasi Bukti Iuran</h5>
          <div class="col-8  form-group justify-content-end input-group ">
            <form class="d-flex py-2  align-items-center" action="" method="post" enctype="multipart/form">
              <select name="select" class="custom-select mx-1" id="inputGroupSelect01">
                <option selected disabled>Select Dosen</option>
                <option value='1'>Dosen 1</option>
                <option value='2'>Dosen 2</option>
                <option value='3'>Dosen 3</option>
              </select>
              <select class="custom-select mx-1" name="validStatus" id="validStatus">
                <option selected disabled>Select Status</option>
                <option value='1'>Tervalidasi</option>
                <option value='0'>Belum tervalidasi</option>
              </select>
              <button type="submit" class="btn btn-primary">Filter</button>
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
                    <td>
                      <div>
                        <?php if ($b->valid == 0) : ?>
                          <p class="text-danger">Belum tervalidasi</p>
                        <?php elseif ($b->valid == 1) : ?>
                          <p class="text-success">Tervalidasi</p>
                        <?php endif; ?>
                      </div>
                    </td>
                    <td>
                      <div>
                        <button type="button" data-toggle="modal" data-target="#detail_data_pembayaran<?= $b->id; ?>" class="btn btn-sm btn-primary">
                          Lihat Detail
                        </button>
                        <div class="modal fade" id="detail_data_pembayaran<?= $b->id; ?>" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Detail Bukti Pembayaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-sm-4">
                                    <h6>Nama</h6>
                                    <h6>NIM</h6>
                                  </div>
                                  <div class="col-sm-4">
                                    <h6>:<?= $b->nama_mhs; ?></h6>
                                    <h6>:<?= $b->nim; ?></h6>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-4">
                                    <h6>File bukti:</h6>
                                  </div>
                                  <div class="col-sm-4">
                                    <p class="text-sm-left">:<?= $b->bukti; ?></p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-12">
                                    <img class="img-fluid" src="<?= base_url(); ?>assets/img/test/test-bukti.jpg" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <a class="btn btn-primary" href="<?= base_url(); ?>krs/validasiBukti/<?= $b->id; ?>">Terima</a>
                                <a class="btn btn-danger" href="<?= base_url(); ?>krs/tolakBukti/<?= $b->id; ?>">Tolak</a>
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