<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <p style="margin-top: -25px;">Mengubah Announcement untuk.</p>

    <div class="row">
        <div class="col-lg-12">
            <!-- Display validation errors and flash messages -->
            <?= form_error('judul', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <div class="flash_message">
                <?= $this->session->flashdata('message') ?>
            </div>

            <!-- Form for editing announcement -->
            <form action="<?= base_url('announcement/update/' . $announcement['id']); ?>" method="POST">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $announcement['judul']; ?>" placeholder="Masukkan Judul Ringkas">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= date('Y-m-d', $announcement['date_created']); ?>" placeholder="Masukkan Tanggal">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $announcement['deskripsi']; ?>" placeholder="Masukkan Isi Pengumuman">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('announcement'); ?>" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<script type="text/javascript">
    window.setTimeout(function () {
        $(".flash_message").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 2000);
</script>