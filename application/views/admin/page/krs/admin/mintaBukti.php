<div class="container-fluid">
  <!-- Start Btn Buat Form Bukti -->
  <form action="<?= base_url() ?>krs/printCSVAll" class="" method="post">
    <div class="row justify-content-between w-100 mx-0 px-3">
      <button type="button" class="btn btn-info col-2">
        <a class="text-decoration-none text-white font-weight-bolder" href="<?= base_url('krs/buat_iuran') ?>">
          <span class="pr-2"><i class="fas fa-plus"></i></span>
          Tambah Iuran
        </a>
      </button>
      <button type="submit" class="btn btn-success col-2" name="export"><i class="fa fa-download" aria-hidden="true"></i></button>
    </div>
  </form>
  <!-- End Btn Buat Form Bukti -->

  <!-- Start  Table -->
  <div class="row my-4">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-body px-4 pt-4 pb-2">
          <div class="table-responsive">
            <table class="table align-items-center px-1 text-center" id="tableIuran">
              <thead>
                <tr class="fw-bold">
                  <td class="col-1">No</td>
                  <td class="col-2">Tahun Ajaran</td>
                  <td class="col-2">Semester</td>
                  <td class="col-2">Aktif</td>
                  <td class="col-2">Bukti Pembayaran Iuran</td>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php foreach ($iuran as $bukti) : ?>
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
                        <p><?= $bukti['tahun_ajaran'] ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p><?= $bukti['semester'] ?></p>
                      </div>
                    </td>
                    <td>
                      <?php if ($bukti['status'] == 1) { ?>
                        <a href="<?= base_url() ?>krs/editAktivasiIuran/<?= $bukti['id'] ?>" class="btn btn-success btn-sm btn-icon-split mb-4">
                          <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                          </span>
                          <span class="text">Aktif</span>
                        </a>
                      <?php } else { ?>
                        <a href="<?= base_url() ?>krs/editAktivasiIuran/<?= $bukti['id'] ?>" class="btn btn-secondary btn-sm btn-icon-split mb-4">
                          <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                          </span>
                          <span class="text">Nonaktif</span>
                        </a>
                      <?php } ?>
                    </td>
                    <td>
                      <div>
                        <a class="btn btn-primary text-decoration-none text-white font-weight-bolder" href="<?= base_url() ?>krs/viewBukti/<?php echo $bukti['id'] ?>">Lihat <i class="far fa-eye"></i></a>
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