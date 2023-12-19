<!-- Begin Page Content -->
<style>
    .hidden {
        display: none;
    }
</style>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?></h1>
    <div class="row">
        <div class="col">
            <?= $this->session->flashdata('message') ?>
            <form action="<?= base_url('reports/editrutin?id=' . $laporan['id']) ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nopeg" class="col-sm-3 col-form-label">Nomor Pegawai</label>
                    <div class="col-sm-12">
                        <input type="hidden" name="id" value="<?= $laporan['id'] ?>">
                        <input type="text" class="form-control" id="nopeg" name="nopeg" value="<?= isset($laporan['nopeg']) ? $laporan['nopeg'] : 'Data tidak ditemukan'; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama lengkap</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= isset($laporan['nama']) ? $laporan['nama'] : 'Data tidak ditemukan'; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                    <div class="col-sm-12">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= isset($laporan['tanggal']) ? $laporan['tanggal'] : 'Data tidak ditemukan'; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="shift" class="col-sm-4 col-form-label"><b>Shift</b></label>
                    <div class="col-sm-12" style="margin-top: -10px;">
                        <small>Pilih jam kerja Anda dengan tepat</small>
                        <select class="form-control" id="shift" name="shift">
                            <option value="Pagi">Pagi</option>
                            <option value="Malam">Malam</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <p class="col-sm-4"><b>Pemeriksaan Fungsional</b></p>
                </div>
                <div class="form-group row" style="margin-top: -30px;">
                    <!-- Kondisi Kelistrikan -->
                    <label class="col-sm-4 col-form-label">Kondisi Kelistrikan</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="listrik" id="berfungsi" value="Berfungsi" <?php echo ($laporan['listrik'] == 'Berfungsi') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="berfungsi">Berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="listrik" id="sempat_tidak_berfungsi" value="Sempat tidak berfungsi" <?php echo ($laporan['listrik'] == 'Sempat tidak berfungsi') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="sempat_tidak_berfungsi">Sempat tidak berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="listrik" id="tidak_berfungsi" value="Tidak berfungsi" <?php echo ($laporan['listrik'] == 'Tidak berfungsi') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="tidak_berfungsi">Tidak berfungsi</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row" style="margin-right: 20px;">
                    <div class="col-sm-9" style="margin-right: 30px; margin-top: -25px;">
                        <div class="form-check">
                            <input type="checkbox" id="toggleKomentar1" class="form-check-input">
                            <label class="form-check-label" for="toggleKomentar1">Tambahkan komentar</label>
                        </div>
                        <div id="kolomInput1" class="hidden" style="margin-top: 10px;">
                            <textarea class="form-control" id="komentar1" name="komentar1" placeholder="Belum ada komentar yang ditambahkan"><?= isset($laporan['komentar1']) ? $laporan['komentar1'] : 'Tidak ada komentar yang ditambahkan'; ?></textarea>
                            <small>Jika diperlukan</small>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <!-- Kondisi Alarm -->
                    <label class="col-sm-4 col-form-label">Kondisi Alarm</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="alarm" id="berfungsi2" value="Berfungsi" <?php echo ($laporan['alarm'] == 'Berfungsi') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="berfungsi2">Berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="alarm" id="sempat_tidak_berfungsi2" value="Sempat tidak berfungsi" <?php echo ($laporan['alarm'] == 'Sempat tidak berfungsi') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="sempat_tidak_berfungsi2">Sempat tidak berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="alarm" id="tidak_berfungsi2" value="Tidak berfungsi" <?php echo ($laporan['alarm'] == 'Tidak berfungsi') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="tidak_berfungsi2">Tidak berfungsi</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="margin-right: 20px;">
                    <div class="col-sm-9" style="margin-right: 30px; margin-top: -25px;">
                        <div class="form-check">
                            <input type="checkbox" id="toggleKomentar2" class="form-check-input">
                            <label class="form-check-label" for="toggleKomentar2">Tambahkan komentar</label>
                        </div>
                        <div id="kolomInput2" class="hidden" style="margin-top: 10px;">
                            <textarea class="form-control" id="komentar2" name="komentar2" placeholder="Belum ada komentar yang ditambahkan"><?= isset($laporan['komentar2']) ? $laporan['komentar2'] : 'Tidak ada komentar yang ditambahkan'; ?></textarea>
                            <small>Jika diperlukan</small>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <!-- Kondisi CCTV -->
                    <label class="col-sm-4 col-form-label">Kondisi CCTV</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cctv" id="berfungsi3" value="Berfungsi" <?php echo ($laporan['cctv'] == 'Berfungsi') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="berfungsi3">Berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cctv" id="sempat_tidak_berfungsi3" value="Sempat tidak berfungsi" <?php echo ($laporan['cctv'] == 'Sempat tidak berfungsi') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="sempat_tidak_berfungsi3">Sempat tidak berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cctv" id="tidak_berfungsi3" value="Tidak berfungsi" <?php echo ($laporan['cctv'] == 'Tidak berfungsi') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="tidak_berfungsi3">Tidak berfungsi</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="margin-right: 20px;">
                    <div class="col-sm-9" style="margin-right: 30px; margin-top: -25px;">
                        <div class="form-check">
                            <input type="checkbox" id="toggleKomentar3" class="form-check-input">
                            <label class="form-check-label" for="toggleKomentar3">Tambahkan komentar</label>
                        </div>
                        <div id="kolomInput3" class="hidden" style="margin-top: 10px;">
                            <textarea class="form-control" id="komentar3" name="komentar3" placeholder="Belum ada komentar yang ditambahkan"><?= isset($laporan['komentar3']) ? $laporan['komentar3'] : 'Tidak ada komentar yang ditambahkan'; ?></textarea>
                            <small>Jika diperlukan</small>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <!-- Kondisi CCTV -->
                    <label class="col-sm-4 col-form-label">Pemeriksaan Akses</label>
                    <div class="col-sm-8">
                        <small>Beri tanda centang pintu yang telah diperiksa</small><br>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="akses1" value="Pintu Utara Aman" <?php echo ($laporan['akses1'] == 'Pintu Utara Aman') ? 'checked' : ''; ?>> Pintu Utara
                            <input type="checkbox" name="akses2" value="Pintu Utama Aman" style="margin-left: 20px;" <?php echo ($laporan['akses2'] == 'Pintu Utama Aman') ? 'checked' : ''; ?>> Pintu Utama
                            <input type="checkbox" name="akses3" value="Pintu Darurat Aman" style="margin-left: 15px;" <?php echo ($laporan['akses3'] == 'Pintu Darurat Aman') ? 'checked' : ''; ?>> Pintu Darurat
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <!-- Kondisi CCTV -->
                    <label class="col-sm-4 col-form-label">Pemeriksaan Inventaris</label>
                    <div class="col-sm-8">
                        <small>Beri tanda centang peralatan inventaris yang telah dikembalikan</small><br>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="inven1" value="Rompi telah dikembalikan" <?php echo ($laporan['inven1'] == 'Rompi telah dikembalikan') ? 'checked' : ''; ?>> Kevlar
                            <input type="checkbox" name="inven2" value="Helm telah dikembalikan" style="margin-left:55px;" <?php echo ($laporan['inven2'] == 'Helm telah dikembalikan') ? 'checked' : ''; ?>> Helm
                            <input type="checkbox" name="inven3" value="Radio telah dikembalikan" style="margin-left: 65px;" <?php echo ($laporan['inven3'] == 'Radio telah dikembalikan') ? 'checked' : ''; ?>> Walkie Talkie
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <!-- Kondisi CCTV -->
                    <label class="col-sm-4 col-form-label">Pemeriksaan Aset</label>
                    <div class="col-sm-8">
                        <small>Beri tanda aset perusahaan yang telah diperiksa</small><br>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="aset1" value="Brankas telah diperiksa" <?php echo ($laporan['aset1'] == 'Brankas telah diperiksa') ? 'checked' : ''; ?>> Brankas Uang
                            <input type="checkbox" name="aset2" value="Arsip telah diperiksa" style="margin-left: 5px;" <?php echo ($laporan['aset2'] == 'Arsip telah diperiksa') ? 'checked' : ''; ?>> Lemari Arsip
                            <input type="checkbox" name="aset3" value="Database telah diperiksa" style="margin-left: 10px;" <?php echo ($laporan['aset3'] == 'Database telah diperiksa') ? 'checked' : ''; ?>> Lemari Server
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<script>
    function handleToggleKomentar(toggleId, kolomInputId, komentarId) {
        var toggleCheckbox = document.getElementById(toggleId);
        var kolomInput = document.getElementById(kolomInputId);
        var komentarTextarea = document.getElementById(komentarId);

        toggleCheckbox.addEventListener('change', function() {
            kolomInput.classList.toggle('hidden', !this.checked);

            // Bersihkan nilai textarea jika checkbox tidak dicentang
            if (!this.checked) {
                komentarTextarea.value = '';
            }
        });
    }
    handleToggleKomentar('toggleKomentar1', 'kolomInput1', 'komentar1');
    handleToggleKomentar('toggleKomentar2', 'kolomInput2', 'komentar2');
    handleToggleKomentar('toggleKomentar3', 'kolomInput3', 'komentar3');
</script>