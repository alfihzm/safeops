<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">
    <title> Akses Ditolak </title>
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="layoutError">
        <div id="layoutError_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mt-4">
                                <img class="img-error mx-auto d-block" src="<?= base_url('assets/'); ?>img/error-404-monochrome.png" />
                                <p class="lead">Kamu tidak memiliki akses untuk mencapai laman ini!</p>
                                <a href="<?= base_url('user') ?>">
                                    <i class="fas fa-arrow-left me-1"></i>
                                    Kembali ke Halaman
                                </a>
                            </div>
                            <div class="text-center">
                                <span class="text-primary">Atau hubungi administrator!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
</body>

</html>