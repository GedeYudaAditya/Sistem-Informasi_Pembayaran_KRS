
$(document).ready(function () {
	var deskripsi_singkat = $('#deskripsi_singkat').val();
	if (deskripsi_singkat != undefined) {
		CKEDITOR.replace('deskripsi_singkat');
	}
});
$(document).ready(function () {
	var persyaratan = $('#persyaratan').val();
	if (persyaratan != undefined) {
		CKEDITOR.replace('persyaratan');
	}
});

$(document).ready(function () {
	var alamat_asal = $('#alamat_asal').val();
	if (alamat_asal != undefined) {
		CKEDITOR.replace('alamat_asal');
	}
});

$(document).ready(function () {
	var alamat_sekarang = $('#alamat_sekarang').val();
	if (alamat_sekarang != undefined) {
		CKEDITOR.replace('alamat_sekarang');
	}
});
$(document).ready(function () {
	var riwayat_kesehatan = $('#riwayat_kesehatan').val();
	if (riwayat_kesehatan != undefined) {
		CKEDITOR.replace('riwayat_kesehatan');
	}
});

$(document).ready(function () {
	var hobi = $('#hobi').val();
	if (hobi != undefined) {
		CKEDITOR.replace('hobi');
	}
});
$(document).ready(function () {
	var motto_hidup = $('#motto_hidup').val();
	if (motto_hidup != undefined) {
		CKEDITOR.replace('motto_hidup');
	}
});

