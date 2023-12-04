<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?></h1>
    <div class="row">
        <div class="col">
            <?= $this->session->flashdata('message') ?>
            <form action="<?= base_url('reports/wajib') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama Petugas</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $laporan['nama']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nomor Pegawai</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $laporan['nopeg']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Tanggal Laporan</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $laporan['tanggal']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Shift</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="shift" name="shift" value="<?= $laporan['shift']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Isi Laporan</label>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-text border-secondary text-grey" style="background-color:#eaecf4; width: 100%;"><?= htmlspecialchars_decode($laporan['deskripsi']); ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Foto Laporan</label>
                    <div class="col-sm-12">
                        <img src="<?= base_url('assets/img/report/wajib/') . $laporan['image']; ?>" alt="Gambar" class="img-thumbnail" width="250" height="250">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Komentar Tambahan</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $laporan['komentar']; ?>" readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <a href="<?= base_url('reports/logwajib') ?>" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->