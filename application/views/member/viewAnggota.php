<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message') ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="card mb-3 border border-info"
                style="display: flex; justify-content: center; align-items: center; background: #FFF; width: 100%; height: 100%;">
                <img class="mt-5 border border-info" style="border-radius: 5%; width: 50%;"
                    src="<?= base_url('assets/img/profile/') . $anggota['photo_profile'] ?>" class="img-fluid"
                    alt="<?= $user['nama'] ?>">
                <div class="card-body" style="display: flex; align-items: center; flex-direction: column;">
                    <h5 style="text-align: center;" class="card-title mt-4">
                        <?= $anggota['nama'] ?></h5>
                    <p>
                        <?php
                        if ($anggota['role_id'] == 1) {
                            echo 'Administrator';
                        } else {
                            echo 'Security';
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card border border-info" style="display: flex; background: #FFF; width: 100%; height: 100%;">
                <div class="card-body">
                    <h5 style="text-align: center;" class="card-title mt-1">Informasi Anggota</h5>
                    <hr>
                    <div class="form-group row">
                        <label for="nopeg" class="col-sm-10 col-form-label">No. Pegawai</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nopeg" name="nopeg" readonly
                                value="<?= $anggota['nopeg']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-10 col-form-label">Email</label>
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="nama" name="nama"
                                value="<?= $anggota['email']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-10 col-form-label">No. Telp</label>
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="nama" name="nama"
                                value="<?= $anggota['no_telp']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-10 col-form-label">Aktif Sejak</label>
                        <div class="col-sm-12">
                            <input readonly type="text" class="form-control" id="nama" name="nama"
                                value="<?= date('d F Y', $anggota['date_created']); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
<!-- End of Main Content -->
<script type="text/javascript">
window.setTimeout(function() {
    $(".col-lg-6").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
    });
}, 2000);
</script>