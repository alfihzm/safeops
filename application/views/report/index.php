<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="alert alert-secondary" role="alert">
        1. Mohon segera isi laporan wajib sebelum menyelesaikan sisa shift kerja!<br>
        2. Jika terjadi kendala atau kejadian tertentu isi laporan kejadian beserta detail kejadiannya.
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= form_error('nama_event', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message') ?>
            <table class="table table-hover text-light border-secondary" style="border: 2px solid; background: #2B1C2F;">
                <tr>
                    <th class="col-sm-6">Jenis Laporan</th>
                    <th class="col-sm-4"></th>
                    <th scope="col">Lihat</th>
                    <th scope="col">Unduh</th>
                </tr>
                <tr class="table-info">
                    <td>
                        <a href="<?= base_url('report/wajib') ?>" class="btn btn-primary-responsive-width btn-outline-light mb-3" style="background: #2B1C2F;">Laporan Wajib</a>
                    </td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-warning"><i class="fa-solid fa-eye fa-lg"></i></i></a>
                    </td>
                    <td>
                        <a href="" class="btn btn-success"><i class="fa-solid fa-file-arrow-down fa-lg"></i></i></a>
                    </td>
                </tr>
                <tr class="table-info">
                    <td><a href="" class="btn btn-primary-responsive-width btn-outline-light mb-3" style="background: #2B1C2F;">Laporan Kejadian</a></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-warning"><i class="fa-solid fa-eye fa-lg"></i></i></a>
                    </td>
                    <td>
                        <a href="" class="btn btn-success"><i class="fa-solid fa-file-arrow-down fa-lg"></i></a>
                    </td>
                </tr>
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
                <h3 class="modal-title fs-5" id="newEventModalLabel">Tambah Event</h3>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>