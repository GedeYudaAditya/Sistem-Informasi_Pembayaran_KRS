<!-- Start Container Fluid -->
<div class="container-fluid">

  <h3 class="text-center font-weight-bold">Membuat Form Bukti Iuran Mahasiswa</h3>

  <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8">
        <form action="" method="POST">
          <div class="form-group col-12 mt-4 pl-4">
            <label for="expireDate">Batas Akhir</label>
            <input type="date" class="form-control" name="expireDate" id="expireDate" autocomplete="off">
          </div>
          
          <div class="d-md-flex justify-content-between pt-4">
            <!-- Start Input Tahun Ajaran -->
            <div class="col-12 col-md-6">
              <label class="d-block pl-3" for="expireDate">Tahun Ajaran</label>
              <div class="form-group input-group mb-3 d-flex">
                <div class="col-12 col-md-5 input-group mb-3">
                  <select class="custom-select " id="inputTahunDepan" onchange="inputTahunDosen()">
                    <option selected disabled>Tahun</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                  </select>
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
              var option = elinputTahunDepan.options[elinputTahunDepan.selectedIndex];
              
              const elinputTahunBelakang = document.getElementById('inputTahunBelakang');
              elinputTahunBelakang.value = option.value;

              if(option.value === '2019'){
                elinputTahunBelakang.value = '2020';
              }
              else if(option.value === '2020'){
                elinputTahunBelakang.value = '2021';
              }
              else if(option.value === '2021'){
                elinputTahunBelakang.value = '2022';
              }
              else if(option.value === '2022'){
                elinputTahunBelakang.value = '2023';
              }
              else if(option.value === '2023'){
                elinputTahunBelakang.value = '2024';
              }    
              
            };
            inputTahunDosen();
            </script>
            <!--End Interaktif Dosen memilih Tahun di input depan otomatis tahun belakang menyesuaikan  -->

            <!-- Start Input Semester -->
            <div class="col-12 col-md-6">
              <div>
                <label class="d-block " for="expireDate">Semester</label>
                <div class="form-group input-group mb-3">
                    <select class="custom-select d-block" id="inputGroupSelect01">
                      <option selected disabled>Pilih Semester</option>
                      <option value="ganjil">Ganjil</option>
                      <option value="genap">Genap</option>
                    </select>
                </div>
              </div>
            </div>
            <!-- End Input Semester -->
          </div>
                          
          <button type="submit" name="buatForm" class="btn btn-primary font-weight-bold my-3 ml-4">Buat Form Bukti</button>
        </form>
      </div>
  </div>

</div>
<!-- End Container Fluid -->
