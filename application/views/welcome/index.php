<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAFEOPS</title>
    <style> 
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
        }

        header {
            background: transparent;
            padding: 2px;
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
            padding: 10px;
        }

        header nav a.logo {
            display: inline-block;
        }

        header nav a.logo img {
            display: block;
            width: 50px; 
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
            padding: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 75vh;
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
            color: #fff; 
        }

        .main-content p {
            font-size: 1.2em;
            color: #fff; 
        }
        
        /* Hamburger Menu Styles */
        #toggle-menu {
            display: none;
            cursor: pointer;
            font-size: 1.1em;
            position: absolute;
            top: 10px;
            right: 10px; 
            color: #fff; 
        }

        #mobile-navbar nav {
            position: relative;
        }

        @media (max-width: 768px) {
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

            .main-content {
                flex-direction: column-reverse;
            }
        }
    </style>
</head>
<body>
    <div id="mobile-navbar">
        <header>
            <nav>
                <a href="#" class="logo"><img src="path/to/your/logo.png" alt="Logo"></a>
                <a href="#" id="toggle-menu">&#9776;</a>
                <div id="menu-container"></div>
            </nav>
        </header>
    </div>

    <!-- Desktop Navbar -->
    <div id="desktop-navbar">
        <header>
            <nav>
                <a href="#" class="logo"><img src="path/to/your/logo.png" alt="Logo"></a>
                <a href="#">Home</a>
                <a href="#">About Us</a>
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

    <script>
       document.addEventListener('DOMContentLoaded', function () {
        const toggleMenu = document.getElementById('toggle-menu');
        const menuContainer = document.getElementById('menu-container');

        toggleMenu.addEventListener('click', function (event) {
            event.stopPropagation();
            const mobileNavbar = document.querySelector('#mobile-navbar nav');
            mobileNavbar.classList.toggle('menu-opened');

            if (mobileNavbar.classList.contains('menu-opened')) {
                // Create "X" icon when the menu is opened
                toggleMenu.innerHTML = '&#10005';

                // Remove menu text when the menu is opened
                const menuItems = [
                    { text: 'Home', href: '#' }, // Update with your actual links
                    { text: 'About Us', href: '#' },
                    { text: 'Login', href: '<?= base_url('auth') ?>' } // Update with the login link
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
        document.addEventListener('click', function () {
            const mobileNavbar = document.querySelector('#mobile-navbar nav');
            mobileNavbar.classList.remove('menu-opened');
            toggleMenu.innerHTML = '&#9776;'; // Reset the icon to hamburger
            menuContainer.innerHTML = ''; // Clear the menu container
        });

        // Prevent closing the menu when clicking inside the menu container
        menuContainer.addEventListener('click', function (event) {
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