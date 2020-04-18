<div class="container">
<div class="row mt-3">
    <div class="col-md-6 justify-content-center">

        <div class="card text-center">
            <div class="card-header">
                Detail Data Mahasiswa
            </div>
            <div class="card-body text-center">
                <h5 class="card-title"><?= $mahasiswa['nama'] ?></h5>
                <p class="card-text"><?= $mahasiswa['jurusan'] ?></p>
                <p class="card-text"><?= $mahasiswa['alamat'] ?></p>
                <p class="card-text"><?= $mahasiswa['no_hp'] ?></p>
                <p class="card-text"><?= $mahasiswa['tahun_masuk'] ?></p>
                <a href="<?= base_url() ?>mahasiswa" class="btn btn-primary">Home</a>
            </div>
        </div>

    </div>
</div>
</div>