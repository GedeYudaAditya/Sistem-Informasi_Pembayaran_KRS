$(document).ready(function () {
	var deskripsi_singkat = $('#deskripsi_etika').val();
	if (deskripsi_singkat != undefined) {
		CKEDITOR.replace('deskripsi_etika');
	}
});
$(document).ready(function () {
	var deskripsi_singkat = $('#misi_kandidat').val();
	if (deskripsi_singkat != undefined) {
		CKEDITOR.replace('misi_kandidat');
	}
});
$(document).ready(function () {
	var deskripsi_singkat = $('#visi_kandidat').val();
	if (deskripsi_singkat != undefined) {
		CKEDITOR.replace('visi_kandidat');
	}
});