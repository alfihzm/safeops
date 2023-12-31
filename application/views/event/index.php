<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="flash_message">
        <?= $this->session->flashdata('message') ?>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?= form_error('nama_event', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>


            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newEventModal"> Tambah Event</a>

            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Event</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['nama_event']; ?></td>
                            <td><?= $m['deskripsi']; ?></td>
                            <td><?= $m['tanggal']; ?></td>
                            <td><?= $m['jam_mulai']; ?> - <?=$m['jam_selesai']?></td>
                            <td>
                                <a href="<?= base_url('event/update/' . $m['id']); ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                <a href="<?= base_url('event/delete/' . $m['id']); ?>" class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
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

<!-- Modal Tambah Event -->
<div class="modal fade" id="newEventModal" tabindex="-1" aria-labelledby="newEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-5" id="newEventModalLabel">Tambah Event</h4>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                    &times;
                </button>
            </div>
            <form action="<?= base_url('event') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Event</label>
                        <input type="text" class="form-control" id="nama_event" name="nama_event" placeholder="Masukan Nama Event">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Tanggal Event</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Jam Mulai Event</label>
                        <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" min="01:00" max="24:00" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Jam Keluar Event</label>
                        <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" min="01:00" max="24:00" required>
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

<script type="text/javascript">
    window.setTimeout(function() {
        $(".flash_message").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);
</script>