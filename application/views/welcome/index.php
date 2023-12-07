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
            background: #000;
            color: #fff;
        }

        header {
            background: #333;
            padding: 4px;
            text-align: center;
        }

        header nav {
            background: #333;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 1.2em;
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/img/background/auth_background.png') no-repeat center center fixed;
            background-size: cover;
            height: 75vh;
            position: relative;
        }

        .text-content {
            text-align: left;
            margin-right: 20px; /* Add some margin between text and image */
        }

        .image-content img {
            width: 100%; /* Make the image responsive */
            max-width: 400px;
            height: auto;
        }

        .main-content h1 {
            font-size: 3em;
            margin: 0;
            color: #fff; /* Set the text color to white */
        }

        .main-content p {
            font-size: 1.2em;
            color: #fff; /* Set the text color to white */
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .main-content {
                flex-direction: column; /* Change to column layout on smaller screens */
            }

            .text-content {
                margin-right: 0; /* Remove margin on smaller screens */
                margin-bottom: 20px; /* Add margin below text on smaller screens */
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#" class="logo"><img src="path/to/your/logo.png" alt="Logo"></a>
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a class="login-btn login" href="<?= base_url('auth') ?>">Login</a>
        </nav>
    </header>

    <div class="main-content">
        <div class="text-content">
            <h1>SAFEOPS</h1>
            <p>Pelindung Setia di Setiap Sudut, Untuk menjaga Lingkungan dengan Keamanan Utama.</p>
        </div>
        <div class="image-content">
            <img src="assets/img/upload/security.png" alt="Design Image">
        </div>
    </div>

</body>
</html>
