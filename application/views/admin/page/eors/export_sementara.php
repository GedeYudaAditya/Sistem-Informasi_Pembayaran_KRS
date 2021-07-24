<center>
    <h1>Data Pendaftar Sementara Kegiatan <span style="color:darkcyan"> <?= $kegiatan ?> </span></h1>
    <h3>Disortir Berdasarkan : <span style="color:darkcyan"> <?= $tipe_data ?> </span></h3>
    <hr style="height:2px;border-width:5;color:gray;background-color:black">
</center>
<div style="text-align: justify;">
    <?php
    $string = "012345678bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
    $kode = substr(str_shuffle($string), 0, 12);
    ?>
    <h5>Kode Cetak : #<?= $kode ?> </h5>

</div>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
    <thead>
        <tr style="font-size: 24px; background-color:darkcyan; color:white;">
            <th style="vertical-align: middle;">
                <center>No</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Nim</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Nama Lengkap</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Angkatan</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Jenis Kelamin</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Agama</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Alamat Asal</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Alamat Sekarang</center>
            </th>

            <th style="vertical-align: middle;">
                <center>Email</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Whatsapp</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Prodi</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Pilihan Wajib</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Pilihan Opsional</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Tanggal Mendaftar</center>
            </th>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($pendaftar as $data) : ?>
        <tr style="text-align:justify; font-size:16px;">
            <td><?= $i++ ?></td>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['nama_lengkap'] ?></td>
            <td><?= $data['angkatan'] ?></td>
            <td><?= $data['jenis_kelamin'] ?></td>
            <td><?= $data['agama'] ?></td>
            <td><?= $data['alamat_asal'] ?></td>
            <td><?= $data['alamat_sekarang'] ?></td>
            <td><?= $data['email'] ?></td>
            <td>
                " <?= $data['wa']  ?>" </td>
            <td><?= $data['prodi'] ?></td>
            <td><?= $data['pilihan_wajib'] ?></td>
            <td><?= $data['pilihan_opsional'] ?></td>
            <td><?= $data['create_at'] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<br>
<br>
<br>
<div class="footer" style="text-align: justify;">
    <h5>Singaraja, <?= date('d F Y') ?></h5>
    <h5>Elektronic Open Recruitment System HMJ Teknik Informatika</h5>
    <br>
    <br>
    <br>
    <h5>(<?= ucfirst($group[0]['first_name']) ?>)</h5>
</div>