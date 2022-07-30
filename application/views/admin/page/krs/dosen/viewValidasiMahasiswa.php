<!-- Start Container  -->
<div class="container-fluid">


  <!-- Start  Table -->
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="row py-2 px-4 d-flex align-items-center">
          <h5 class="col-3 py-3 text-dark user-select-none font-weight-bold">Validasi Bukti Iuran</h5>
          <div class="col-6"></div>
          <div class="col-3 form-group input-group">
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
            <table class="table align-items-center" >
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
              <tbody >
                <?php $i=0?>
                <?php foreach($value as $mhs) : ?>
                <tr>
                  <td>
                    <?php if($i > 9) :?>
                      <p><?= $i++?></p>
                    <?php else :?>
                      <p>0<?= $i++?></p>
                    <?php endif;?>
                  </td>
                  <td >
                    <div>
                      <p><?php echo $mhs->nama?></p>
                    </div>
                  </td>
                  <td>
                    <div >
                      <p><?php echo $mhs->nim?></p>
                    </div>
                  </td>
                  <td>
                    <div >
                      <p><?php echo $mhs->prodi?></p>
                    </div>
                  </td>
                  <td>
                    <div>
                      <p class="text-danger">Belum Divalidasi</p>
                    </div>
                  </td>
                  <td>
                    <div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLihatBukti">
                        Lihat Detail 
                      </button>
                    </div>
                  </td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Table -->

  <!-- Start Modal -->
  <div class="modal fade" id="modalLihatBukti" tabindex="-1" aria-labelledby="modalLableTitle" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLableTitle">Bukti Iuran</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">        
            <img src="<?= base_url() ?>assets/img/lomba/dance2.png" class="navbar-brand-img img-fluid ">
            <img src="<?= base_url() ?>assets/img/lomba/dance2.png" class="navbar-brand-img img-fluid ">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Tolak</button>
          <button type="button" class="btn btn-primary">Terima</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal  -->

</div>
<!-- End Container -->