<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <!-- Display validation errors and flash messages -->
            <?= form_error('nama_event', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <div class="flash_message">
                <?= $this->session->flashdata('message') ?>
            </div>

            <!-- Form for editing event -->
            <form action="<?= base_url('event/update/' . $event['id']); ?>" method="POST">
                <div class="form-group">
                    <label for="nama_event">Nama Event</label>
                    <input type="text" class="form-control" id="nama_event" name="nama_event" value="<?= $event['nama_event']; ?>" placeholder="Masukkan Nama Event">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $event['deskripsi']; ?>" placeholder="Masukkan Deskripsi">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('event'); ?>" class="btn btn-secondary">Cancel</a>
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
