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
            <select class="custom-select" id="inputGroupSelect01">
              <option selected disabled>Pilih Tahun Ajaran</option>
              <option value="ganjil21">Ganjil 2021/2022</option>
              <option value="genap21">Genap 2021/2022</option>
              <option value="ganjil22">Ganjil 2022/2023</option>
              <option value="genap22">Genap 2022/2023</option>
            </select>
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
                        <?php if ($mhs->valid == false) : ?>
                          <p class="text-danger">Belum Divalidasi</p>
                        <?php else : ?>
                          <p class="text-success">Sudah Divalidasi</p>
                        <?php endif; ?>
                      </div>
                    </td>
                    <td>
                      <div>
                        <button type="button" class="btn btn-primary">
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