<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> SafeOps </title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');

    @font-face {
        font-family: 'CircularStd';
        src: url('assets/font/circular-std.ttf') format('truetype');
    }

    body {
        margin: 0;
        padding: 0;
        font-family: 'CircularStd', sans-serif;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/img/background/auth_background.png') no-repeat center center fixed;
        background-size: cover;
        scroll-behavior: smooth;
    }

    header {
        background: rgba(51, 51, 51, 0.10);
        padding: 10px;
    }

    header nav {
        background: transparent;
        padding: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header nav a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        font-size: 1.1em;
        padding: 5px;
    }

    header nav a.logo {
        display: inline-block;
    }

    header nav a.logo img {
        display: block;
        width: 130px;
        height: auto;
    }

    .logo {
        margin-right: auto;
    }

    .login-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #3498db;
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .login-btn:hover {
        background-color: #2980b9;
    }

    .login {
        margin-left: auto;
    }

    .main-content {
        text-align: center;
        padding: 10px 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 86vh;
        position: relative;
    }

    .text-content {
        text-align: left;
        margin-right: 20px;
    }

    .image-content img {
        width: 100%;
        max-width: 400px;
        height: auto;
    }

    .main-content h1 {
        font-size: 3em;
        margin: 0;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        color: #fff;
    }

    .main-content p {
        font-family: 'Inter', sans-serif;
        font-weight: 300;
        font-size: 1.2em;
        color: #fff;
    }

    /* Footer Styles */
    footer {
        background: rgba(51, 51, 51, 0.7);
        color: #fff;
        text-align: center;
        padding: 21px;
    }

    .footer-content {
        margin: 0 auto;
    }

    .footer-content p {
        margin: 0;
        font-size: 0.9em;
    }


    /* Hamburger Menu Styles */
    #toggle-menu {
        display: none;
        cursor: pointer;
        font-size: 1.1em;
        position: absolute;
        top: 22px;
        right: 10px;
        color: #fff;
    }

    #mobile-navbar nav {
        position: relative;
    }

    /* Konten About Us */
    .header h3 {
        font-size: 2.5rem;
        display: flex;
        justify-content: center;
        position: relative;
        top: 20px;
        font-family: 'Raleway', sans-serif;
    }

    .header h4 {
        font-size: 2rem;
        display: flex;
        justify-content: center;
        position: relative;
        top: 20px;
        font-family: 'Raleway', sans-serif;
        margin-bottom: 40px;
    }

    .cards {
        padding: 0px;
    }

    .card {
        box-shadow: 10px 10px 5px 0px rgba(117, 117, 117, 0.75);
    }

    .profile img {
        border-radius: 100%;
        width: 100%;
        height: auto;
    }

    .box p {
        font-family: montserrat;
    }

    @media (max-width: 780px) {
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        header nav {
            flex-direction: column;
        }

        #toggle-menu {
            display: block;
            text-align: right;
        }

        header nav a {
            width: 100%;
        }

        header nav a.logo {
            display: block;
            text-align: center;
        }

        header nav a.logo,
        header nav a.login {
            display: block;
            margin: 10px 0;
        }

        header nav a.close-menu {
            display: block;
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-top: 10px;
        }

        header nav.menu-opened a {
            display: block;
            text-align: center;
        }

        .wrapper {
            flex-grow: 1;
        }

        .main-content {
            flex-direction: column-reverse;
        }

        .image-content img {
            width: 90%;
            max-width: 400px;
            height: auto;
        }

        .main-content h1 {
            text-align: center;
            margin-left: 24px;
            margin-top: 30px;
            font-size: 1.5rem;
        }

        .main-content p {
            text-align: center;
            font-size: auto;
            margin-left: 24px;
            font-size: 1rem;
        }

        footer {
            margin-top: auto;
        }

        html,
        body {
            overflow-x: hidden;
        }

        /* Konten About Us */
        .header h3 {
            font-size: 2rem;
        }

        .cards {
            flex-direction: column;
            align-items: center;
            height: 100%;
        }

        .card {
            width: 100%;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 860px) {
        .container {
            flex-direction: column;
        }

        box {
            width: 50%;
            margin-bottom: 20px;
        }
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                    <a href="<?= base_url('welcome'); ?>" class="logo"><img src="assets/img/upload/whitelogo.png"
                            alt="Logo"></a>
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
                    <img style="border-radius: 5px 5px 0px 0px;"
                        src="<?= base_url('assets/img/cards/profesional-security.jpg'); ?>" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title"><b> Profesional </b></h5>
                        <p class="card-text"> Tim kami terdiri dari personel keamanan yang sangat terlatih dan
                            berpengalaman. Mereka dilengkapi dengan keterampilan teknis dan taktis yang diperlukan
                            untuk menangani setiap situasi keamanan. </p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img style="border-radius: 5px 5px 0px 0px;"
                        src="<?= base_url('assets/img/cards/security-tech.jpg'); ?>" class="img-fluid">
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
                    <img style="border-radius: 5px 5px 0px 0px;"
                        src="<?= base_url('assets/img/cards/security-smile.jpg'); ?>" class="img-fluid rounded-start">
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

            <div class="container col-sm-12"
                style="padding: 20px; height: 100%; display: flex; justify-content: space-evenly; align-items: center;">
                <div class="box" style="margin: 10px; display: flex; align-items: center; flex-direction: column;">
                    <img style="height: 160px; width: 160px; border: 1px solid #000; border-radius: 100%; box-shadow: 5px 5px 5px 0px rgba(156,156,156,0.75);"
                        src="<?= base_url('assets/img/welcome/profile3.png'); ?>" alt="profile1">
                    <p style="margin-top: 10px"><b> ANDRIAN F. </b></p>
                </div>
                <div class="box" style="margin: 10px; display: flex; align-items: center; flex-direction: column;">
                    <img style="height: 160px; width: 160px; border: 1px solid #000; border-radius: 100%; box-shadow: 5px 5px 5px 0px rgba(156,156,156,0.75);"
                        src="<?= base_url('assets/img/welcome/profile7.png'); ?>" alt="profile1">
                    <p style="margin-top: 10px"><b> M. ALFI H. </b></p>
                </div>
                <div class="box" style="margin: 10px; display: flex; align-items: center; flex-direction: column;">
                    <img style="height: 160px; width: 160px; border: 1px solid #000; border-radius: 100%; box-shadow: 5px 5px 5px 0px rgba(156,156,156,0.75);"
                        src="<?= base_url('assets/img/welcome/profile8.png'); ?>" alt="profile1">
                    <p style="margin-top: 10px"><b> M. RAIHAN H. </b></p>
                </div>
                <div class="box" style="margin: 10px; display: flex; align-items: center; flex-direction: column;">
                    <img style="height: 160px; width: 160px; border: 1px solid #000; border-radius: 100%; box-shadow: 5px 5px 5px 0px rgba(156,156,156,0.75);"
                        src="<?= base_url('assets/img/welcome/profile4.png'); ?>" alt="profile1">
                    <p style="margin-top: 10px"><b> YAHYA H.F. </b></p>
                </div>
                <div class="box" style="margin: 10px; display: flex; align-items: center; flex-direction: column;">
                    <img style="height: 150px; width: 150px; border: 1px solid #000; border-radius: 100%; box-shadow: 5px 5px 5px 0px rgba(156,156,156,0.75);"
                        src="<?= base_url('assets/img/welcome/profile5.png'); ?>" alt="profile1">
                    <p style="margin-top: 10px"><b> LORENZA A. </b></p>
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
</body>

</html>