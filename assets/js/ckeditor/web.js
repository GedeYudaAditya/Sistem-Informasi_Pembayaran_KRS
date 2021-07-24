
$(document).ready(function () {
	var deskripsi_singkat = $('#deskripsi_singkat').val();
	if (deskripsi_singkat != undefined) {
		CKEDITOR.replace('deskripsi_singkat');
	}
});
$(document).ready(function () {
	var visi = $('#visi').val();
	if (visi != undefined) {
		CKEDITOR.replace('visi');
	}
});

$(document).ready(function () {
	var misi = $('#misi').val();
	if (misi != undefined) {
		CKEDITOR.replace('misi');
	}
});

$(document).ready(function () {
	var bidang = $('#bidang').val();
	if (bidang != undefined) {
		CKEDITOR.replace('bidang');
	}
});
