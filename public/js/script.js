$(function()
{
    // jQuery tolong carikan saya id "keyword". lalu saat saya typing sesuatu, jalankan fungsi berikut
    $('#keyword').on('keyup', function()
    {
        console.log("ok");
        /* jQuery carikan saya id "penampung", lalu ubah isi-nya dengan file
            http://localhost:8080/Test-mvc/public/Mahasiswa/livesearch/' + $('#keyword').val()
        */
       

       $('#penampung').load('http://localhost:8080/Test-mvc/public/Mahasiswa/livesearch/' + 'iZinMemaSUKI-live-sEarch198324/' + $('#keyword').val());

    });

    // jQuery tolong carikan saya class "tampilUbahModal". lalu saat diklik, jalankan fungsi berikut
    $(document).on('click', '.tampilUbahModal'  ,function()
    {
        // jQuery tolong carikan saya id "exampleModalLabel". lalu ubah isi html pada id tersebut dengan 'Ubah data mahasiswa'
        $('#exampleModalLabel').html('Ubah data mahasiswa');
        $('.modal-footer button[type=submit]').html('Save changes');
        $('.modal-body form').attr('action', 'http://localhost:8080/Test-mvc/public/Mahasiswa/ubah');

        // pengiriman data dari html ke jQuery lewat atribut data
        const id = $(this).data('id');

        $.ajax({
            url: "http://localhost:8080/Test-mvc/public/mahasiswa/getUbah",
            data: {id : id}, //yang kanan itu nama datanya (di array asosiatif) yang dikirim lewat variabel $_POST['id']
            method: 'post',
            dataType: 'json',
            success: function(data)
            {
                console.log(data);
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
            }
        });
    });
    // jQuery tolong carikan saya class "tampilTambahModal". lalu saat diklik, jalankan fungsi berikut
    $('.tampilTambahModal').on('click', function()
    {
        $('#exampleModalLabel').html('Tambah mahasiswa');
        $('.modal-footer button[type=submit]').html('Add mahasiswa');
        $('.modal-body form').attr('action', 'http://localhost:8080/Test-mvc/public/Mahasiswa/tambah');

        $('#nama').val('');
        $('#email').val('');
        $('#jurusan').val('Informatika');
    });

});