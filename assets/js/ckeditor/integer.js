$(document).ready(function () {
    var deskripsi_singkat = $('#deskripsi').val();
    if (deskripsi_singkat != undefined) {
        CKEDITOR.replace('deskripsi');
    }
});