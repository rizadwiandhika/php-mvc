<div id="penampung">
    <div class="row">
        <div class="col-lg-6">

            <h3 class="">Daftar Mahasiswa</h3>

            <ul class="list-group mt-3">
            <?php foreach($data['mahasiswa'] as $mhs): ?>
                <li class="list-group-item"><?= $mhs['nama'] ?>
                    <a href="<?= BASEURL ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger badge-pill float-right ml-1" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    <button class="badge badge-secondary badge-pill float-right ml-1 tampilUbahModal" data-toggle="modal" data-target="#exampleModal" data-id="<?= $mhs['id'] ?>">Edit</button>
                    <a href="<?= BASEURL ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary badge-pill float-right ml-1">Detail</a>
                </li>
            <?php endforeach ?>

            <?php if(empty($data['mahasiswa']))
                echo "Mahasiswa tidak ditemukan";
            ?>
            </ul>

        </div>
    </div>
</div>