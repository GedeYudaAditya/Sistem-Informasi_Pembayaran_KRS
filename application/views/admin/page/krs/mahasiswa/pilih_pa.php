<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Pilih Dosen PA untuk Validasi KRS</h1>

    <form action="<?= base_url() ?>krs/ubah_pa" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input disabled type="text" class="form-control" id="" value="<?= $mahasiswa['first_name'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">NIM</label>
                    <input disabled type="text" class="form-control" id="" value="<?= $mahasiswa['last_name'] ?>">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Nama Dosen PA</label>
                    <select <?= $mahasiswa['pa_id'] !== NULL ? 'disabled' : '' ?> name="pa_id" id="id_dosen_pa" class="form-control">
                        <option <?= $mahasiswa['pa_id'] === NULL ? 'selected' : '' ?> value="">Pilih Dosen PA</option>
                        <?php foreach ($dosen as $dosen_pa) : ?>
                            <option <?= $mahasiswa['pa_id'] === $dosen_pa['idDosen'] ? 'selected' : '' ?> value="<?= $dosen_pa['idDosen'] ?>"><?= $dosen_pa['first_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <!-- button submit bootsraps form -->
        <button <?= $mahasiswa['pa_id'] !== NULL ? 'disabled' : '' ?> type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>