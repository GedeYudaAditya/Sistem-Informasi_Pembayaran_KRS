  <div class="row d-flex justify-content-center">
    <div class="col-10">
      <div class="card mb-4">
        <div class="py-2 px-4 ">
          <h5 class="py-3 text-dark user-select-none font-weight-bold text-center">Validasi Bukti Iuran (NIM : <?php echo $value[0]->last_name ?>)</h5>
          <p class="text-center">Bukti Iuran Syarat KRS Ganjil 2021/2022</p>
        </div>
        <div class="card-body px-0 pt-2 pb-2">
          <div class="table-responsive">
            <table class="table align-items-center">
              <tbody>
                <tr>
                  <td>
                    <p class="text-center"><b>Atas nama <?php echo $value[0]->first_name ?></b></p>
                    <p class="text-center"><b>Program Studi
                        <?php if ($value[0]->prodi == 'PTI') : ?>
                          <span class="text-primary">S1 Pendidikan Teknik Informatika</span>
                        <?php elseif ($value[0]->prodi == 'SI') : ?>
                          <span class="text-primary">S1 Sistem Informasi</span>
                        <?php elseif ($value[0]->prodi == 'ILKOM') : ?>
                          <span class="text-primary">S1 Ilmu Komputer</span>
                        <?php elseif ($value[0]->prodi == 'TRPL') : ?>
                          <span class="text-primary">D4 Teknologi Rekayasa Perangkat Lunak</span>
                        <?php endif; ?>
                      </b></p>

                    <iframe class="container-fluid" height="500" type="text/html" src="<?php echo base_url(); ?><?php echo $value[0]->file_path ?>" frameborder="0"></iframe>
                    <div class="d-flex justify-content-center p-3">
                      <button type="button" class="btn btn-secondary m-2" data-bs-dismiss="modal">
                        <a class="text-decoration-none text-white font-weight-bolder" href="<?= base_url('krs/viewValidasiMahasiswa') ?>">
                          Close
                        </a>
                      </button>

                      <a href="<?php echo base_url(); ?>Krs/memvalidkanBukti/<?php echo $value[0]->id ?>/<?php echo 0 ?>"><button type="submit" class="btn btn-danger m-2">Tolak</button></a>
                      <a href="<?php echo base_url(); ?>Krs/memvalidkanBukti/<?php echo $value[0]->id ?>/<?php echo 1 ?>"><button type="submit" class="btn btn-primary m-2">Terima</button></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>