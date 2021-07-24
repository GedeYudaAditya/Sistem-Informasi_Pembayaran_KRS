<center>
    <h2>Data Pemilih Sementara <br> Kegiatan <span style="color:darkcyan"> <?= ucfirst($kegiatan) ?></span></h2>
    <hr style="height:2px;border-width:5;color:gray;background-color:black">
</center>
<div style="text-align: justify;">
    <?php
    $string = "012345678bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
    $kode = substr(str_shuffle($string), 0, 12);
    ?>
    <h5>Kode Cetak : #<?= $kode ?> </h5>
    <h5>Token Aktif Sampai : <?= $pendaftar[0]['token_valid_until'] ?>
        WITA</h5>
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
                <center>Nama Pemilih</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Username</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Token</center>
            </th>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($pendaftar as $data) : ?>
        <tr style="text-align:justify; font-size:16px;">
            <td><?= $i++ ?></td>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['nama_pemilih'] ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['token'] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<br>
<br>
<br>
<div class="footer" style="text-align: justify;">
    <h5>Singaraja, <?= date('d F Y') ?></h5>
    <h5>Elektronic Voting System HMJ Teknik Informatika</h5>
    <br>
    <br>
    <br>
    <h5>(<?= ucfirst($group[0]['first_name']) ?>)</h5>
</div>