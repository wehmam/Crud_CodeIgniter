<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">

            <div class="card">
                <div class="card-header">
                    Ubah Data mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim">
                            <small class="form-text text-danger"><?= form_error('nim') ?></small>
                        
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach($jurusan as $j ) : ?>
                                <option value="<?= $j ?>"><?= $j ?></option>
                                <?php endforeach; ?>
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="number" class="form-control" name="no_hp" id="no_hp">
                            <small class="form-text text-danger"><?= form_error('no_hp') ?></small>
                        
                        </div>
                        <div class="form-group">
                            <label for="tahun_masuk">Tahun Masuk</label>
                            <input type="number" class="form-control" name="tahun_masuk" id="tahun_masuk">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="tambah" class="btn btn-primary" value="Tambah Data">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>