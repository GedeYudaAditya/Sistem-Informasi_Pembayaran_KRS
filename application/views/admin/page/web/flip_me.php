<?php if (!empty($kode)) { ?>
<?php if ($kode == "informasi") { ?>
<div id="canvases" data-pdf="<?= base_url() ?>assets/upload/Folder_informasi/<?= $folder ?>/<?= $nama_file ?>"></div>
<?php } else if ($kode == "kepengurusan") { ?>
<div id="canvases" data-pdf="<?= base_url() ?>assets/upload/Folder_<?= $kepengurusan ?>/<?= $nama_file ?>"></div>
<?php } else if ($kode == "eors") { ?>
<div id="canvases" data-pdf="<?= base_url() ?>assets/upload/Folder_<?= $folder_eors ?>/<?= $nama_file ?>"></div>
<?php } else if ($kode == "integer" && $folder_integer == "integer") { ?>
<div id="canvases"
    data-pdf="<?= base_url() ?>assets/upload/Folder_<?= $folder_integer ?>/berita/file/<?= $nama_file ?>"></div>
<?php } else { ?>
<?php redirect("web/informasi_hmj"); ?>
<?php } ?>
<?php } else { ?>
<?php redirect("notfound"); ?>
<?php } ?>