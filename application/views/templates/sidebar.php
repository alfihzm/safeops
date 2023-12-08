<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #2B1C2F;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
        <div class="sidebar-brand-icon" style="margin-right: 7px;">
            <?php
            $logoPath = 'assets/img/upload/WhiteLogo.png';
            if (file_exists($logoPath)) {
                echo '<img src="' . base_url($logoPath) . '" alt="Logo" style="max-width: 100%; max-height: 50px;">';
            } else {
                echo 'Logo not found';
            }
            ?>
        </div>
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

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->