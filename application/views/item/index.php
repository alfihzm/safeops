<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="alert alert-secondary" role="alert" style="margin-top: -15px;">
        Barang yang hilang wajib dilaporkan 1x24 jam, jika barang sudah ditemukan harap segera perbarui data.
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= form_error('judul', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <div class="flash_message">
                <?= $this->session->flashdata('message') ?>
            </div>
            <a href="" data-toggle="modal" data-target="#newItemModal" class="btn btn-primary mb-3"> Tambah Pengunjung</a>
            <h3 style="color: #2B1C2F">Item Hilang</h3>
            <table class="table table-hover table-striped" style="border: 3px solid #2B1C2F;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 16.666%;">Nama Pemilik</th>
                        <th scope="col" style="width: 16.666%;">Tanggal Hilang</th>
                        <th scope="col" style="width: 16.666%;">Merk</th>
                        <th scope="col" style="width: 16.666%;">Ciri</th>
                        <th scope="col" style="width: 16.666%;">Jam Hilang</th>
                        <th scope="col" style="width: 16.666%;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php if (empty($belum)) : ?>
                        <tr>
                            <td colspan="7">Tidak ada data barang yang hilang di area kantor.</td>
                        </tr>
                    <?php else : ?>
                        <?php foreach ($belum as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['pemilik']; ?></td>
                                <td><?= date('d-m-Y', strtotime($m['tanggal'])); ?></td>
                                <td><?= $m['merk']; ?></td>
                                <td><?= $m['ciri'] ?></td>
                                <td><?= $m['jam_hilang'] ?></td>
                                <td><?= $m['status']; ?></td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#newMoveModal" data-item-id="<?= $m['id'] ?>" class="btn btn-success open-modal">
                                        <i class="fa-solid fa-person-circle-check" style="color: #ffffff;"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <h3 style="color: #2B1C2F;">Log Barang Hilang</h3>
            <a href="<?= base_url('item/unduhitem'); ?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa-solid fa-file-arrow-down fa-lg"></i> Unduh Laporan Ini</a>
            <table class="table table-hover table-striped" style="border: 3px solid #2B1C2F;"><br>
                <label for="searchInput">Cari berdasarkan Nama Pemilik: </label>
                <input type="text" id="searchInput" placeholder="Search by Nama Pengunjung...">

                <label for="dateInput">Cari berdasarkan Tanggal Berkunjung: </label>
                <input type="date" id="dateInput">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 16.666%;">Nama Pemilik</th>
                        <th scope="col" style="width: 16.666%;">Tanggal Ditemukan</th>
                        <th scope="col" style="width: 16.666%;">Merk</th>
                        <th scope="col" style="width: 16.666%;">Ciri</th>
                        <th scope="col" style="width: 16.666%;">Jam Ditemukan</th>
                        <th scope="col" style="width: 16.666%;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php if (empty($sudah)) : ?>
                        <tr>
                            <td colspan="7">Tidak ada data barang yang hilang di area kantor.</td>
                        </tr>
                    <?php else : ?>
                        <?php foreach ($sudah as $k) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td style="width: 16.666%;"><?= $k['pemilik']; ?></td>
                                <td style="width: 16.666%;"><?= date('d-m-Y', strtotime($k['tanggal2'])); ?></td>
                                <td style="width: 16.666%;"><?= $k['merk']; ?></td>
                                <td style="width: 16.666%;"><?= $k['ciri']; ?></td>
                                <td style="width: 16.666%;"> <?= $k['jam_ditemukan'] ?></td>
                                <td style="width: 16.666%;"><?= $k['status']; ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<!-- Modal Tambah Barang Hilang -->
<div class="modal fade" id="newItemModal" tabindex="-1" aria-labelledby="newItemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-5" id="newItemModalLabel">Tambahkan Barang Hilang</h2>
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
            </div>
            <form action="<?= base_url('item') ?>" method="POST">
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
                        <label for="formGroupExampleInput2">Shift</label>
                        <select class="form-control" id="shift" name="shift">
                            <option value="">Pilih shift</option>
                            <option value="Pagi">Pagi</option>
                            <option value="Malam">Malam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Pemilik</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Masukan Nama Pemilik">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Kategori Barang</label>
                        <select class="form-control" id="jenis" name="jenis">
                            <option value="">Pilih kategori jenis</option>
                            <option value="Dokumen">Dokumen</option>
                            <option value="Elektronik">Elektronik</option>
                            <option value="Perhiasan">Perhiasan</option>
                            <option value="Barang pribadi">Barang pribadi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Tanggal Hilang</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Tanggal Hilang">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Merk</label>
                        <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukan Nama/Merk barang">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Ciri</label>
                        <input type="textarea" class="form-control" id="ciri" name="ciri" placeholder="Masukan ciri-ciri barang">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Jam Hilang</label>
                    </div>
                    <div style="margin-top: -15px; margin-bottom: 5px;">
                        <input type="time" class="form-control" id="jam_hilang" name="jam_hilang" min="01:00" max="24:00" required>
                    </div>
                    <div class="form-group" style="display: none;">
                        <label for="formGroupExampleInput">Status</label>
                        <input type="hidden" class="form-control" id="status" name="status" value="Belum ditemukan">
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
                <h4 class="modal-title fs-5" id="newMoveModalLabel">Perbarui Barang Hilang</h2>
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
            </div>
            <form action="<?= base_url('item/updateStatus') ?>" method="POST" id="updateStatusForm">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $m['id'] ?>">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Tanggal Ditemukan</label>
                    </div>
                    <div style="margin-top: -15px; margin-bottom: 5px;">
                        <input type="date" class="form-control" id="tanggal2" name="tanggal2" placeholder="Masukan Tanggal Ditemukan">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Jam Ditemukan</label>
                    </div>
                    <div style="margin-top: -15px; margin-bottom: 5px;">
                        <input type="time" class="form-control" id="jam_ditemukan" name="jam_ditemukan" min="00:00" max="24:00" required>
                    </div>
                    <div class="form-group" style="display: none;">
                        <label for="formGroupExampleInput">Status</label>
                        <input type="hidden" class="form-control" id="status" name="status" value="Sudah ditemukan">
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
            var namaItemValue = $("#searchInput").val().toLowerCase();
            var tanggalItemValue = $("#dateInput").val();

            $("table tbody tr").filter(function() {
                var namaItemMatch = $(this).find("td:nth-child(2)").text().toLowerCase().indexOf(namaItemValue) > -1;
                var tanggalItemMatch = tanggalItemValue === "" || $(this).find("td:nth-child(3)").text() === tanggalItemValue;
                $(this).toggle(namaItemMatch && tanggalItemMatch);
            });
        });
    });
</script>