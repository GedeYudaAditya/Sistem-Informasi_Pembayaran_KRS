<!-- Start Container Fluid -->
<div class="container-fluid">

  <h3 class="text-center font-weight-bold">Buat Iuran Baru</h3>

  <div class="row d-flex justify-content-center">
    <div class="col-12 bg-danger  col-md-8">
      <form action="<?= base_url(); ?>krs/simpanIuran" method="POST">


        <div class="d-md-flex  justify-content-between pt-4">
          <!-- Start Input Tahun Ajaran -->
          <div class="col-12 col-md-6">
            <label class="d-block pl-3" for="expireDate">Tahun Ajaran</label>
            <div class="form-group input-group mb-3 d-flex">
              <div class="col-12 col-md-5 input-group mb-3">
                <input type="number" placeholder="Tahun" class="form-control" id="inputTahunDepan" name="tahun_ajaran" onchange="inputTahunDosen()">
                <!-- <input type="number" placeholder="YYYY" min="1999" max="2023" name="tahun_ajaran" id="tahun_ajaran">
                <script>
                  document.querySelector("input[type=number]")
                    .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
                </script> -->
              </div>
              <div class="d-none d-md-block col-md-1" style="font-size: 25px;">/</div>
              <input id="inputTahunBelakang" class="col-12 col-md-5 form-control " type="number" placeholder="..." readonly>
            </div>
          </div>
          <!-- End Input Tahun Ajaran -->

          <!-- Start Interaktif Dosen memilih Tahun di input depan otomatis tahun belakang menyesuaikan  -->
          <script>
            const inputTahunDosen = () => {
              var elinputTahunDepan = document.getElementById('inputTahunDepan');
              var option = elinputTahunDepan;

              const elinputTahunBelakang = document.getElementById('inputTahunBelakang');

              elinputTahunBelakang.value = parseInt(option.value) + 1;

            };
            inputTahunDosen();
          </script>
          <!--End Interaktif Dosen memilih Tahun di input depan otomatis tahun belakang menyesuaikan  -->

          <!-- Start Input Semester -->
          <div class="col-12 col-md-6">
            <div>
              <div class="form-group input-group mb-3">
                <select class="custom-select d-block" name="semester" id="inputGroupSelect01">
                  <option selected disabled>Pilih Semester</option>
                  <option value="ganjil">Ganjil</option>
                  <option value="genap">Genap</option>
                </select>
              </div>
            </div>
          </div>
          <!-- End Input Semester -->
        </div>
        <div class="d-flex justify-content-end">
          <button type="submit" name="buatForm" class="btn btn-primary justify-content-right font-weight-bold my-3">Tambah Iuran</button>
        </div>
      </form>
    </div>
  </div>

</div>
<!-- End Container Fluid -->