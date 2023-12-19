<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="flash_message">
        <?= $this->session->flashdata('message') ?>
    </div>
    <div class="alert alert-secondary" role="alert" style="margin-top: -15px;">
        <li>Pastikan Anda terhubung ke internet untuk mengakses IP Camera!</li>
        <li>Pastikan Anda tidak menyebarluaskan tangkapan layar CCTV!</li>
        <li>Tekan tombol peringatan hanya saat kondisi darurat!</li>
    </div>
    <table class="table table-striped table-dark" style="margin-top: 30px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">CCTV</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Utara</td>
                <td>Mengarah ke gerbang samping</td>
                <td>Aktif</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Masjid</td>
                <td>Mengarah ke gerbang masjid</td>
                <td>Aktif</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Sentral</td>
                <td>Mengarah ke gerbang utama</td>
                <td>Aktif</td>
            </tr>
        </tbody>
    </table>
    <div class="text-center justify-content-center" style="margin-top: 30px;">
        <b>Tekan tombol berikut untuk memberikan pesan peringatan!</b>
    </div>
    <div class="row text-center justify-content-center">
        <a href="#" data-toggle="modal" data-target="#newUtaraModal" class="btn btn-danger">CAM-UTARA</a>
        <a href="#" data-toggle="modal" data-target="#newMasjidModal" class="btn btn-danger" style="margin-left: 5px;">CAM-MASJID</a>
        <a href="#" data-toggle="modal" data-target="#newSelatanModal" class="btn btn-danger" style="margin-left: 5px;">CAM-SELATAN</a>
    </div>
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-lg-12">
            <div id="youtubeFrame" class="col-lg-12">
                <div>
                    <div>
                        <b>Kamera Outdoor Utara</b><br>
                        <!-- Isi tampilan live view dari url YouTube disini -->
                        <iframe id="youtubeFrame" width="100%" height="400" src="https://www.youtube.com/embed/GEPJYPznC_Q?autoplay=1&controls=0&showinfo=0&mute=1" frameborder="3" allowfullscreen></iframe>
                    </div>
                    <div>
                        <b>Kamera Outdoor Serambi Masjid</b><br>
                        <!-- Isi tampilan live view dari url YouTube disini -->
                        <iframe id="youtubeFrame" width="100%" height="400" src="https://www.youtube.com/embed/dkK5hxD7bzQ?autoplay=1&controls=0&showinfo=0&mute=1" frameborder="3" allowfullscreen></iframe>
                    </div>
                    <div>
                        <b>Kamera Outdoor Sentral</b><br>
                        <!-- Isi tampilan live view dari url YouTube disini -->
                        <iframe id="youtubeFrame" width="100%" height="400" src="https://www.youtube.com/embed/6dp-bvQ7RWo?autoplay=1&controls=0&showinfo=0&mute=1" frameborder="3" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- Modal Tambah Peringatan CCTV Utara -->
            <div class="modal fade" id="newUtaraModal" tabindex="-1" aria-labelledby="newUtaraModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title fs-5" id="newUtaraModalLabel">Tambahkan Pengunjung</h4>
                            <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                                &times;
                            </button>
                        </div>
                        <form action="<?= base_url('camera') ?>" method="POST">
                            <div class="modal-body">
                                Apakah Anda yakin ingin menambahkan peringatan? <br>
                                <input type="hidden" class="form-control" id="nopeg" name="nopeg" value="<?= $user['nopeg']; ?>">
                                <input type="hidden" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                <input type="hidden" class="form-control" id="alert" name="alert" value="kamera utara, pintu gerbang samping">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <button type="submit" class="btn btn-primary">Ya</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Tambah Peringatan CCTV Masjid -->
            <div class="modal fade" id="newMasjidModal" tabindex="-2" aria-labelledby="newMasjidModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title fs-5" id="newMasjidModalLabel">Tambahkan Masjid</h4>
                            <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                                &times;
                            </button>
                        </div>
                        <form action="<?= base_url('camera') ?>" method="POST">
                            <div class="modal-body">
                                Apakah Anda yakin ingin menambahkan peringatan? <br>
                                <input type="hidden" class="form-control" id="nopeg" name="nopeg" value="<?= $user['nopeg']; ?>">
                                <input type="hidden" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                <input type="hidden" class="form-control" id="alert" name="alert" value="kamera serambi, pintu gerbang masjid">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <button type="submit" class="btn btn-primary">Ya</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Tambah Peringatan CCTV Sentral -->
            <div class="modal fade" id="newSelatanModal" tabindex="-3" aria-labelledby="newSelatanModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title fs-5" id="newSelatanModalLabel">Tambahkan Selatan</h4>
                            <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                                &times;
                            </button>
                        </div>
                        <form action="<?= base_url('camera') ?>" method="POST">
                            <div class="modal-body">
                                Apakah Anda yakin ingin menambahkan peringatan? <br>
                                <input type="hidden" class="form-control" id="nopeg" name="nopeg" value="<?= $user['nopeg']; ?>">
                                <input type="hidden" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                <input type="hidden" class="form-control" id="alert" name="alert" value="kamera sentral, pintu gerbang utama">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <button type="submit" class="btn btn-primary">Ya</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <script>
            window.onload = function() {
                var youtubeFrame = document.getElementById('youtubeFrame');
                youtubeFrame.onload = function() {
                    youtubeFrame.src = youtubeFrame.src.replace('showinfo=0', 'showinfo=1');
                };
            };
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>