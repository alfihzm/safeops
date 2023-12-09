<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <span id="pesanSelamat"></span> <?= $user['nama']; ?></h1>

    <!-- Announcements -->
    <div class="card mb-4 border border-dark" style="box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73);">
        <div class="card-header" style="background-color: #2B1C2F; color: white;">
            Pengumuman Hari Ini
        </div>
        <div class="card-body">
            <?php if ($menu2) : ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengumuman</th>
                            <th scope="col">Tanggal dibuat</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach ($menu2 as $n) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $n['judul']; ?></td>
                            <td><?= $n['deskripsi']; ?></td>
                            <td><?= date('d F Y', $n['date_created']); ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            <?php else : ?>
                <p>Belum ada pengumuman yang dirilis oleh Admin.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Event Hari Ini -->
    <div class="card mb-4 border border-dark" style="box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73);">
        <div class="card-header" style="background-color: #2B1C2F; color: white;">
            Event Hari Ini
        </div>
        <div class="card-body">
            <?php if ($event_data) : ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Event</th>
                            <th scope="col">Deskripsi</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['nama_event']; ?></td>
                            <td><?= $m['deskripsi']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>.
                </table>
            <?php else : ?>
                <p>Tidak ada event hari ini.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Quick Links -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card border border-dark" style="box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73);">
                <div class="card-header" style="background-color: #2B1C2F; color: white;">
                    Link Cepat
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="<?= base_url('reports/index') ?>">Laporan Rutin</a></li>
                        <li><a href="#">Statistik</a></li>
                        <li><a href="#">Pengaturan</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Activity Log -->
        <div class="col-lg-6">
            <div class="card border border-dark" style="box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73);">
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
            <div class="card border border-dark" style="box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73);">
                <div class="card-header" style="background-color: #2B1C2F; color: white;">
                    Terserah
                </div>
                <div class="card-body">
                    <div id="cuaca">
                        <small>
                            <h4>Cuaca saat ini di Jakarta</h4>
                            <p style="margin-bottom: -5px;">Suhu: °C</p>
                            <p style="margin-bottom: -5px;">Kelembaban: %</p>
                            <p style="margin-bottom: -5px;">Deskripsi: </p>
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Activity Log -->
        <div class="col-lg-6">
            <div class="card border border-dark" style="box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73);">
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
<script>
    // Ganti dengan kunci API WeatherAPI Anda
    const apiKey = 'd96d9d8b3fa645919a0145650232510';

    // Ganti dengan lokasi (misalnya, kota) yang ingin Anda lihat prediksi cuacanya
    const location = 'Jakarta';
    const name = 'Jakarta';
    // Buat URL untuk mengambil data cuaca dari WeatherAPI
    const apiUrl = `https://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${location}`;

    // Fungsi untuk menampilkan data cuaca
    function displayWeather(data) {
        const weatherElement = document.getElementById('cuaca');
        weatherElement.innerHTML = `
            <h2>Cuaca saat ini di ${data.location.name}, ${data.location.country}</h2>
            <p>Suhu: ${data.current.temp_c}°C</p>
            <p>Kelembabasn: ${data.current.humidity}%</p>
            <p>Deskripsi: ${data.current.condition.text}</p>
        `;
    }

    // Mengambil data cuaca dari WeatherAPI
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => displayWeather(data))
        .catch(error => console.error('Error:', error));
</script>
<!-- End of Main Content -->