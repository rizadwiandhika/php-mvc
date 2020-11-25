<?php

class About extends Controller
{
    public function index()
    {
        $data['judul'] = "About";
        $data['nama'] = "Riza Dwi Andhika";

        $this->view("template/header", $data);
        $this->view("about/index", $data);
        $this->view("template/footer");

    }
}