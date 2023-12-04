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
            <form action="<?= base_url('reports/wajib') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nopeg" class="col-sm-3 col-form-label"><b>Nomor Pegawai</b></label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nopeg" name="nopeg" value="<?= $user['nopeg']; ?>" placeholder=" Masukkan No. Pegawai" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label"><b>Nama lengkap</b></label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" placeholder="Masukkan Nama Lengkap" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-4 col-form-label"><b>Tanggal</b></label>
                    <div class="col-sm-12">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal">
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
                            <input class="form-check-input" type="radio" name="kondisi" id="berfungsi" value="Berfungsi" checked>
                            <label class="form-check-label" for="berfungsi">Berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi" id="sempat_tidak_berfungsi" value="Sempat tidak berfungsi">
                            <label class="form-check-label" for="sempat_tidak_berfungsi">Sempat tidak berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi" id="tidak_berfungsi" value="Tidak berfungsi">
                            <label class="form-check-label" for="tidak_berfungsi">Tidak berfungsi</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="margin-right: 20px;">
                    <label for="deskripsi" class="col-sm-3 col-form-label" style="margin-top: -30px;">Keterangan</label>
                    <div class="col-sm-9" style="margin-right: 30px; margin-top: -5px;">
                        <div class="form-check">
                            <input type="checkbox" id="toggleKomentar1" class="form-check-input">
                            <label class="form-check-label" for="toggleKomentar1">Tambahkan komentar</label>
                        </div>
                        <div id="kolomInput1" class="hidden" style="margin-top: 10px;">
                            <textarea class="form-control" id="komentar1" name="komentar1" placeholder="Ketik komentar untuk Staff"></textarea>
                            <small>Jika diperlukan</small>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <!-- Kondisi Alarm -->
                    <label class="col-sm-4 col-form-label">Kondisi Alarm</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi2" id="berfungsi2" value="Berfungsi" checked>
                            <label class="form-check-label" for="berfungsi2">Berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi2" id="sempat_tidak_berfungsi2" value="Sempat tidak berfungsi">
                            <label class="form-check-label" for="sempat_tidak_berfungsi2">Sempat tidak berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi2" id="tidak_berfungsi2" value="Tidak berfungsi">
                            <label class="form-check-label" for="tidak_berfungsi2">Tidak berfungsi</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="margin-right: 20px;">
                    <label for="deskripsi" class="col-sm-3 col-form-label" style="margin-top: -30px;">Keterangan</label>
                    <div class="col-sm-9" style="margin-right: 30px; margin-top: -5px;">
                        <div class="form-check">
                            <input type="checkbox" id="toggleKomentar2" class="form-check-input">
                            <label class="form-check-label" for="toggleKomentar2">Tambahkan komentar</label>
                        </div>
                        <div id="kolomInput2" class="hidden" style="margin-top: 10px;">
                            <textarea class="form-control" id="komentar2" name="komentar2" placeholder="Ketik komentar untuk Staff"></textarea>
                            <small>Jika diperlukan</small>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <!-- Kondisi CCTV -->
                    <label class="col-sm-4 col-form-label">Kondisi CCTV</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi3" id="berfungsi3" value="Berfungsi" checked>
                            <label class="form-check-label" for="berfungsi3">Berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi3" id="sempat_tidak_berfungsi3" value="Sempat tidak berfungsi">
                            <label class="form-check-label" for="sempat_tidak_berfungsi3">Sempat tidak berfungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi3" id="tidak_berfungsi3" value="Tidak berfungsi">
                            <label class="form-check-label" for="tidak_berfungsi3">Tidak berfungsi</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="margin-right: 20px;">
                    <label for="deskripsi" class="col-sm-3 col-form-label" style="margin-top: -30px;">Keterangan</label>
                    <div class="col-sm-9" style="margin-right: 30px; margin-top: -5px;">
                        <div class="form-check">
                            <input type="checkbox" id="toggleKomentar3" class="form-check-input">
                            <label class="form-check-label" for="toggleKomentar3">Tambahkan komentar</label>
                        </div>
                        <div id="kolomInput3" class="hidden" style="margin-top: 10px;">
                            <textarea class="form-control" id="komentar3" name="komentar3" placeholder="Ketik komentar untuk Staff"></textarea>
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
                            <input type="checkbox" name="akses1" value="Pintu Utara">Pintu Utara
                            <input type="checkbox" name="akses2" value="Pintu Utama" style="margin-left: 5px;">Pintu Utama
                            <input type="checkbox" name="akses3" value="Pintu Darurat" style="margin-left: 5px;">Pintu Darurat
                        </div>
                    </div>
                </div>
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