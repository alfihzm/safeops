<style>
    .fa-eye {
        width: 1.25em;
    }

    .fa-eye-slash {
        font-size: 1em;
    }
</style>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="row">
        <div class="col-lg-4">

            <?= $this->session->flashdata('message'); ?>

            <form action="<?= base_url('user/ubahPassword'); ?>" method="post">
                <div class="form-group">
                    <label for="current_password">Password Saat Ini</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="current_password" name="current_password" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash" id="toggleCurrentPassword"></i>
                            </span>
                        </div>
                    </div>
                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="new_password1">Password Baru</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="new_password1" name="new_password1" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash" id="toggleNewPassword"></i>
                            </span>
                        </div>
                    </div>
                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="new_password2">Konfirmasi Password Baru</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="new_password2" name="new_password2" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash" id="toggleConfirmPassword"></i>
                            </span>
                        </div>
                    </div>
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ubah Password</button>
                </div>
            </form>

        </div>
    </div>

</div>

<script>
    function togglePassword(inputId, iconId) {
        let passwordInput = document.getElementById(inputId);
        let icon = document.getElementById(iconId);

        if (passwordInput.getAttribute('type') === 'password') {
            passwordInput.setAttribute('type', 'text');
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            passwordInput.setAttribute('type', 'password');
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    }

    document.getElementById('toggleCurrentPassword').addEventListener('click', function() {
        togglePassword('current_password', 'toggleCurrentPassword');
    });

    document.getElementById('toggleNewPassword').addEventListener('click', function() {
        togglePassword('new_password1', 'toggleNewPassword');
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
        togglePassword('new_password2', 'toggleConfirmPassword');
    });
</script>