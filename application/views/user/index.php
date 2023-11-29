<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?> </h1>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message') ?>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 530px;">
        <div class="row g-0">
            <div class="col-md-4" style="display: flex; align-items: center; text-align: center;">
                <img style="margin-left: 20px; border-radius: 2px; " src="<?= base_url('assets/img/profile/') . $user['photo_profile'] ?>" class="img-fluid" alt="<?= $user['nama'] ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div style="flex: 1;">
                        <b>
                            <h5 class="card-title"> <?= $user['nama']; ?></h5>
                        </b>
                        <p class="card-text"> No. Pegawai: <?= $user['nopeg'] ?></p>
                        <?php
                        if ($user['role_id'] == 1) {
                            echo 'Jabatan: Administrator';
                        } else {
                            echo 'Jabatan: Satpam';
                        }
                        ?>
                        <p class="card-text"> Username: <?= $user['username'] ?></p>
                        <p class="card-text"> Bekerja Sejak:
                            <?= date('d F Y', $user['date_created']);
                            $dateCreated = $user['date_created'];
                            $currentTime = time();
                            $timeDifference = $currentTime - $dateCreated;
                            $daysDifference = floor($timeDifference / (60 * 60 * 24)); ?>
                            <br>
                            Sejak <?= $daysDifference ?> hari lalu
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