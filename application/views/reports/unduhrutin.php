<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 text-gray-800 text-center d-flex align-items-center justify-content-center"> <?= $judul; ?></h1>
    <h1 class="h3 text-gray-800 container text-center"> <?= date('j F Y', $laporan['date_created']); ?></h1>
    <p class="text-center justify-content-center">Dicetak pada <?= date('F j, Y, g:i a'); ?></p>
    <div class="container text-center" style="margin-top: -10px;">
        <a href="#" id="printButton" class="btn btn-success"><i class="fa-solid fa-file-arrow-down fa-lg"></i> Unduh Laporan Ini</a>
    </div>
    <div class="row">
        <div class="col">
            <?= $this->session->flashdata('message') ?>
            <form action="<?= base_url('reports/wajib') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama Petugas</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $laporan['nama']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nomor Pegawai</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $laporan['nopeg']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Tanggal Laporan</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $laporan['tanggal']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Shift</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="shift" name="shift" value="<?= $laporan['shift']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <p class="col-sm-4"><b>Pemeriksaan Fungsional</b></p>
                </div>

                <!-- Kondisi Kelistrikan -->
                <div class="form-group row" style="margin-top: -30px;">
                    <label class="col-sm-4 col-form-label">Kondisi Kelistrikan</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="listrik" id="berfungsi" value="Berfungsi" <?php echo ($laporan['listrik'] == 'Berfungsi') ? 'checked' : ''; ?> disabled>
                            <label class="form-check-label" for="berfungsi">Berfungsi</label>
                        </div>
                        <!-- Add the 'disabled' attribute to the radio buttons -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="listrik" id="sempat_tidak_berfungsi" value="Sempat tidak berfungsi" <?php echo ($laporan['listrik'] == 'Sempat tidak berfungsi') ? 'checked' : ''; ?> disabled>
                            <label class="form-check-label" for="sempat_tidak_berfungsi">Sempat tidak berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="listrik" id="tidak_berfungsi" value="Tidak berfungsi" <?php echo ($laporan['listrik'] == 'Tidak berfungsi') ? 'checked' : ''; ?> disabled>
                            <label class="form-check-label" for="tidak_berfungsi">Tidak berfungsi</label>
                        </div>
                    </div>
                </div>

                <!-- Kondisi Alarm -->
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Kondisi Alarm</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="alarm" id="berfungsi2" value="Berfungsi" <?php echo ($laporan['alarm'] == 'Berfungsi') ? 'checked' : ''; ?> disabled>
                            <label class="form-check-label" for="berfungsi2">Berfungsi</label>
                        </div>
                        <!-- Add the 'disabled' attribute to the radio buttons -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="alarm" id="sempat_tidak_berfungsi2" value="Sempat tidak berfungsi" <?php echo ($laporan['alarm'] == 'Sempat tidak berfungsi') ? 'checked' : ''; ?> disabled>
                            <label class="form-check-label" for="sempat_tidak_berfungsi2">Sempat tidak berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="alarm" id="tidak_berfungsi2" value="Tidak berfungsi" <?php echo ($laporan['alarm'] == 'Tidak berfungsi') ? 'checked' : ''; ?> disabled>
                            <label class="form-check-label" for="tidak_berfungsi2">Tidak berfungsi</label>
                        </div>
                    </div>
                </div>

                <!-- Kondisi CCTV -->
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Kondisi CCTV</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cctv" id="berfungsi3" value="Berfungsi" <?php echo ($laporan['cctv'] == 'Berfungsi') ? 'checked' : ''; ?> disabled>
                            <label class="form-check-label" for="berfungsi3">Berfungsi</label>
                        </div>
                        <!-- Add the 'disabled' attribute to the radio buttons -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cctv" id="sempat_tidak_berfungsi3" value="Sempat tidak berfungsi" <?php echo ($laporan['cctv'] == 'Sempat tidak berfungsi') ? 'checked' : ''; ?> disabled>
                            <label class="form-check-label" for="sempat_tidak_berfungsi3">Sempat tidak berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cctv" id="tidak_berfungsi3" value="Tidak berfungsi" <?php echo ($laporan['cctv'] == 'Tidak berfungsi') ? 'checked' : ''; ?> disabled>
                            <label class="form-check-label" for="tidak_berfungsi3">Tidak berfungsi</label>
                        </div>
                    </div>
                </div>

                <!-- Pemeriksaan Akses -->
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Pemeriksaan Akses</label>
                    <div class="col-sm-8">
                        <small>Beri tanda centang pintu yang telah diperiksa</small><br>
                        <div class="form-check form-check-inline">
                            <!-- Add the 'disabled' attribute to the checkboxes -->
                            <input type="checkbox" name="akses1" value="Pintu Utara Aman" <?php echo ($laporan['akses1'] == 'Pintu Utara Aman') ? 'checked' : ''; ?> disabled> Pintu Utara
                            <input type="checkbox" name="akses2" value="Pintu Utama Aman" style="margin-left: 20px;" <?php echo ($laporan['akses2'] == 'Pintu Utama Aman') ? 'checked' : ''; ?> disabled> Pintu Utama
                            <input type="checkbox" name="akses3" value="Pintu Darurat Aman" style="margin-left: 15px;" <?php echo ($laporan['akses3'] == 'Pintu Darurat Aman') ? 'checked' : ''; ?> disabled> Pintu Darurat
                        </div>
                    </div>
                </div>

                <!-- Pemeriksaan Inventaris -->
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Pemeriksaan Inventaris</label>
                    <div class="col-sm-8">
                        <small>Beri tanda centang peralatan inventaris yang telah dikembalikan</small><br>
                        <div class="form-check form-check-inline">
                            <!-- Add the 'disabled' attribute to the checkboxes -->
                            <input type="checkbox" name="inven1" value="Rompi telah dikembalikan" <?php echo ($laporan['inven1'] == 'Rompi telah dikembalikan') ? 'checked' : ''; ?> disabled> Kevlar
                            <input type="checkbox" name="inven2" value="Helm telah dikembalikan" style="margin-left:55px;" <?php echo ($laporan['inven2'] == 'Helm telah dikembalikan') ? 'checked' : ''; ?> disabled> Helm
                            <input type="checkbox" name="inven3" value="Radio telah dikembalikan" style="margin-left: 65px;" <?php echo ($laporan['inven3'] == 'Radio telah dikembalikan') ? 'checked' : ''; ?> disabled> Walkie Talkie
                        </div>
                    </div>
                </div>

                <!-- Pemeriksaan Aset -->
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Pemeriksaan Aset</label>
                    <div class="col-sm-8">
                        <small>Beri tanda aset perusahaan yang telah diperiksa</small><br>
                        <div class="form-check form-check-inline">
                            <!-- Add the 'disabled' attribute to the checkboxes -->
                            <input type="checkbox" name="aset1" value="Brankas telah diperiksa" <?php echo ($laporan['aset1'] == 'Brankas telah diperiksa') ? 'checked' : ''; ?> disabled> Brankas Uang
                            <input type="checkbox" name="aset2" value="Arsip telah diperiksa" style="margin-left: 5px;" <?php echo ($laporan['aset2'] == 'Arsip telah diperiksa') ? 'checked' : ''; ?> disabled> Lemari Arsip
                            <input type="checkbox" name="aset3" value="Database telah diperiksa" style="margin-left: 10px;" <?php echo ($laporan['aset3'] == 'Database telah diperiksa') ? 'checked' : ''; ?> disabled> Lemari Server
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <a href="<?= base_url('reports/logrutin') ?>" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<script>
    var printButton = document.getElementById('printButton');

    // Function to hide the print button
    function hidePrintButton() {
        printButton.style.display = 'none';
    }

    // Function to show the print button
    function showPrintButton() {
        printButton.style.display = 'block';
    }

    // Event listener for the print button click
    printButton.addEventListener('click', function() {
        // Hide the print button before printing
        hidePrintButton();

        // Munculkan jendela pencetakan
        window.print();
    });

    // Event listener for beforeprint event
    window.addEventListener('beforeprint', hidePrintButton);

    // Event listener for afterprint event
    window.addEventListener('afterprint', showPrintButton);
</script>
<!-- End of Main Content -->