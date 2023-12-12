<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?></h1>
    <a href="" class="btn btn-success" id="printButton" style="margin-top: -20px;"><i class="fa-solid fa-file-arrow-down fa-lg"></i> Rekap Semua Laporan</a>
    <div class="flash_data">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col">
            <label for="searchInput">Cari berdasarkan Petugas:</label>
            <input type="text" id="searchInput" placeholder="Search by Petugas...">

            <label for="dateInput">Cari berdasarkan Tanggal:</label>
            <input type="date" id="dateInput">

            <table class="table table-hover table-bordered" id="dataTable">
                <thead>
                    <tr style="background: #2B1C2F; color: #FFF;">
                        <th scope="col">No</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row" style="width: 50px"><?= $i; ?></th>
                            <td style="width: 290px"><?= $m['nama']; ?></td>
                            <td><?= $m['tanggal']; ?></td>
                            <td style="display: flex; align-items: center; justify-content: center;">
                                <img src="<?= base_url('assets/img/report/wajib/') . $m['image']; ?>" alt="Gambar" class="img-thumbnail" width="100" height="100">
                            </td>
                            <td style="text-align:center; vertical-align: middle;">
                                <a href="<?= base_url('reports/editwajib?id=' . $m['id']); ?>" class="btn btn-warning"> <i class="fa-solid fa-pencil"></i> </a>
                                <a href="<?= base_url('reports/periksawajib?id=' . $m['id']); ?>" class="btn btn-info"> <i class="fa-solid fa-eye"></i> </a>
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
<script>
    document.getElementById('printButton').addEventListener('click', function() {
        // Munculkan jendela pencetakan
        window.print();
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $("#searchInput").on("keyup", function() {
            var petugasValue = $(this).val().toLowerCase();
            var dateValue = $("#dateInput").val();

            $("#dataTable tbody tr").filter(function() {
                var petugasMatch = $(this).find("td:nth-child(2)").text().toLowerCase().indexOf(petugasValue) > -1;
                var dateMatch = dateValue === "" || $(this).find("td:nth-child(3)").text() === dateValue;

                $(this).toggle(petugasMatch && dateMatch);
            });
        });
        $("#dateInput").on("change", function() {
            $("#searchInput").trigger("keyup");
        });
    });
</script>