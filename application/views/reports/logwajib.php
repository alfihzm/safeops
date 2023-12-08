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
            <table class="table table-hover table-bordered">
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
                                <a href=" <?= base_url('reports/periksawajib?id=' . $m['id']); ?>" class="btn btn-info"> <i class="fa-solid fa-eye"></i> </a>
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