<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
  <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
        Tambah Data Peminjaman
        </button>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
  <form action="<?= BASEURL; ?>/admin/cari" method="post">
  <div class="input-group">
  <input type="text" class="form-control" placeholder="cari nama buku.." name="keyword" id="keyword">
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit" id="tombolCari">Search</button>
  </div>
</div>
  </form>
  </div>
</div>

      <div class="row">
        <div class="col-lg-6">
            <h3>Pendataan Peminjaman</h3>
                    <ul class="list-group">
                    <?php foreach( $data['admin'] as $admin) : ?>
                    <li class="list-group-item">
                        <?= $admin['nama_peminjam']; ?>
                        <a href="<?= BASEURL; ?>/admin/delete/<?= $admin['id']; ?>" class="badge badge-danger 
                        float-right ml-2" onclick="return confirm('anda yakin ingin menghapus data ini?');">delete</a>
                        <a href="<?= BASEURL; ?>/admin/edit/<?= $admin['id']; ?>" class="badge badge-success 
                        float-right ml-2 tampilModalEdit" data-toggle="modal" data-target="#formModal" 
                        data-id="<?= $admin['id']; ?>">edit</a>
                        <a href="<?= BASEURL; ?>/admin/detail/<?= $admin['id']; ?>" class="badge badge-primary 
                        float-right">detail</a>
                     </li>
                    <?php endforeach; ?>
                    </ul>                
        </div>
      </div>

</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="<?= BASEURL; ?>/admin/tambah" method="post">
        <input type="hidden" name="id" id="id">

  <div class="form-group">
    <label for="nama_peminjam">Nama Peminjam</label>
    <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
  </div>

  <div class="form-group">
    <label for="nis">NIS</label>
    <input type="number" class="form-control" id="nis" name="nis">
  </div>

  <div class="form-group">
    <label for="kelas">Kelas</label>
    <select class="form-control" id="kelas" name="kelas">
      <option>Sepuluh</option>
      <option>Sebelas</option>
      <option>Dua Belas</option>
    </select>
  </div>

  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option>RPL</option>
      <option>DKV</option>
      <option>TKP</option>
      <option>TP</option>
      <option>KULINER</option>
    </select>
  </div>

  <div class="form-group">
    <label for="nama_buku">Nama Buku</label>
    <input type="text" class="form-control" id="nama_buku" name="nama_buku">
  </div>

  <div class="form-group">
    <label for="tanggal_peminjaman">Tanggal Peminjam</label>
    <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman">
  </div>

  <div class="form-group">
    <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
    <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian">
  </div>

  <div class="form-group">
    <label for="status_buku_saat_dikembalikan">Status Buku Saat dikembalikan</label>
    <select class="form-control" id="status_buku_saat_dikembalikan" name="status_buku_saat_dikembalikan">
      <option>Baik</option>
      <option>Hilang</option>
      <option>Rusak</option>
    </select>
  </div>

  <div class="form-group">
    <label for="petugas">Petugas</label>
    <input type="text" class="form-control" id="petugas" name="petugas">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
