<style>
    .pagination-container {
        margin-top: 20px;
    }

    .pagination {
        margin: 0;
    }

    .pagination li {
        display: inline-block;
        margin-right: 5px;
    }

    .pagination a {
        color: #16537e;
        background-color: #fff;
        border: 1px solid #7E7E7E;
        padding: 6px 12px;
    }

    .pagination .active a {
        color: #fff;
        background-color: #007bff;
        border: 1px solid #007bff;
    }

    .pagination .disabled a {
        color: #6c757d;
        pointer-events: none;
        cursor: not-allowed;
        background-color: #fff;
        border: 1px solid #dee2e6;
    }
</style>

<div class="container" style="height: 95vh;">

    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="flash_message">
        <?= $this->session->flashdata('message') ?>
    </div>

    <div class="row">
        <div class="col-lg-12" style="border-radius: 10%;">
            <?= form_error('nama_event', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>


            <a href=" <?= base_url('member/tambahAnggota'); ?>" class="btn btn-primary mb-3"> Tambah Anggota
            </a>

            <input type="text" id="searchInput" class="form-control mb-3 col-sm-4" placeholder="Cari nama anggota">

            <table class="table table-bordered rounded" style="border-radius: 5%;">
                <thead>
                    <tr>
                        <th scope=" col" style="width: 100px;">No. Pegawai</th>
                        <th scope="col" style="width: 120px;">Nama</th>
                        <th scope="col" style="width: 100px;">Username</th>
                        <th scope="col" style="width: 130px;">Email</th>
                        <th scope="col" style="width: 90px;">Jabatan</th>
                        <th scope="col" style="width: 150px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($anggota as $a) : ?>
                        <tr>
                            <td><?= $a['nopeg']; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['username']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td>
                                <?php
                                if ($a['role_id'] == 2) {
                                    echo 'Satpam';
                                } else {
                                    echo $a['role_id']; // Jika bukan Satpam, tampilkan role_id
                                }
                                ?>
                            </td>
                            <td>
                                <a href="<?= base_url('member/viewAnggota/' . $a['id']); ?>" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i></a>
                                <a href="<?= base_url('member/editAnggota/' . $a['id']); ?>" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger" onclick="konfirmasiAndDelete('<?= base_url('member/hapusAnggota/' . $a['id']); ?>')"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php if ($total_rows > $per_page) : ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
                        $total_pages = ceil($total_rows / $per_page);
                        $current_page = floor($offset / $per_page) + 1; // Hitung halaman saat ini

                        // Tambahkan tautan "Previous"
                        $prev_url = ($current_page > 1) ? base_url() . 'member/index/' . (($current_page - 2) * $per_page) : '';
                        echo '<li class="page-item ' . ($current_page == 1 ? 'disabled' : '') . '"><a class="page-link" href="' . $prev_url . '"><i class="fas fa-solid fa-arrow-left"></i></a></li>';

                        // Tampilkan tautan halaman
                        for ($i = 1; $i <= $total_pages; $i++) {
                            $page_url = base_url() . 'member/index/' . ($i - 1) * $per_page;
                            echo '<li class="page-item ' . ($i == $current_page ? 'active' : '') . '"><a class="page-link" href="' . $page_url . '">' . $i . '</a></li>';
                        }

                        // Tambahkan tautan "Next"
                        $next_url = ($current_page < $total_pages) ? base_url() . 'member/index/' . ($current_page * $per_page) : '';
                        echo '<li class="page-item ' . ($current_page == $total_pages ? 'disabled' : '') . '"><a class="page-link" href="' . $next_url . '"><i class="fas fa-solid fa-arrow-right"></i></a></li>';
                        ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.setTimeout(function() {
        $(".flash_message").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);

    function konfirmasiAndDelete(url) {
        let r = confirm('Apakah Anda yakin ingin menghapus anggota ini?');

        if (r == true) {
            let konfirmasiLanjut = confirm('Tindakan ini tidak dapat dibatalkan. Apakah Anda yakin ingin melanjutkan?');

            if (konfirmasiLanjut) {
                window.location.href = url;
            } else {
                alert('Hapus anggota dibatalkan.');
                return false;
            }
        } else {
            alert('Hapus anggota dibatalkan.');
            return false;
        }
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let searchInput = document.getElementById("searchInput");
        searchInput.addEventListener("input", function() {
            let filter = searchInput.value.toLowerCase();

            let rows = document.querySelectorAll("tbody tr");

            rows.forEach(function(row) {
                let nameColumn = row.querySelector(
                    "td:nth-child(2)");
                let name = nameColumn.textContent.toLowerCase();

                if (name.includes(filter)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    });
</script>