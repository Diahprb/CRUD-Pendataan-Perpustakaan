$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Admin');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

     $('.tampilModalEdit').on('click', function() {
        console.log('ok');

        $('#formModalLabel').html('Edit Data Admin');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/crudperpustakaan/public/admin/edit');

        const id = $(this).data('id');
        console.log(id);

        $.ajax({
          url: 'http://localhost/crudperpustakaan/public/admin/getedit',
          data: {id : id},
          method: 'post',
          dataType: 'json',
          success: function(data) {
            $('#nama_peminjam').val(data.nama_peminjam);
            $('#nis').val(data.nis);
            $('#kelas').val(data.kelas);
            $('#jurusan').val(data.jurusan);
            $('#nama_buku').val(data.nama_buku);
            $('#tanggal_peminjaman').val(data.tanggal_peminjaman);
            $('#tanggal_pengembalian').val(data.tanggal_pengembalian);
            $('#status_buku_saat_dikembalikan').val(data.status_buku_saat_dikembalikan);
            $('#petugas').val(data.petugas);
            $('#id').val(data.id);
          }
        });
     });

});