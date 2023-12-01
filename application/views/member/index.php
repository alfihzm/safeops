<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?= form_error('nama_event', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message') ?>

            <a href="<?= base_url('member/tambahAnggota'); ?>" class="btn btn-primary mb-3"> Tambah Anggota
            </a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width: 120px;">No. Pegawai</th>
                        <th scope="col" style="width: 150px;">Nama</th>
                        <th scope="col" style="width: 130px;">Username</th>
                        <th scope="col" style="width: 130px;">Email</th>
                        <th scope="col" style="width: 120px;">Jabatan</th>
                        <th scope="col" style="width: 150px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($anggota as $a) : ?>
                    <tr>
                        <td><?= $a['nopeg']; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['username']; ?></td>
                        <td><?= $a['email']; ?></td>
                        <td>
                            <?php
                                if ($a['role_id'] == 2) {
                                    echo 'Satpam';
                                } else {
                                    echo $a['role_id']; // Jika bukan Satpam, tampilkan role_id
                                }
                                ?>
                        </td>
                        <td>
                            <a href="<?= base_url('member/viewAnggota/' . $a['id']); ?>" class="btn btn-primary"><i
                                    class="fa-solid fa-circle-info"></i></a>
                            <a href="<?= base_url('member/editAnggota/' . $a['id']); ?>" class="btn btn-success"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <a href="<?= base_url('anggota/hapusAnggota/' . $a['id']); ?>" class="btn btn-danger"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah Announcement -->
<!-- <div class="modal fade" id="newAnggotaModal" tabindex="-1" aria-labelledby="newAnggotaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="newAnggotaLabel">Tambah Anggota</h3>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                    &times;
                </button>
            </div>
            <form action="<?= base_url('anggota') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nopeg</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Ringkas">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nama</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Isi Pengumuman">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Email</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Isi Pengumuman">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Username</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Isi Pengumuman">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Password</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Isi Pengumuman">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">No. Telp</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Isi Pengumuman">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div> -->