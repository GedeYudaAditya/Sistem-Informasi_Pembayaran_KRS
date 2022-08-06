<!-- Start Container  -->
<div class="container-fluid">


  <!-- Start  Table -->
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="row py-2 px-4 d-flex flex-column flex-md-row align-items-center">
          <h5 class="col-12 col-md-3 py-3 text-dark user-select-none font-weight-bold">Validasi Bukti Iuran</h5>
          <div class="col-6"></div>
          <div class="col-12 col-md-3 form-group input-group">
            <form action="<?php echo base_url(); ?>krs/filterBukti" method="post" enctype="multipart/form">
              <div class="row">
                <select name="select" class="col-8 custom-select" id="inputGroupSelect01">
                  <option <?= $id_forms === NULL ? 'selected' : '' ?> disabled>Pilih Tahun Ajaran</option>
                  <?php foreach ($formBukti as $bukti) : ?>
                    <option <?= $id_forms == $bukti['id_form'] ? 'selected' : '' ?> value="<?php echo $bukti['id_form'] ?>"><?php echo $bukti['semester'] ?> <?php echo $bukti['tahun'] ?>/<?php echo $bukti['tahun'] + 1 ?></option>
                  <?php endforeach; ?>
                </select>
                <button type="submit" class="col-4 btn btn-primary">Filter</button>
              </div>
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
                <?php
                $i = 1;
                ?>
                <?php foreach ($value as $mhs) : ?>
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
                        <p><?php echo $mhs->first_name ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p><?php echo $mhs->last_name ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p><?php echo $mhs->prodi ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <?php if ($mhs->valid === NULL) : ?>
                          <p class="text-warning">Belum Divalidasi</p>
                        <?php elseif ($mhs->valid === '0') : ?>
                          <p class="text-danger">Ditolak</p>
                        <?php elseif ($mhs->valid === '1') : ?>
                          <p class="text-success">Sudah Divalidasi</p>
                        <?php endif; ?>
                      </div>
                    </td>
                    <td>
                      <div>
                        <a class="btn btn-primary font-weight-bolder" href="<?= base_url('krs/viewDetailBukti/' . $mhs->id) ?>">
                          Lihat Detail
                        </a>
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