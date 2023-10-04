<?php
class Buku extends Controller{
  public function index(){
    $data['page'] = 'Daftar Buku';
    $data['buku'] = $this->model('BukuModel')->getAllBuku();
    $this->view('templates/header', $data);
    $this->view('buku/index', $data);
    $this->view('templates/footer');
  }
  public function tambah(){
    $data['page'] = 'Tambah Buku';
    $this->view('templates/header', $data);
    $this->view('buku/create', $data);
    $this->view('templates/footer');
  }

  public function simpanBuku(){
    if ($this->model('BukuModel')->tambahBuku($_POST) > 0) {
      header('Location: ' . BASE_URL . '/buku/index');
      exit;
    } else {
      header('Location: ' . BASE_URL . '/buku/index');
      exit;
    }
  }

  public function edit($id){
    $data['page'] = 'Edit Buku';
    $data['buku'] = $this->model('BukuModel')->getBukuById($id);
    $this->view('templates/header', $data);
    $this->view('buku/edit', $data);
    $this->view('templates/footer');
  }

  public function updateBuku(){
    if ($this->model('BukuModel')->updateBuku($_POST) > 0) {
      header('Location: ' . BASE_URL . '/buku/index');
      exit;
    } else {
      header('Location: ' . BASE_URL . '/buku/index');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('BukuModel')->deleteBuku($id) > 0) {
      header('Location: ' . BASE_URL . '/buku/index');
      exit;
    } else {
      header('Location: ' . BASE_URL . '/buku/index');
      exit;
    }
  }

  public function cari()
  {
    $data['page'] = 'Data Buku';
    $data['buku'] = $this->model('BukuModel')->cariBuku($_POST['search']);
    $this->view('templates/header', $data);
    $this->view('buku/index', $data);
    $this->view('templates/footer');
  }
}
