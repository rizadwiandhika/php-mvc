<?php

class Home extends Controller
{
    public function index($nama = "Riza Dwi Andhika")
    {
        $data['judul'] = "Home";
        $data['nama'] = $nama;
        $this->view("template/header", $data);
        $this->view("home/index", $data);
        $this->view("template/footer", $data);

    }
}