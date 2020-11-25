<?php

class Mahasiswa extends Controller
{
    public function index()
    {   
        $data['mahasiswa'] = $this->model("Mahasiswa_model")->getAllMahasiswa();
        $data['judul'] = "Mahasiswa";

        $this->view("template/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("template/footer");
    }

    public function detail($id = NULL)
    {
        if($id == NULL) 
        {
            header("Location: ". BASEURL . "mahasiswa"); 
            exit;
        }

        $data = $this->model("Mahasiswa_model")->getMahasiswaById($id);
        $data['judul'] = $data['nama'];

        $this->view("template/header", $data);
        $this->view("mahasiswa/detail", $data);
        $this->view("template/footer");
    }

    public function tambah()
    {

        if($this->model("Mahasiswa_model")->tambahMahasiswa($_POST) > 0)
        {
            Flasher::setFlash("Berhasil ", "ditambahkan", "success");
            header("Location: ". BASEURL . "mahasiswa");
            exit;
        }
        else
        {
            Flasher::setFlash("Gagal ", "menambahkan", "danger");
            header("Location: ". BASEURL . "mahasiswa");
            exit;
        }
    }

    public function hapus($id = NULL)
    {
        if($id == NULL) 
        {
            header("Location: ". BASEURL . "mahasiswa"); 
            exit;
        }

        if($this->model('Mahasiswa_model')->hapus($id) > 0)
        {
            Flasher::setFlash("Berhasil ", "dihapus", "warning");
            header("Location: " . BASEURL . "mahasiswa");
            exit;
        }
        else
        {
            Flasher::setFlash("Gagal ", "menghapus", "danger");
            header("Location: ". BASEURL . "mahasiswa");
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function ubah()
    {
        if($this->model("Mahasiswa_model")->ubahMahasiswa($_POST) > 0)
        {
            Flasher::setFlash("Berhasil ", "diubah", "success");
            header("Location: ". BASEURL . "mahasiswa");
            exit;
        }
        else
        {
            Flasher::setFlash("Gagal ", "diubah", "danger");
            header("Location: ". BASEURL . "mahasiswa");
            exit;
        }
    }

    public function cari()
    {
        if ($_POST['keyword'] == '')
        {
            header("Location: " . BASEURL . "mahasiswa");
            exit;
        }
        
        $data['judul'] = "Mahasiswa";
        $data['mahasiswa'] = $this->model("Mahasiswa_model")->getCariMahasiswa($_POST['keyword']);
        $data['keyword'] = $_POST['keyword'];

        $this->view("template/header", $data);
        $this->view("mahasiswa/cari", $data);
        $this->view("template/footer");
    }

    public function livesearch($status = NULL, $keyword = '')
    {
        if ($status != "iZinMemaSUKI-live-sEarch198324")
        {
            header("Location: ". BASEURL . "mahasiswa"); 
            exit;
        }

        $data['mahasiswa'] = $this->model("Mahasiswa_model")->getCariMahasiswa($keyword);

        $this->view("ajax/mahasiswa/livesearch", $data);
    }
}