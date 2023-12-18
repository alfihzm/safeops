<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div>
        <?php
        // Check if there is an alert with id "1" in the database
        // $query = $this->db->get_where('alert', ['id' => 1]);
        $query = $this->db->get_where('alert');
        if ($query->num_rows() > 0) {
            $alert_data = $query->row_array();
            echo '<div class="mb-4"><div class="alert alert-danger">';
            echo '<div class="text-center center-justify-content"><b>Peringatan!!!</b></div>';
            echo '<div class="alert alert-danger">';
            echo '<ul><li>Petugas ' . $alert_data['nama'] . ' dengan nomor pegawai ' . $alert_data['nopeg'] . ' mendapati aktivitas mencurigakan di ' . $alert_data['alert'] . '.</li><li>Segera lakukan normalisasi atau pengecekan!</ul>';
            echo '<br><a href="' . base_url('camera/delete_alert/' . $alert_data['id']) . '" class="btn btn-success d-flex justify-content-center">Lakukan normalisasi</a>';
            echo '</div></div></div>';
        }
        ?>
    </div>
    <!-- Announcements -->
    <div class="card mb-4 border border-dark" style="box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73);">
        <img src="<?= base_url('assets/img/background/auth_background2.png'); ?>"
            style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));">
        <div class="text-overlay">
            <h1 class="h1 mb-4 text-white" style="text-shadow: 2px 2px #2B1C2F; font-size: 3vw;">
                <b><span id="pesanSelamat"></span> <?= $user['nama']; ?></b>
            </h1>
        </div>
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
                    <td><?= $n['tanggal']; ?></td>
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
            <?php if ($menu) : ?>
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
        <div class="col-lg-3">
            <div class=" card border border-dark"
                style="box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73); height: 250px; margin-bottom: 20px;">
                <div class="card-header" style="background-color: #2B1C2F; color: white; text-align: center">
                    Jumlah Security
                </div>
                <i class="fas fa-solid fa-user" style="margin-top: 50px; text-align: center; font-size: 2.5em;"></i>
                <h4 style="margin-top: 20px; text-align: center; font-size: 1.5em;">
                    <?= $jumlahAnggota; ?>
                </h4>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border border-dark"
                style="box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73); height: 250px; margin-bottom: 20px;">
                <div class="card-header" style="background-color: #2B1C2F; color: white; text-align: center">
                    Jumlah Laporan Rutin
                </div>
                <i class="fas fa-solid fa-file-pen" style="margin-top: 50px; text-align: center; font-size: 2.5em;"></i>
                <h4 style="margin-top: 20px; text-align: center; font-size: 1.5em;">
                    <?= $jumlahLaporan; ?>
                </h4>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border border-dark"
                style="box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73); height: 250px; margin-bottom: 20px;">
                <div class="card-header" style="background-color: #2B1C2F; color: white; text-align: center">
                    Jumlah Laporan Visitor
                </div>
                <i class="fas fa-solid fa-users" style="margin-top: 50px; text-align: center; font-size: 2.5em;"></i>
                <h4 style="margin-top: 20px; text-align: center; font-size: 1.5em;">
                    <?= $jumlahVisitor; ?>
                </h4>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border border-dark"
                style="box-shadow: -5px 5px 5px 0px rgba(143,143,143,0.73); height: 250px; margin-bottom: 20px;">
                <div class="card-header" style="background-color: #2B1C2F; color: white; text-align: center">
                    Jumlah Orang Hilang
                </div>
                <i class="fas fa-solid fa-person-circle-question"
                    style="margin-top: 50px; text-align: center; font-size: 2.5em;"></i>
                <h4 style="margin-top: 20px; text-align: center; font-size: 1.5em;">
                    200
                </h4>
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
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get the current date
    const currentDate = new Date();

    // Get the number of days in the current month
    const daysInMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();

    // Select the table headers row
    const tableHeadersRow = document.getElementById("table-headers");

    // Generate table headers with date numbers
    for (let day = 1; day <= daysInMonth; day++) {
        const th = document.createElement("th");
        th.classList.add("text-nowrap");
        th.textContent = day;
        tableHeadersRow.appendChild(th);
    }

    // Simulate attendance data for demonstration purposes
    const attendanceData = {
        9: true, // User attended on the 11th
        // Add more entries as needed
    };
    const attendanceData2 = {
        12: true, // User attended on the 11th
    };
    // Add more entries as needed

    // Select the table body
    const tableBody = document.getElementById("table-body");

    // Generate table rows with attendance styles
    for (let userId = 1; userId <= 10; userId++) {
        const tr = document.createElement("tr");

        // Generate cells for each day
        for (let day = 1; day <= daysInMonth; day++) {
            const td = document.createElement("td");
            td.classList.add("text-nowrap");

            // Check if the user attended on this day
            const isAttended = attendanceData[day] || false;

            // Apply style based on attendance
            if (isAttended) {
                td.style.backgroundColor = "green"; // Turn the row green
            }

            tr.appendChild(td);
        }

        // Append the row to the table body
        tableBody.appendChild(tr);
    }
});
</script>
<!-- End of Main Content -->