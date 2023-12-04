<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <p style="margin-top: -25px;">Pengumuman akan ditampilkan kepada para petugas.</p>

    <div class="row">
        <div class="col-lg-12">
            <?= form_error('judul', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <div class="flash_message">
                <?= $this->session->flashdata('message') ?>
            </div>
            <a href="" data-toggle="modal" data-target="#newAnnouncementModal" class="btn btn-primary mb-3"> Tambah
                Pengumuman</a>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tanggal dibuat</th>
                        <th scope="col">Isi pengumuman</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['judul']; ?></td>
                            <td><?= date('d F Y', $m['date_created']); ?></td>
                            <td><?= $m['deskripsi']; ?></td>
                            <td>
                                <a href="" class="btn btn-success"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                <a href="<?= base_url('announcement/delete/' . $m['id']); ?>" class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<!-- Modal Tambah Announcement -->
<div class="modal fade" id="newAnnouncementModal" tabindex="-1" aria-labelledby="newAnnouncementModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-5" id="newAnnouncementModalLabel">Tambah Event</h2>
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
            </div>
            <form action="<?= base_url('announcement') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Ringkas">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Tanggal</label>
                        <input type="date" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Isi Pengumuman">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Isi Pengumuman">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<script type="text/javascript">
    window.setTimeout(function() {
        $(".flash_message").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);
</script>