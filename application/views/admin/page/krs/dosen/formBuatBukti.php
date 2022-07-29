<!-- Start Container Fluid -->
<div class="container-fluid">

  <h3 class="text-center font-weight-bold">Membuat Form Bukti Iuran Mahasiswa</h3>

  <div class="row d-flex justify-content-center">
      <div class="col-8 ">
        <form action="" method="POST">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan Judul.." autocomplete="off">
          </div>

          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan Deskripsi..."></textarea>
          </div>
          
          <div class="form-group input-group mb-3">
            <select class="custom-select" id="inputGroupSelect01">
              <option selected disabled>Pilih Tahun Ajaran</option>
              <option value="ganjil21">Ganjil 2021/2022</option>
              <option value="genap21">Genap 2021/2022</option>
              <option value="ganjil22">Ganjil 2022/2023</option>
              <option value="genap22">Genap 2022/2023</option>
            </select>
          </div>                    
          <button type="submit" name="buatForm" class="btn btn-primary font-weight-bold my-3">Buat Form Bukti</button>
        </form>
      </div>
  </div>

</div>
<!-- End Container Fluid -->
