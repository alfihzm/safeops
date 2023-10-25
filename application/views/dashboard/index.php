<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <span id="pesanSelamat"></span> <?= $user['nama']; ?></h1>

    <!-- Announcements -->
    <div class="card mb-4">
        <div class="card-header" style="background-color: #2B1C2F; color: white;">
            Pengumuman Hari Ini
        </div>
        <div class="card-body">
            SafeOps | Indonesia
        </div>
    </div>

    <!-- Event Hari Ini -->
    <div class="card mb-4">
        <div class="card-header" style="background-color: #2B1C2F; color: white;">
            Event Hari Ini
        </div>
        <div class="card-body">
            <?php if ($event_data) : ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Event</th>
                            <th scope="col">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?= $event_data['nama_event']; ?></td>
                            <td><?= $event_data['deskripsi']; ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php else : ?>
                <p>Tidak ada event hari ini.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Quick Links -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header" style="background-color: #2B1C2F; color: white;">
                    Link Cepat
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="#">Laporan Harian</a></li>
                        <li><a href="#">Statistik</a></li>
                        <li><a href="#">Pengaturan</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Activity Log -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header" style="background-color: #2B1C2F; color: white;">
                    Catatan Aktivitas
                </div>
                <div class="card-body">
                    <ul>
                        <li>Pengguna baru ditambahkan.</li>
                        <li>Laporan terbaru telah diterima.</li>
                        <li>Update sistem tersedia.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 25px;">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header" style="background-color: #2B1C2F; color: white;">
                    Terserah
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="#">Laporan Harian</a></li>
                        <li><a href="#">Statistik</a></li>
                        <li><a href="#">Pengaturan</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Activity Log -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header" style="background-color: #2B1C2F; color: white;">
                    Terserah
                </div>
                <div class="card-body">
                    <ul>
                        <li>Pengguna baru ditambahkan.</li>
                        <li>Laporan terbaru telah diterima.</li>
                        <li>Update sistem tersedia.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End of Main Content -->