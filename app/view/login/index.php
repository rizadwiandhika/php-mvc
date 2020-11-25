<!DOCTYPE html>
<html>

<head>
    <title>Riza's WEB</title>
    <link rel="stylesheet" href="<?= BASEURL ?>css/login-index.css">
</head>

<body>

    <form action="<?= BASEURL ?>login/cek" method="POST">

    
    <div class="login-box">
        <h1>Login</h1>

        <?php
        if (isset($_GET['pesan']))
        {
            if ($_GET['pesan'] == "belum_login")  echo("Anda harus login");
            else if ($_GET['pesan'] == "invalid") echo("Username atau password salah");
            else if ($_GET['pesan'] == "logout")  echo("Anda telah logout");
            else if ($_GET['pesan'] == "ganti_role")  echo("Anda sudah bukan admin");
        }
        ?>

        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="username" placeholder="Username" autocomplete="off" autofocus>
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password" placeholder="Password">
        </div>
        <input class="btn" type="submit" value="Sign in">

        <h4>Belum punya akun?</h4>
        <a href=""><p class="daftar">Buat Disini</p></a>
    </div>

    </form>

</body>

</html>