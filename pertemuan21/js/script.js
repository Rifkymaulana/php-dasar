$(document).ready(function(){

    // hilangkan tombol vari
    $('#tombol-cari').hide();

    // event ketika keyword diketik
    $('#keyword').on('keyup', function(){
        $('.loader').show();

        // ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        // $.get()
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data){
            $('#container').html(data);
            $('.loader').hide();
        })
    });
});