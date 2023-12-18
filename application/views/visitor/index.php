<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="alert alert-secondary" role="alert" style="margin-top: -15px;">
        Tamu atau pengunjung yang masuk ke dalam lingkungan kantor
        wajib didaftarkan ke pengunjung aktif.
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= form_error('judul', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <div class="flash_message">
                <?= $this->session->flashdata('message') ?>
            </div>
            <a href="" data-toggle="modal" data-target="#newVisitorModal" class="btn btn-primary mb-3"> Tambah Pengunjung</a>
            <h3 style="color: #2B1C2F">Pengunjung Aktif</h3>
            <table class="table table-hover table-striped" style="border: 3px solid #2B1C2F;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 16.666%;">Nama Pengunjung</th>
                        <th scope="col" style="width: 16.666%;">Tanggal Berkunjung</th>
                        <th scope="col" style="width: 16.666%;">Jam Kunjungan</th>
                        <th scope="col" style="width: 16.666%;">Jam Keluar</th>
                        <th scope="col" style="width: 16.666%;">Kategori</th>
                        <th scope="col" style="width: 16.666%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php if (empty($masuk)) : ?>
                        <tr>
                            <td colspan="7">Tidak ada data pengunjung yang masih berada di area kantor</td>
                        </tr>
                    <?php else : ?>
                        <?php foreach ($masuk as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['pengunjung']; ?></td>
                                <td><?= date('d-m-Y', strtotime($m['tanggal'])); ?></td>
                                <td><?= $m['jam_masuk']; ?></td>
                                <td>N/A</td>
                                <td><?= $m['kategori']; ?></td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#newMoveModal" data-visitor-id="<?= $m['id'] ?>" class="btn btn-success open-modal">
                                        <i class="fa-solid fa-person-circle-check" style="color: #ffffff;"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </tbody>
            </table>
            <h3 style="color: #2B1C2F;">Log Pengunjung</h3>
            <a href="<?= base_url('visitor/unduhvisitor'); ?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa-solid fa-file-arrow-down fa-lg"></i> Unduh Laporan Ini</a>
            <table class="table table-hover table-striped" style="border: 3px solid #2B1C2F;"><br>
                <label for="searchInput">Cari berdasarkan Nama Pengunjung: </label>
                <input type="text" id="searchInput" placeholder="Cari Nama Pengunjung...">

                <label for="dateInput">Cari berdasarkan Tanggal Berkunjung: </label>
                <input type="date" id="dateInput">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 30.666%;">Nama Pengunjung</th>
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
                            <td style="width: 30.666%;"><?= $k['pengunjung']; ?></td>
                            <td style="width: 16.666%;"><?= $k['tanggal']; ?></td>
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

<!-- Modal Tambah Pengunjung -->
<div class="modal fade" id="newVisitorModal" tabindex="-1" aria-labelledby="newVisitorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-5" id="newVisitorModalLabel">Tambahkan Pengunjung</h2>
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
            </div>
            <form action="<?= base_url('visitor') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nopeg" class="col-sm-6 col-form-label">Nomor Pegawai</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nopeg" name="nopeg" value="<?= $user['nopeg']; ?>" placeholder=" Masukkan No. Pegawai" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-6 col-form-label">Nama lengkap</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" placeholder="Masukkan Nama Lengkap" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Pengunjung</label>
                        <input type="text" class="form-control" id="pengunjung" name="pengunjung" placeholder="Masukan Nama Pengunjung">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Isi Pengumuman">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Jam Masuk</label>
                    </div>
                    <div style="margin-top: -15px; margin-bottom: 5px;">
                        <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" min="01:00" max="24:00" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori">
                            <option value="">Pilih kategori pengunjung</option>
                            <option value="Kontraktor">Kontraktor</option>
                            <option value="TNI/POLRI">TNI/POLRI</option>
                            <option value="VVIP">VVIP</option>
                            <option value="Tamu">Tamu</option>
                        </select>
                    </div>
                    <div class="form-group" style="display: none;">
                        <label for="formGroupExampleInput">Status</label>
                        <input type="hidden" class="form-control" id="status" name="status" value="Belum keluar">
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
<div class="modal fade" id="newMoveModal" tabindex="-1" aria-labelledby="newMoveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-5" id="newMoveModalLabel">Tambahkan Pengunjung</h2>
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
            </div>
            <form action="<?= base_url('visitor/updateStatus') ?>" method="POST" id="updateStatusForm">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $m['id'] ?>">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Jam Keluar</label>
                    </div>
                    <div style="margin-top: -15px; margin-bottom: 5px;">
                        <input type="time" class="form-control" id="jam_keluar" name="jam_keluar" min="01:00" max="24:00" required>
                    </div>
                    <div class="form-group" style="display: none;">
                        <label for="formGroupExampleInput">Status</label>
                        <input type="hidden" class="form-control" id="status" name="status" value="Sudah keluar">
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $("#searchInput, #dateInput").on("input change", function() {
            var namaPengunjungValue = $("#searchInput").val().toLowerCase();
            var tanggalBerkunjungValue = $("#dateInput").val();

            $("table tbody tr").filter(function() {
                var namaPengunjungMatch = $(this).find("td:nth-child(2)").text().toLowerCase().indexOf(namaPengunjungValue) > -1;
                var tanggalBerkunjungMatch = tanggalBerkunjungValue === "" || $(this).find("td:nth-child(3)").text() === tanggalBerkunjungValue;

                $(this).toggle(namaPengunjungMatch && tanggalBerkunjungMatch);
            });
        });
    });
</script>