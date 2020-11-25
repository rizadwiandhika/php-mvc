<div class="container">
    <br><br>

    <h3>Detail mahasiswa</h3>

    <div class="card mt-3" style="width: 27rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['nama'] ?></h5>
            <table>
                <tr>
                    <th style="font-weight:normal">Jurusan</th>
                    <th style="font-weight:normal; width:15px; text-align: center">:</th>
                    <th style="font-weight:normal"><?= $data['jurusan'] ?></th>
                </tr>
                <tr>
                    <th style="font-weight:normal">Email</th>
                    <th style="font-weight:normal; width:15px; text-align: center">:</th>
                    <th style="font-weight:normal"><?= $data['email'] ?></th>
                </tr>
            </table>
            <br>
            <a href="<?= BASEURL ?>mahasiswa" class="card-link">kembali</a>

        </div>
    </div>


</div>