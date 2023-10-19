<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="container" style="margin-top: 11vh;">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"> SafeOps Login </h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                        <div class="form-group">
                                            <p> Username / Email </p>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                        style="width: 50px; display: flex; justify-content: center; align-items: center;">
                                                        <i class="fas fa-solid fa-user-secret"
                                                            style="font-size: 18px;"></i>
                                                    </span>
                                                </div>
                                                <input style="border-radius: 5px;" type="text"
                                                    class="form-control form-control-user" id="username" name="username"
                                                    placeholder="Masukkan Username">
                                            </div>
                                            <?= form_error('username', '<small class="text-danger">', '</small'); ?>
                                        </div>

                                        <div class="form-group">
                                            <p> Password </p>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                        style="width: 50px; display: flex; justify-content: center; align-items: center;">
                                                        <i class="fas fa-solid fa-lock" style="font-size: 18px;"></i>
                                                    </span>
                                                </div>
                                                <input style="border-radius: 5px;" type="password"
                                                    class="form-control form-control-user" id="password" name="password"
                                                    placeholder="Masukkan Password">
                                            </div>
                                            <?= form_error('password', '<small class="text-danger">', '</small'); ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html"> Lupa Password? </a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration') ?>"> Ingin Bergabung?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>