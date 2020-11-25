<div class="container">
    <br><br>
    <h3>Selamat datang di Beranda Home - Index</h3>
    <br>
    <?php
        if ($data['nama'] != NULL)
        {
            echo "<h1>" . "Hallo, " . $data['nama'] . "!" . "</h1>";
        }
        else
        {
            echo "<h1>" . "Hallo " . "!" . "</h1>";
        }
        echo "<h3>" . "Bagaimana kabarmu hari ini?" . "</h3>";
    ?>
</div>