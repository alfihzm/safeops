<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> SafeOps </title>
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/welcome/welcome.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

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

            <div class="animate">
                <div class="container" style="height: 100%; padding: 50px; display: flex; justify-content: center; align-items: center;">
                    <div class="card border border-dark col-lg-4" style="box-shadow: 10px 10px 5px 0px rgba(168,168,168,0.75); display: flex; flex-direction: column; margin: 20px;">
                        <div class="card-header col-lg-12" style="background-color: #312F44; color: white; text-align: center; width: 100%;">
                            Jumlah Security
                        </div>
                        <div class="box" style="display: flex; justify-content: space-around; align-items: center; padding: 20px; background: linear-gradient(124deg, #67aecb 0%, #7854b0 100%);">
                            <img style="border-radius: 5px; max-height: 150px; max-width: 150px; width: 100%; border: 1px solid #7854b0;" src="<?= base_url('assets/img/welcome/profile2.png'); ?>" alt="profile1">
                            <div style="display: flex; align-items: center; justify-content: center; margin: 20px;">
                                <h4 style="color: #FFF; font-size: 1.1rem; margin-left: 15px;">12 Anggota</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card border border-dark col-lg-4" style="box-shadow: 10px 10px 5px 0px rgba(168,168,168,0.75); display: flex; flex-direction: column; margin: 20px;">
                        <div class="card-header col-lg-12" style="background-color: #312F44; color: white; text-align: center; width: 100%;">
                            Jumlah Orang Hilang
                        </div>
                        <div class="box" style="display: flex; flex-direction: column; justify-content: space-around; align-items: center; padding: 20px; background: linear-gradient(124deg, #a6214b 0%, #7f011a 100%); height: 190px;">
                            <label style="color: #FFF; margin: 10px;" for="cars">Pilih Kategori</label>
                            <select id="cars" style="padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); outline: none;" onfocus="this.style.borderColor='#ccc'" onblur="this.style.borderColor='#ccc'">
                                <option value="volvo"> Orang Hitam </option>
                                <option value="saab"> Furniture </option>
                            </select>
                            <div style="display: flex; align-items: center; justify-content: center; margin: 20px;">
                                <h4 style="color: #FFF; font-size: 1.1rem;">12 Anggota</h4>
                            </div>
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
                    // Create "X" icon when the menu is opened
                    toggleMenu.innerHTML = '&#10005';

                    // Remove menu text when the menu is opened
                    const menuItems = [{
                            text: 'Home',
                            href: '#'
                        }, // Update with your actual links
                        {
                            text: 'About Us',
                            href: '#'
                        },
                        {
                            text: 'Login',
                            href: '<?= base_url('auth') ?>'
                        } // Update with the login link
                    ];

                    menuContainer.innerHTML = ''; // Clear the menu container

                    menuItems.forEach(item => {
                        const menuItem = document.createElement('a');
                        menuItem.href = item.href;
                        menuItem.textContent = item.text;
                        menuContainer.appendChild(menuItem);
                    });
                } else {
                    // Create hamburger icon when the menu is closed
                    toggleMenu.innerHTML = '&#9776;';
                    menuContainer.innerHTML = ''; // Clear the menu container when the menu is closed
                }
            });

            // Close the menu when clicking outside the menu container
            document.addEventListener('click', function() {
                const mobileNavbar = document.querySelector('#mobile-navbar nav');
                mobileNavbar.classList.remove('menu-opened');
                toggleMenu.innerHTML = '&#9776;'; // Reset the icon to hamburger
                menuContainer.innerHTML = ''; // Clear the menu container
            });

            // Prevent closing the menu when clicking inside the menu container
            menuContainer.addEventListener('click', function(event) {
                event.stopPropagation();
            });

            // Show/hide desktop/mobile navbar based on screen width
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

            // Initial check and event listener for window resize
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