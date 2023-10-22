<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #2B1C2F;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user') ?>">
        <div class="sidebar-brand-icon" style="margin-right: 7px;">
            <i class="fa-solid fa-building-shield"></i>
        </div>
        <div class="sidebar-brand-text">SafeOps</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- QUERY MENU -->
    <?php

    $role_id = $this->session->userdata('role_id');

    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                    FROM `user_menu` JOIN `user_access_menu`
                      ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                   WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC
                ";
    $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- LOOPING MENU -->
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu'] ?>
        </div>

        <!-- SIAPKAN SUB-MENU SESUAI MENU -->
        <?php

        $menuId = $m['id'];

        $querySubMenu = "SELECT   *
                         FROM     `user_sub_menu`
                         WHERE    `menu_id` = $menuId
                         AND      `is_active` = 1
                       ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>

        <?php foreach ($subMenu as $sm) : ?>
            <?php if ($judul == $sm['id']) : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url($sm['url']) ?>">
                    <i class="<?= $sm['icon'] ?>"></i>
                    <span> <?= $sm['judul_menu'] ?> </span></a>
                </li>


            <?php endforeach ?>

            <hr class="sidebar-divider">

        <?php endforeach; ?>

        <!-- Masalah 22/10/2023 Sekarang Di sini (Cari Cara Agar Menu Bisa di Collapse) -->
        <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-solid fa-file-pen"></i>
            <span> Buat Laporan </span></a>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> Pelaporan Lapangan </h6>
                <a class="collapse-item" href="buttons.html"> Bukti Hasil Patroli </a>
                <a class="collapse-item" href="buttons.html"> Bukti Kelancaran Acara </a>
                <a class="collapse-item" href="buttons.html"> Bukti Kerusakan </a>
                <a class="collapse-item" href="buttons.html"> Data Kehilangan Barang </a>
                <a class="collapse-item" href="buttons.html"> Laporan Anomali </a>
            </div>
        </div>
    </li> --!>

    <!-- Nav Item - Pages Collapse Menu -->

        <!-- Divider -->

        <!-- Divider -->
        <!-- <hr class="sidebar-divider d-none d-md-block"> -->

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->