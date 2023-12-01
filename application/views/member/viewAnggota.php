<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="card mb-3" style="max-width: 530px;">
        <div class="row g-0">
            <div class="col-md-4" style="display: flex; align-items: center; text-align: center;">
                <img style="margin-left: 20px; border-radius: 2px; " src="<?= base_url('assets/img/profile/') . $anggota['photo_profile'] ?>" class="img-fluid" alt="<?= $anggota['nama'] ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div style="flex: 1;">
                        <p class="card-text">
                            <strong>No. Pegawai:</strong> <?= $anggota['nopeg']; ?><br>
                            <strong>Nama:</strong> <?= $anggota['nama']; ?><br>
                            <strong>Username:</strong> <?= $anggota['username']; ?><br>
                            <strong>Jabatan:</strong> <?php
                            if ($anggota['role_id'] == 1) {
                                echo 'Administrator';
                            } else {
                                echo 'Satpam';
                            }
                            ?><br>
                            <strong>Email:</strong> <?= $anggota['email']; ?><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

