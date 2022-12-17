<!-- Start Container  -->
<div class="container-fluid">


  <!-- Start  Table -->
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="row px-4 d-flex flex-md-row justify-content-between align-items-center">
          <h5 class="col-4 col-md-3 py-2 text-dark user-select-none font-weight-bold">Validasi Bukti Iuran</h5>
          <div class="col-8  form-group justify-content-end input-group ">
            <form class="d-flex py-2  align-items-center" action="<?php echo base_url(); ?>krs/lihatBukti/10" method="post" enctype="multipart/form">
              <select name="select" class="custom-select mx-1" id="inputGroupSelect01">
                <option selected disabled>Select Dosen</option>
                <option value='1'>Pak Ardwi</option>
                <option value='2'>Pak Wiguna</option>
                <option value='3'>Pak Surya</option>
              </select>
              <select name="select" class="custom-select mx-1" id="inputGroupSelect01">
                <option selected disabled>Semester</option>
                <option value='genap'>Genap</option>
                <option value='ganjil'>Ganjil</option>
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
        <div class="card-body px-0 pt-2 pb-2">
          <div class="table-responsive">
            <table class="table align-items-center">
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
                <?php foreach ($bukti as $mhs) : ?>
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
                        <p><?php echo $mhs->nama_mhs ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p><?php echo $mhs->nim ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p><?php echo $mhs->prodi ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <?php if ($mhs->valid == 0) : ?>
                          <p class="text-danger">Belum tervalidasi</p>
                        <?php elseif ($mhs->valid == 1) : ?>
                          <p class="text-success">Tervalidasi</p>
                        <?php endif; ?>
                      </div>
                    </td>
                    <td>
                      <div>
                        <button type="button" class="btn btn-sm btn-primary">
                          <a class="text-decoration-none text-white font-weight-bolder" href="<?= base_url('krs/viewDetailBukti/' . $mhs->id) ?>">
                            Lihat Detail
                          </a>
                        </button>
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