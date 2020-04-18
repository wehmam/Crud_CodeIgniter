<div class="container">
    <div class="row mt-3">

        <?php if($this->session->flashdata('flash')) : ?>

        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong> Berhasil </strong><?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php endif; ?>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12 mt-5 text-center mb-5">
            <h3>Daftar Mahasiswa</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">No Handphone</th>
                        <th scope="col">Tahun Masuk</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($mahasiswa as $mhs) : ?>
                    <tr>
                        <td><?= $mhs['nim'] ?></td>
                        <td><?= $mhs['nama'] ?></td>
                        <td><?= $mhs['alamat'] ?></td>
                        <td><?= $mhs['jurusan'] ?></td>
                        <td><?= $mhs['no_hp'] ?></td>
                        <td><?= $mhs['tahun_masuk'] ?></td>
                        <td><a href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin ingin menghapus data?')">Hapus</a>
                            <a href="<?= base_url() ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary">Detail</a>
                            <a href="<?= base_url() ?>mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-success">Ubah</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
