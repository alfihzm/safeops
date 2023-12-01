<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?></h1>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped">
                <thead>
                    <tr style="background: #2B1C2F; color: #FFF;">
                        <th scope="col">#</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Gambar</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row" style="background: #2B1C2F; color: #FFF;"><?= $i; ?></th>
                            <td><?= $m['nama']; ?></td>
                            <td><?= $m['tanggal']; ?></td>
                            <td>
                                <img src="<?= base_url('assets/img/report/wajib/') . $m['image']; ?>" alt="Gambar" class="img-thumbnail" width="100" height="100">
                            </td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-info">Periksa</a>

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