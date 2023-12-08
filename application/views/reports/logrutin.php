<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?></h1>
    <a href="" class="btn btn-success" id="printButton" style="margin-top: -20px;"><i class="fa-solid fa-file-arrow-down fa-lg"></i> Rekap Semua Laporan</a>
    <div class="flash_data">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr style="background: #2B1C2F; color: #FFF;">
                        <th scope="col">No</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Statistik</th>
                        <th scope="col">Pemeriksaan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) :
                        $totalCategories = 3;
                        $berfungsiCount = 0;
                        foreach (['listrik', 'alarm', 'cctv'] as $category) {
                            if ($m[$category] == 'Berfungsi') {
                                $berfungsiCount++;
                            }
                        }
                        $percentageBerfungsi = ($berfungsiCount / $totalCategories) * 100;
                    ?>
                        <tr>
                            <th scope="row" style="width: 50px"><?= $i; ?></th>
                            <td style="width: 290px"><?= $m['nama']; ?></td>
                            <td><?= $m['tanggal']; ?></td>
                            <td class="text-center d-flex align-items-center justify-content-center">
                                <div>
                                    <canvas id="donutChart<?= $i; ?>" width="120" height="150"></canvas>
                                    <span><?= number_format($percentageBerfungsi, 2) . '%'; ?> berfungsi</span>
                                </div>
                            </td>
                            <td class="vertical-align: middle;" style="text-align:left; vertical-align: middle;">
                                <i class="fa-solid fa-circle-check" style="color: #3498db;"></i><?= !empty($m['akses1']) ? '' : ''; ?> <span style="color: #3498db;"> Pintu telah diperiksa</span>
                                <br>
                                <i class="fa-solid fa-circle-check" style="color: #3498db;"></i><?= !empty($m['inven1']) ? '' : ''; ?> <span style="color: #3498db;"> Peralatan telah dikembalikan</span>
                                <br>
                                <i class="fa-solid fa-circle-check" style="color: #3498db;"></i><?= !empty($m['aset1']) ? '' : ''; ?> <span style="color: #3498db;"> Aset telah diperiksa</span>
                            </td>
                            <td style="text-align:center; vertical-align: middle;">
                                <a href="<?= base_url('reports/editrutin?id=' . $m['id']); ?>" class="btn btn-warning"> <i class="fa-solid fa-pencil"></i> </a>
                                <a href=" <?= base_url('reports/periksarutin?id=' . $m['id']); ?>" class="btn btn-info"> <i class="fa-solid fa-eye"></i> </a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<script type="text/javascript">
    window.setTimeout(function() {
        $(".flash_data").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);
</script>
<script type="text/javascript">
    <?php foreach ($menu as $m) : ?>
        var donutData<?= $m['id']; ?> = {
            labels: ["Listrik", "Alarm", "CCTV"],
            datasets: [{
                data: [
                    <?php echo ($m['listrik'] == 'Berfungsi') ? 1 : 0; ?>,
                    <?php echo ($m['alarm'] == 'Berfungsi') ? 1 : 0; ?>,
                    <?php echo ($m['cctv'] == 'Berfungsi') ? 1 : 0; ?>
                ],
                backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"]
            }]
        };

        var donutOptions<?= $m['id']; ?> = {
            cutoutPercentage: 50,
            responsive: false,
            maintainAspectRatio: false,
        };

        var donutChart<?= $m['id']; ?> = new Chart(document.getElementById("donutChart<?= $m['id']; ?>").getContext("2d"), {
            type: 'doughnut',
            data: donutData<?= $m['id']; ?>,
            options: donutOptions<?= $m['id']; ?>
        });
    <?php endforeach; ?>
</script>
<script>
    document.getElementById('printButton').addEventListener('click', function() {
        // Munculkan jendela pencetakan
        window.print();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/.js"></script>