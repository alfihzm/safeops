<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> SafeOps </title>
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/welcome/welcome.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<style>
@font-face {
	font-family: 'CircularStd';
	src: url('assets/font/circular-std.ttf') format('truetype');
}

body {
	font-family: 'CircularStd', 'Helvetica', sans-serif;

}
</style>
</head>

<body>
    <div class="wrapper">
        <div id="mobile-navbar">
            <header>
                <nav>
                    <a href="#" class="logo"><img src="assets/img/upload/Whitelogo.png" alt="Logo"></a>
                    <a href="#" id="toggle-menu">&#9776;</a>
                    <div id="menu-container"></div>
                </nav>
            </header>
        </div>

        <!-- Desktop Navbar -->
        <div id="desktop-navbar">
            <header>
                <nav>
                    <a href="<?= base_url('welcome'); ?>" class="logo"><img src="assets/img/upload/whitelogo.png" alt="Logo"></a>
                    <a class="login" href="<?= base_url('auth') ?>">Login</a>
                </nav>
            </header>
        </div>

        <div class="main-content">
            <div class="text-content">
                <h1>SAFEOPS</h1>
                <p>Pelindung Setia di Setiap Sudut, Untuk menjaga Lingkungan dengan Keamanan Utama.</p>
            </div>
            <div class="image-content">
                <img src="assets/img/upload/adryjelek.png" alt="Design Image">
            </div>
        </div>

        <div class="header" style="height: 100%; background: #FFF;">
            <h3> ABOUT US </h3>

            <div class="cards" style="display: flex; padding: 50px; justify-content: space-around;">
                <div class="card" style="width: 18rem;">
                    <img style="border-radius: 5px 5px 0px 0px;" src="<?= base_url('assets/img/cards/profesional-security.jpg'); ?>" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title"><b> Profesional </b></h5>
                        <p class="card-text"> Tim kami terdiri dari personel keamanan yang sangat terlatih dan
                            berpengalaman. Mereka dilengkapi dengan keterampilan teknis dan taktis yang diperlukan
                            untuk menangani setiap situasi keamanan. </p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img style="border-radius: 5px 5px 0px 0px;" src="<?= base_url('assets/img/cards/security-tech.jpg'); ?>" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">
                            <b> Teknologi </b>
                        </h5>
                        <p class="card-text"> Kami memanfaatkan teknologi terkini dalam pengawasan dan pemantauan untuk
                            memastikan keamanan maksimal. Sistem keamanan kami terintegrasi dengan solusi kecerdasan
                            buatan untuk mendeteksi dan merespons potensi ancaman dengan cepat. </p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img style="border-radius: 5px 5px 0px 0px;" src="<?= base_url('assets/img/cards/security-smile.jpg'); ?>" class="img-fluid rounded-start">
                    <div class="card-body">
                        <h5 class="card-title"><b> Kepuasan Client </b></h5>
                        <p class="card-text"> SafeOps Security Guard berkomitmen untuk memberikan pelayanan pelanggan
                            yang unggul. Kami percaya bahwa keberhasilan kami sejalan dengan kepuasan Anda, dan kami
                            berusaha keras untuk memenuhi dan melampaui harapan Anda.
                        </p>
                    </div>
                </div>
            </div>

            <h4> TIM KAMI </h4>

            <div class="container" style="padding: 20px; height: 100%; display: flex; justify-content: space-evenly; align-items: center;">
                <div class="box" style="margin: 10px; display: flex; align-items: center; flex-direction: column;">
                    <img style="height: 160px; width: 160px; border: 1px solid #000; border-radius: 100%; box-shadow: 5px 5px 5px 0px rgba(156,156,156,0.75);" src="<?= base_url('assets/img/welcome/profile3.png'); ?>" alt="profile1">
                    <p style="margin-top: 10px"><b> ANDRIAN F. </b></p>
                </div>
                <div class="box" style="margin: 10px; display: flex; align-items: center; flex-direction: column;">
                    <img style="height: 160px; width: 160px; border: 1px solid #000; border-radius: 100%; box-shadow: 5px 5px 5px 0px rgba(156,156,156,0.75);" src="<?= base_url('assets/img/welcome/profile7.png'); ?>" alt="profile1">
                    <p style="margin-top: 10px"><b> M. ALFI H. </b></p>
                </div>
                <div class="box" style="margin: 10px; display: flex; align-items: center; flex-direction: column;">
                    <img style="height: 160px; width: 160px; border: 1px solid #000; border-radius: 100%; box-shadow: 5px 5px 5px 0px rgba(156,156,156,0.75);" src="<?= base_url('assets/img/welcome/profile8.png'); ?>" alt="profile1">
                    <p style="margin-top: 10px"><b> M. RAIHAN H. </b></p>
                </div>
                <div class="box" style="margin: 10px; display: flex; align-items: center; flex-direction: column;">
                    <img style="height: 160px; width: 160px; border: 1px solid #000; border-radius: 100%; box-shadow: 5px 5px 5px 0px rgba(156,156,156,0.75);" src="<?= base_url('assets/img/welcome/profile4.png'); ?>" alt="profile1">
                    <p style="margin-top: 10px"><b> YAHYA H. F. </b></p>
                </div>
                <div class="box" style="margin: 10px; display: flex; align-items: center; flex-direction: column;">
                    <img style="height: 150px; width: 150px; border: 1px solid #000; border-radius: 100%; box-shadow: 5px 5px 5px 0px rgba(156,156,156,0.75);" src="<?= base_url('assets/img/welcome/profile5.png'); ?>" alt="profile1">
                    <p style="margin-top: 10px"><b> LORENZA A. </b></p>
                </div>
            </div>
            <div class="container" style="height: 100%; padding: 50px; display: flex; justify-content: center; align-items: center;">
                <div class="card border border-dark col-lg-4" style="box-shadow: 10px 10px 5px 0px rgba(168,168,168,0.75); display: flex; flex-direction: column; margin: 20px;">
                    <div class="card-header col-lg-12" style="background-color: #312F44; color: white; text-align: center; width: 100%;">
                        Jumlah Security
                    </div>
                    <div class="box" style="display: flex; justify-content: space-around; align-items: center; padding: 20px; background: linear-gradient(124deg, #67aecb 0%, #7854b0 100%);">
                        <img style="border-radius: 5px; max-height: 150px; max-width: 150px; width: 100%; border: 1px solid #7854b0;" src="<?= base_url('assets/img/welcome/profile2.png'); ?>" alt="profile1">
                        <div style="display: flex; align-items: center; justify-content: center; margin: 20px;">
                            <h4 style="color: #FFF; font-size: 1.1rem; margin-left: 15px;"><?= $jumlahAnggota ?>
                                Anggota
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="card border border-dark col-lg-4" style="box-shadow: 10px 10px 5px 0px rgba(168,168,168,0.75); display: flex; flex-direction: column; margin: 20px;">
                    <div class="card-header col-lg-12" style="background-color: #312F44; color: white; text-align: center; width: 100%;">
                        Jumlah Laporan Barang Hilang
                    </div>
                    <div class="box" style="display: flex; justify-content: space-around; align-items: center; padding: 20px; background: linear-gradient(124deg, #a6214b 0%, #7f011a 100%);">
                        <img style="border-radius: 5px; max-height: 150px; max-width: 150px; width: 100%; border: 1px solid #7f011a;" src="<?= base_url('assets/img/welcome/lost-item.jpg'); ?>" alt="lost-item">
                        <div style="display: flex; align-items: center; justify-content: center; margin: 20px;">
                            <h4 style="color: #FFF; font-size: 1.1rem; margin-left: 15px;"> <?= $jumlahBarang; ?>
                                Barang
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2023 SafeOps. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleMenu = document.getElementById('toggle-menu');
            const menuContainer = document.getElementById('menu-container');

            toggleMenu.addEventListener('click', function(event) {
                event.stopPropagation();
                const mobileNavbar = document.querySelector('#mobile-navbar nav');
                mobileNavbar.classList.toggle('menu-opened');

                if (mobileNavbar.classList.contains('menu-opened')) {
                    toggleMenu.innerHTML = '&#10005';

                    const menuItems = [{
                            text: 'Home',
                            href: '#'
                        },
                        {
                            text: 'About Us',
                            href: '#'
                        },
                        {
                            text: 'Login',
                            href: '<?= base_url('auth') ?>'
                        }
                    ];

                    menuContainer.innerHTML = '';

                    menuItems.forEach(item => {
                        const menuItem = document.createElement('a');
                        menuItem.href = item.href;
                        menuItem.textContent = item.text;
                        menuContainer.appendChild(menuItem);
                    });
                } else {
                    toggleMenu.innerHTML = '&#9776;';
                    menuContainer.innerHTML = '';
                }
            });

            document.addEventListener('click', function() {
                const mobileNavbar = document.querySelector('#mobile-navbar nav');
                mobileNavbar.classList.remove('menu-opened');
                toggleMenu.innerHTML = '&#9776;';
                menuContainer.innerHTML = '';
            });

            menuContainer.addEventListener('click', function(event) {
                event.stopPropagation();
            });

            function handleNavbarVisibility() {
                const mobileNavbar = document.getElementById('mobile-navbar');
                const desktopNavbar = document.getElementById('desktop-navbar');

                if (window.innerWidth <= 768) {
                    mobileNavbar.style.display = 'block';
                    desktopNavbar.style.display = 'none';
                } else {
                    mobileNavbar.style.display = 'none';
                    desktopNavbar.style.display = 'block';
                }
            }

            handleNavbarVisibility();
            window.addEventListener('resize', handleNavbarVisibility);
        });
    </script>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                console.info(entry);
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                } else {
                    entry.target.classList.remove('show');
                }
            });
        });

        const hiddenElements = document.querySelectorAll('.card');
        hiddenElements.forEach((el) => observer.observe(el));
    </script>

    <script>
        const observers = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                console.info(entry);
                if (entry.isIntersecting) {
                    entry.target.classList.add('tampil');
                } else {
                    entry.target.classList.remove('tampil');
                }
            });
        });
        const elementHidden = document.querySelectorAll('.container');
        elementHidden.forEach((el) => observer.observe(el));
    </script>

    <script>
        const observerse = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                console.info(entry);
                if (entry.isIntersecting) {
                    entry.target.classList.add('muncul');
                } else {
                    entry.target.classList.remove('muncul');
                }
            });
        });
        const elementHidden2 = document.querySelectorAll('.animate');
        elementHidden2.forEach((el) => observer.observe(el));
    </script>
</body>

</html>