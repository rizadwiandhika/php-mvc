<?php

class Login extends Controller
{
    public function index()
    {
        $this->view("login/index");
    }

    public function cek()
    {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        
        if($this->model("Mahasiswa_model")->cekUser($username, $pass))
        {
            $_SESSION['user'] = $this->model("Mahasiswa_model")->getMahasiswaByUsername($username);
            header("Location: " . BASEURL . "tamu/" . $username . "/" . $pass);
            exit;
        }
    }

}