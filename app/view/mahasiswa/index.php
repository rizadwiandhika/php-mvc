<div class="container">
    <br><br>

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tampilTambahModal mb-3" data-toggle="modal" data-target="#exampleModal">
                Tambah mahasiswa
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>mahasiswa/cari" method="post">
                <div class="input-group mt-3" id="searchingbox">
                    <input type="text" class="form-control" placeholder="Cari mahasiswa..." id="keyword" name="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">search</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <br>
    <div id="penampung">
        <div class="row">
            <div class="col-lg-6">

                <h3 class="">Daftar Mahasiswa</h3>

                <ul class="list-group mt-3">
                <?php foreach($data['mahasiswa'] as $mhs): ?>
                    <li class="list-group-item"><?= $mhs['nama'] . " - " . $mhs['id'] ?>
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
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">#</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="#" method="POST">
            <input type="hidden" id="id" name="id">
        <div class="form-group">
            <label for="nama">Nama lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Tulis nama lengkap">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="nama@contoh.com">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="Informatika">Informatika</option>
            <option value="Aktuaria">Aktuaria</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
            </select>
        </div>

    </div>
    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
    </div>
    </div>
</div>
</div>
