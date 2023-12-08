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
                    <label for="name" class="col-sm-3 col-form-label">Isi Laporan</label>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-text border-secondary text-grey" style="background-color:#eaecf4; width: 100%;"><?= htmlspecialchars_decode($laporan['deskripsi']); ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Foto Laporan</label>
                    <div class="col-sm-12">
                        <img src="<?= base_url('assets/img/report/wajib/') . $laporan['image']; ?>" alt="Gambar" class="img-thumbnail" width="250" height="250">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Komentar Tambahan</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $laporan['komentar']; ?>" readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <a href="<?= base_url('reports/logwajib') ?>" class="btn btn-primary">Kembali</a>
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