<style>
    .fa-eye {
        width: 1.25em;
    }

    .fa-eye-slash {
        font-size: 1em;
    }
</style>

<div class="container-fluid col-md-8">
    <div class="card border border-primary" style="background: #FFF; width: 100%; box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73);">
        <div class="card-body">
            <h5 style="text-align: center;" class="card-title mt-1"><?= $judul; ?></h5>
            <hr>
            <form action="<?= base_url('member/tambahAnggota') ?>" method="POST">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nopeg">No. Pegawai</label>
                            <input type="text" class="form-control" id="nopeg" name="nopeg" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" autocomplete="off">
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
                            <input type="text" class="form-control" id="no_telp" name="no_telp" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <button style="margin-right: 10px;" type="submit" class="btn btn-primary">Tambah</button>
                        <a href="<?= base_url('member'); ?>" class="btn btn-dark"> Batal </a>
                    </div>
                </div>
            </form>
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