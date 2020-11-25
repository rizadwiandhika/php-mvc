<?php

class Controller
{
    public function view($file_view, $data=[])
    {
        include "../app/view/" . $file_view . ".php";
    }

    public function model($model)
    {
        include "../app/model/" . $model . ".php";
        return new $model;
    }
}