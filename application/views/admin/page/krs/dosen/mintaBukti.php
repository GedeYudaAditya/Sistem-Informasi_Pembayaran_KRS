<div class="container-fluid">
  <!-- Start Btn Buat Form Bukti -->
  <div>
    <button type="button" class="btn btn-info ">
      <a class="text-decoration-none text-white font-weight-bolder" href="<?= base_url('krs/buat_bukti')?>">
        <span class="pr-2"><i class="fas fa-plus"></i></span> 
        Buat Form Bukti
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
            <table class="table align-items-center" >
              <thead>
                <tr class="fw-bold">
                  <td class="col-1">No</td>
                  <td class="col-2">Judul</td>
                  <td class="col-4">Deskripsi</td>
                  <td class="col-1">Prodi</td>
                  <td class="col-2">Tahun Ajaran</td>
                  <td class="col-2">Lihat Semua Bukti</td>
                </tr>
              </thead>
              <tbody >
                <?php for($i = 1; $i <= 3; $i++) : ?>
                <tr>
                  <td>
                    <?php if($i > 9) :?>
                      <p><?= $i?></p>
                    <?php else :?>
                      <p>0<?= $i?></p>
                    <?php endif;?>
                  </td>
                  <td >
                    <div>
                      <p>Bukti Iuran Mahasiswa</p>
                    </div>
                  </td>
                  <td>
                    <div >
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur perspiciatis corporis ratione reprehenderit, illum ad quod vitae iure repudiandae id!</p>
                    </div>
                  </td>
                  <td>
                    <div >
                      <p>SI</p>
                    </div>
                  </td>
                  <td>
                    <div >
                      <p>Ganjil 2022/2023</p>
                    </div>
                  </td>
                  <td>
                    <div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLihatBukti">
                        Lihat Bukti
                      </button>
                    </div>
                  </td>
                </tr>
                <?php endfor;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Table -->
</div>