<div class="container-fluid">
  <!-- Start Btn Buat Form Bukti -->
  <div>
    <button type="button" class="btn btn-info ">
      <a class="text-decoration-none text-white font-weight-bolder" href="<?= base_url('krs/viewFormBuatBukti') ?>">
        <span class="pr-2"><i class="fas fa-plus"></i></span>
        Tambah Form Iuran
      </a>
    </button>
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
                  <!-- <td class="col-2">Expired_Date</td> -->
                  <td class="col-2">Lihat Semua Bukti</td>
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
                        <p>Bukti Iuran Mahasiswa <?= $bukti['tahun_ajaran'] ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p><?= $bukti['tahun_ajaran'] ?>/ <?= $bukti['tahun_ajaran'] + 1 ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p><?= $bukti['semester'] ?></p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <button type="button" class="btn btn-primary"><a class="text-decoration-none text-white font-weight-bolder" href="<?= base_url() ?>krs/viewValidasiMahasiswa/<?php echo $bukti['id'] ?>">Lihat Bukti</a>

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