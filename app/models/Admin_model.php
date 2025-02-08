<?php

class Admin_model {
    private $db;
    private $table = 'admin'; 

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAdmin()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getAdminById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataAdmin($data)
{
    $query = "INSERT INTO admin (nama_peminjam, nis, kelas, jurusan, nama_buku, 
              tanggal_peminjaman, tanggal_pengembalian, status_buku_saat_dikembalikan, petugas)
              VALUES 
              (:nama_peminjam, :nis, :kelas, :jurusan, :nama_buku, 
              :tanggal_peminjaman, :tanggal_pengembalian, :status_buku_saat_dikembalikan, :petugas)";

    $this->db->query($query);
    $this->db->bind(':nama_peminjam', $data['nama_peminjam']);
    $this->db->bind(':nis', $data['nis']);
    $this->db->bind(':kelas', $data['kelas']);
    $this->db->bind(':jurusan', $data['jurusan']);
    $this->db->bind(':nama_buku', $data['nama_buku']);
    $this->db->bind(':tanggal_peminjaman', $data['tanggal_peminjaman']);
    $this->db->bind(':tanggal_pengembalian', $data['tanggal_pengembalian']);
    $this->db->bind(':status_buku_saat_dikembalikan', $data['status_buku_saat_dikembalikan']);
    $this->db->bind(':petugas', $data['petugas']);

    $this->db->execute();

    return $this->db->rowCount();
}


    public function deleteDataAdmin($id)
    {
        $query = "DELETE FROM admin WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataAdmin($data)
{
    $query = "UPDATE admin SET
      nama_peminjam = :nama_peminjam,
      nis = :nis,
      kelas = :kelas,
      jurusan = :jurusan,
      nama_buku = :nama_buku,
      tanggal_peminjaman = :tanggal_peminjaman,
      tanggal_pengembalian = :tanggal_pengembalian,
      status_buku_saat_dikembalikan = :status_buku_saat_dikembalikan,
      petugas = :petugas
      WHERE id = :id";

    $this->db->query($query);
    $this->db->bind(':nama_peminjam', $data['nama_peminjam']);
    $this->db->bind(':nis', $data['nis']);
    $this->db->bind(':kelas', $data['kelas']);
    $this->db->bind(':jurusan', $data['jurusan']);
    $this->db->bind(':nama_buku', $data['nama_buku']);
    $this->db->bind(':tanggal_peminjaman', $data['tanggal_peminjaman']);
    $this->db->bind(':tanggal_pengembalian', $data['tanggal_pengembalian']);
    $this->db->bind(':status_buku_saat_dikembalikan', $data['status_buku_saat_dikembalikan']);
    $this->db->bind(':petugas', $data['petugas']);
    $this->db->bind(':id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
}

    public function cariDataAdmin()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM admin WHERE nama_buku LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
