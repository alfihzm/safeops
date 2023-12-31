<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="alert alert-secondary" role="alert" style="margin-top: -15px;">
        <li>Mohon segera isi laporan wajib sebelum menyelesaikan sisa shift kerja!</li>
        <li>Jika terjadi kendala atau kejadian tertentu isi laporan kejadian beserta detail kejadiannya.</li>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= $this->session->flashdata('message') ?>
        </div>
        <div class="col-lg-12">
            <?= form_error('nama_event', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message') ?>
            <table class="table table-hover text-light border-secondary" style="border: 2px solid; background: #2B1C2F;">
                <tr>
                    <th class="col-sm-6">Jenis Laporan</th>
                    <th class="col-sm"></th>
                    <?php if ($user['role_id'] == 1) : ?>
                        <th scope="col-sm-4">Lihat</th>
                    <?php else : ?>
                        <th></th>
                    <?php endif; ?>
                </tr>
                <tr class="table-info">
                    <td>
                        <a href="<?= base_url('reports/wajib') ?>" class="btn btn-primary-responsive-width btn-outline-light mb-3" style="background: #2B1C2F;">Laporan Wajib</a>
                    </td>
                    <td></td>
                    <?php if ($user['role_id'] == 1) : ?>
                        <td>
                            <a href="<?= base_url('reports/logwajib') ?>" class="btn btn-warning"><i class="fa-solid fa-eye fa-l"></i></i></a>
                        </td>
                    <?php else : ?>
                        <td>
                        </td>
                    <?php endif; ?>
                </tr>
                <tr class="table-info">
                    <td><a href="<?= base_url('reports/rutin') ?>" class="btn btn-primary-responsive-width btn-outline-light mb-3" style="background: #2B1C2F;">Laporan Pemeriksaan</a></td>
                    <td></td>
                    <?php if ($user['role_id'] == 1) : ?>

                        <td>
                            <a href="<?= base_url('reports/logrutin') ?>" class="btn btn-warning"><i class="fa-solid fa-eye fa-l"></i></i></a>
                        </td>
                    <?php else : ?>
                        <td>
                        </td>
                    <?php endif; ?>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- End of Main Content -->