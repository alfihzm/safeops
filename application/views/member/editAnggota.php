<!-- <div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message') ?>

            <?= form_open('member/editAnggota/' . $anggota['id']) ?>
            <div class="form-group row">
                <label for="nopeg" class="col-sm-3 col-form-label">Nopeg</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nopeg" name="nopeg" value="<?= $anggota['nopeg']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama lengkap</label>
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
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password"><input type="checkbox" onclick="togglePassword()" style="margin-top: 10px;">Tampilkan Sandi
                </div>
            </div>
            <div class="form-group row">
                <label for="no-telp" class="col-sm-3 col-form-label">No. Telp</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="no-telp" name="no-telp" placeholder="Masukkan No. Telp">
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
                <div class="col-sm-6">
                    <a href="<?= base_url('member'); ?>" class="btn btn-secondary">Batal</a>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div> -->

<style>
    .fa-eye {
        width: 1.25em;
    }

    .fa-eye-slash {
        font-size: 1em;
    }
</style>

<div class="col-md-8 mb-3 container-fluid">
    <div class="card border border-primary" style="background: #FFF; width: 100%; height: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
        <div class="card-body">
            <h5 style="text-align: center;" class="card-title mt-1">Ubah Profil Anggota</h5>
            <hr>
            <?= form_open('member/editAnggota/' . $anggota['id']) ?>
            <div class="row">
                <div class="col-sm-12" style="display: flex; justify-content: center; align-items: center">
                    <div class="form-group" style="display: flex; justify-content: center; align-items: center">
                        <img class=" border border-primary" style="border-radius: 5%; width: 32%;" src="<?= base_url('assets/img/profile/') . $anggota['photo_profile'] ?>" class="img-fluid" alt="<?= $user['nama'] ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nopeg">No. Pegawai</label>
                        <input type="text" class="form-control" id="nopeg" name="nopeg" value="<?= $anggota['nopeg']; ?>" readonly>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $anggota['nama']; ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $anggota['email']; ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $anggota['username']; ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-eye-slash" id="togglePassword"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="no_telp">No. Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $anggota['no_telp']; ?>">
                    </div>
                </div>
                <div class="col-sm-12">
                    <button style="margin-right: 5px;" type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('member'); ?>" class="btn btn-secondary">Batal</a>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        var passwordInput = document.getElementById('password');
        var icon = document.getElementById('togglePassword');

        if (passwordInput.getAttribute('type') === 'password') {
            passwordInput.setAttribute('type', 'text');
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            passwordInput.setAttribute('type', 'password');
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    });
</script>