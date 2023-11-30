<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message') ?>

            <form action="<?= base_url('anggota/tambahAnggota') ?>" method="POST">
                <div class="form-group row">
                    <label for="nopeg" class="col-sm-3 col-form-label">Nopeg</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nopeg" name="nopeg" placeholder="Masukkan No. Pegawai">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no-telp" class="col-sm-3 col-form-label">No. Telp</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no-telp" name="no-telp" placeholder="Masukkan No. Telp">
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->