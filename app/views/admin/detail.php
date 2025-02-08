<div class="container mt-5">
      
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['admin']['nama_peminjam']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['admin']['nis']; ?></h6>
    <p class="card-text"><?= $data['admin']['kelas']; ?></p>
    <p class="card-text"><?= $data['admin']['jurusan']; ?></p>
    <p class="card-text"><?= $data['admin']['nama_buku']; ?></p>
    <p class="card-text"><?= $data['admin']['tanggal_peminjaman']; ?></p>
    <p class="card-text"><?= $data['admin']['tanggal_pengembalian']; ?></p>
    <p class="card-text"><?= $data['admin']['status_buku_saat_dikembalikan']; ?></p>
    <p class="card-text"><?= $data['admin']['petugas']; ?></p>
    <a href="<?= BASEURL; ?>/admin" class="card-link">Kembali</a>
  </div>
</div>
    
</div>