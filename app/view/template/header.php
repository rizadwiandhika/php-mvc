<!DOCTYPE html>
<html>

<head>
    <title> <?= $data['judul']?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL ?>css/style-p.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">

    <a class="navbar-brand" href="<?= BASEURL ?>">Riza's WEB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        
        <?php
            if($data['judul'] == "Home")        {echo '<li class="nav-item active">';}
            else                                {echo '<li class="nav-item">';}
            echo '<a class="nav-link" href="' . BASEURL . '">Home <span class="sr-only">(current)</span></a>';
            echo '</li>';
        ?>

        <?php
            if($data['judul'] == "About")       {echo '<li class="nav-item active">';}
            else                                {echo '<li class="nav-item">';}
            echo    '<a class="nav-link" href="' . BASEURL . 'about">About</a>';
            echo '</li>';
        ?>

        <?php
            if($data['judul'] == "Mahasiswa" || $data['judul'] == $data['nama'])   {echo '<li class="nav-item active">';}
            else                                {echo '<li class="nav-item">';}
            echo    '<a class="nav-link" href="' . BASEURL . 'mahasiswa">Mahasiswa</a>';
            echo '</li>';
        ?>
        
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        </ul>
    </div>

  </div>
</nav>