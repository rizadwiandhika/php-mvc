<?php

class Tamu extends Controller
{
    public function index()
    {
        $this->view("template/header");
        $this->view("tamu/index");
        $this->view("template/footer");
    }
}