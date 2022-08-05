<div class="container-fluid">
  <!-- Start Btn Buat Form Bukti -->
  <div>
    <a class="btn btn-info font-weight-bolder" href="<?= base_url('krs/viewFormBuatBukti') ?>">
      <span class="pr-2"><i class="fas fa-plus"></i></span>
      Buat Form Bukti
    </a>
  </div>
  <!-- End Btn Buat Form Bukti -->

  <!-- Start  Table -->
  <div class="row my-4">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-body px-0 pt-4 pb-2">
          <div class="table-responsive">
            <table class="table align-items-center">
              <thead>
                <tr class="fw-bold">
                  <td class="col-1">No</td>
                  <td class="col-3">Judul</td>
                  <td class="col-2">Tahun Ajaran</td>
                  <td class="col-2">Semester</td>
                  <td class="col-2">Expired_Date</td>
                  <td class="col-2">Lihat Semua Bukti</td>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php foreach ($formBukti as $bukti) : ?>
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
                        <p>Bukti Iuran Mahasiswa <?= $bukti['tahun'] ?>/<?= $bukti['tahun'] + 1 ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p><?= $bukti['tahun'] ?>/<?= $bukti['tahun'] + 1 ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p><?= $bukti['semester'] ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p class="text-primary"><?= $bukti['expire_date'] ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <a class="btn btn-primary font-weight-bolder" href="<?= base_url() ?>/krs/lihatBukti/<?php echo $bukti['id_form'] ?>">Lihat Bukti</a>
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