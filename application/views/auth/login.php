<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/auth/login.css') ?>">
</head>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="container" style="margin-top: 7vh; width: 80%; opacity: 94%;">
                <div class="card o-hidden shadow-lg my-4 border-0">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5" style="background: #1D243C;">
                                    <div class="text-center">
                                        <h1 style="color: #FFF;" class="h4 mb-4"> SafeOps Login </h1>
                                        <i class="fas fa-fw fa-solid fa-user-secret fa-2x"></i>
                                    </div>

                                    <div class="flash_data">
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>

                                    <form class="user" method="post" action="<?= base_url('auth'); ?>" autocomplete="off">
                                        <div class="form-group">
                                            <p> Username </p>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group" style="width: 50px; display: flex; justify-content: center; align-items: center; background: #2d3a67; border-radius: 6px 0px 0px 6px">
                                                        <i class="fas fa-solid fa-id-card" style="font-size: 18px;"></i>
                                                    </span>
                                                </div>
                                                <input style="border-radius: 0px 5px 5px 0px; border: 0px; background: #262E49; color: #23C78D;" type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan Username" value="<?= set_value('username') ?>">
                                            </div>
                                            <?= form_error('username', '<small class="text-danger">', '</small'); ?>
                                        </div>

                                        <div class="form-group">
                                            <p> Password </p>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group" style="width: 50px; display: flex; justify-content: center; align-items: center; background: #2d3a67; border-radius: 6px 0px 0px 6px">
                                                        <i class=" fas fa-solid fa-key" style="font-size: 18px;"></i>
                                                    </span>
                                                </div>
                                                <input style="border-radius: 0px 5px 5px 0px; border: 0px; background: #262E49; color: #23C78D;" type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password">
                                            </div>
                                            <?= form_error('password', '<small class="text-danger">', '</small'); ?>
                                        </div>

                                        <button type="submit" class="btn btn-success btn-user mt-5 btn-block">
                                            Masuk
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a style="text-decoration: none;" class="small" href="<?= base_url('welcome'); ?>">
                                            Kembali </a>
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

<script type="text/javascript">
    window.setTimeout(function() {
        $(".flash_data").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);
</script>