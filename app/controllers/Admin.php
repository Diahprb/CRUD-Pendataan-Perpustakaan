<?php

class Admin extends Controller {
    public function index()
    {
        $data['judul'] = 'Pendataan Admin';
        $data['admin'] = $this->model('Admin_model')->getAllAdmin();
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Pendataan';
        $data['admin'] = $this->model('Admin_model')->getAdminById($id);
        $this->view('templates/header', $data);
        $this->view('admin/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Admin_model')->tambahDataAdmin($_POST) > 0) { 
            Flasher::setFlash('berhasil', ' ditambahkan', 'success');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        }
        header('Location: ' . BASEURL . '/admin');
        exit;
    }

    public function delete($id)
    {
        if ($this->model('Admin_model')->deleteDataAdmin($id) > 0) {
            Flasher::setFlash('berhasil', ' dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }
        header('Location: ' . BASEURL . '/admin');
        exit;
    }

    public function getedit()
    {
        echo json_encode($this->model('Admin_model')->getAdminById($_POST['id']));
    }

    public function edit()
    {
        if ($this->model('Admin_model')->editDataAdmin($_POST) > 0 ) 
        { 
            Flasher::setFlash('berhasil', ' diedit', 'success');
            header('Location: ' . BASEURL . '/admin');
        exit;
        } else {
            Flasher::setFlash('gagal', 'diedit', 'danger');
            header('Location: ' . BASEURL . '/admin');
        exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Pendataan Admin';
        $data['admin'] = $this->model('Admin_model')->cariDataAdmin();
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }
    }
