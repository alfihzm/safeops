<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?></h1>
    <div class="row">
        <div class="col">
            <?= $this->session->flashdata('message') ?>
            <form action="<?= base_url('reports/wajib') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nopeg" class="col-sm-3 col-form-label">Nomor Pegawai</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nopeg" name="nopeg" value="<?= $user['nopeg']; ?>" placeholder=" Masukkan No. Pegawai" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama lengkap</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" placeholder="Masukkan Nama Lengkap" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Laporan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                    <div class="col-sm-12">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="myTextarea" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-12">
                        <textarea class="form-control" id="myTextarea" name="deskripsi" placeholder="Ketik keterangan laporan secara lengkap"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-12">
                        <input type="file" class="form-control" name="image" id="image" accept="image/jpeg, image/png">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-3 col-form-label">Komentar</label>
                    <div class="col-sm-12">
                        <textarea class="form-control" id="komentar" name="komentar" placeholder="Ketik komentar untuk Staff"></textarea>
                        <small>Jika diperlukan</small>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->