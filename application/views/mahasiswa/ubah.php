<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data mahasiswa
                </div>
                <div class="card-body">
                    <?php if(validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" value="<?= $mahasiswa['nim'] ?>" class="form-control" name="nim"
                                id="nim">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" value="<?= $mahasiswa['nama'] ?>" name="nama"
                                id="nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" value="<?= $mahasiswa['alamat'] ?>" name="alamat"
                                id="alamat">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">

                                <?php foreach($jurusan as $j) : ?>
                                    
                                    <?php if($j == $mahasiswa['jurusan'] ) : ?>
                                        <option value="<?= $j?>" selected><?= $j ?></option>
                                        <?php else : ?>

                                    <?php endif; ?>

                                <?php endforeach;?>

                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="number" class="form-control" name="no_hp" value="<?= $mahasiswa['no_hp'] ?>"
                                id="no_hp">
                        </div>
                        <div class="form-group">
                            <label for="tahun_masuk">Tahun Masuk</label>
                            <input type="number" class="form-control" name="tahun_masuk"
                                value="<?= $mahasiswa['tahun_masuk'] ?>" id="tahun_masuk">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="Ubah" class="btn btn-primary" value="Ubah Data">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>