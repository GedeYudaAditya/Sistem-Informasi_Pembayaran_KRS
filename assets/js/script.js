$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function(){
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Sistem-Informasi_Pembayaran_KRS/krs/ubahData');

        const nim = $(this).data('nim');
        
        $.ajax({
            url: 'http://localhost/Sistem-Informasi_Pembayaran_KRS/krs/getubah',
            data: {nim : nim},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nim').val(data.nim);
                $('#nama').val(data.nama);
                $('#status').val(data.status);
                $('#prodi').val(data.prodi);
                $('#tahun').val(data.tahun);
                $('#smtr').val(data.smtr);
                $('#nim').val(data.nim);
            }
        });
    });

});