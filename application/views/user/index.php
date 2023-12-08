<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="row">
        <div class="col-lg-12">
            <?= $this->session->flashdata('message') ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5 mb-3">
            <div class="card mb-3 border border-info" style="display: flex; justify-content: center; align-items: center; background: #FFF; width: 100%; height: 100%; box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73);">
                <img class="mt-5 border border-info" style="border-radius: 5%; width: 50%;" src="<?= base_url('assets/img/profile/') . $user['photo_profile'] ?>" class="img-fluid" alt="<?= $user['nama'] ?>">
                <div class="card-body" style="display: flex; align-items: center; flex-direction: column;">
                    <h5 style="text-align: center;" class="card-title mt-4">
                        <?= $user['nama'] ?></h5>
                    <p>
                        <?php
                        if ($user['role_id'] == 1) {
                            echo 'Administrator';
                        } else {
                            echo 'Security';
                        }
                        ?>
                    </p>
                    <div class="row-md-5" style="display: flex; justify-content: center; align-items: center; background: #FFF; width: 100%; height: 100%;">
                        <a href="<?= base_url('user/edit'); ?>" class="btn btn-success" style="margin-right: 15px;"><i class="fa-solid fa-pencil"></i></a>
                        <a href="<?= base_url('user/ubahPassword'); ?>" class="btn btn-primary"><i class="fa-solid fa-key"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7 mb-3">
            <div class="card border border-info" style="display: flex; background: #FFF; width: 100%; height: 100%; box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73);">
                <div class="card-body">
                    <h5 style="text-align: center;" class="card-title mt-1">Informasi Anggota</h5>
                    <hr>
                    <div class="form-group row">
                        <label for="nopeg" class="col-sm-10 col-form-label">No. Pegawai</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nopeg" name="nopeg" readonly value="<?= $user['nopeg']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-10 col-form-label">Email</label>
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="nama" name="nama" value="<?= $user['email']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-10 col-form-label">No. Telp</label>
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="nama" name="nama" value="<?= $user['no_telp']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-10 col-form-label">Aktif Sejak</label>
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="nama" name="nama" value="<?= date('d F Y', $user['date_created']); ?>">
                            <?php
                            $dateCreated = $user['date_created'];
                            $currentTime = time();
                            $timeDifference = $currentTime - $dateCreated;
                            $daysDifference = floor($timeDifference / (60 * 60 * 24));
                            ?>
                            <!-- <h1 class="style=col-sm-10">Bekerja sejak <?= $daysDifference ?> hari lalu</h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.setTimeout(function() {
        $(".col-lg-12").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);
</script>