<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="row">
        <div class="col-lg-12">
            <?= form_error('judul', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <div class="flash_message">
                <?= $this->session->flashdata('message') ?>
            </div>
            <table class="table table-hover table-striped" style="border: 3px solid #2B1C2F;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 16.666%;">Nama Pengunjung</th>
                        <th scope="col" style="width: 16.666%;">Tanggal Berkunjung</th>
                        <th scope="col" style="width: 16.666%;">Jam Kunjungan</th>
                        <th scope="col" style="width: 16.666%;">Jam Keluar</th>
                        <th scope="col" style="width: 16.666%;">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($keluar as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td style="width: 16.666%;"><?= $k['pengunjung']; ?></td>
                            <td style="width: 16.666%;"><?= date('d-m-Y', strtotime($k['tanggal'])); ?></td>
                            <td style="width: 16.666%;"><?= $k['jam_masuk']; ?></td>
                            <td style="width: 16.666%;"> <?= $k['jam_keluar'] ?></td>
                            <td style="width: 16.666%;"><?= $k['kategori']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script type="text/javascript">
    window.setTimeout(function() {
        $(".flash_message").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);
</script>
<script>
    $(document).ready(function() {
        // Handle the modal open event
        $('.open-modal').click(function() {
            var visitor_id = $(this).data('visitor-id');
            $('#visitor_id').val(visitor_id);
        });

        // Handle the form submission
        $('#updateStatusForm').submit(function(e) {
            e.preventDefault();

            // Submit the form
            $(this).unbind('submit').submit();
        });
    });
</script>