<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?></h1>

    <div class="card mb-3" style="max-width: 530px;">
        <div class="row g-0">
            <div class="col-md-4" style="display: flex; align-items: center; text-align: center;">
                <img style="margin-left: 2px; border-radius: 2px; " src="<?= base_url('assets/img/profile/') . $user['photo_profile'] ?>" class="img-fluid" alt="<?= $user['nama'] ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div style="flex: 1;">
                        <h5 class="card-title"> <?= $user['nama']; ?></h5>
                        <p class="card-text"> No. Pegawai: <?= $user['nopeg'] ?></p>
                    </div>
                    <div style="flex: 1;">
                        <p class="card-text"> Username: <?= $user['username'] ?></p>
                        <p class="card-text"> Bekerja Sejak:
                            <?= date('d F Y', $user['date_created']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->